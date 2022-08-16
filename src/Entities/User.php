<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Classes\Crypto;
use CaioCesar173\Utils\Enum\StatusEnum;
use Caiocesar173\Utils\Abstracts\RepositoryAbstract;
use Caiocesar173\Utils\Services\PermissionMapService;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Laravel\Passport\HasApiTokens;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class User extends Authenticatable implements MustVerifyEmail, Transformable, AuditableContract
{
    use HasApiTokens, Notifiable, TransformableTrait, HasFactory, Auditable;

    protected $auditHide = [];
    protected $auditTranslate = [];
    protected $auditTranslateValue = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function create($data)
    {
        $avatar = null;

        if (isset($data['avatar'])) {
            $avatar = $data['avatar'];
            unset($data['avatar']);
        }

        if (!isset($data['password']) || empty($data['password']))
            $data['password'] = bcrypt('123456789');

        if (!isset($data['username']) || empty($data['username'])) {
            $uuid = Crypto::uuid();
            $data['username'] = explode('@', $data['email'])[0] . $uuid;
        }

        $user = parent::create($data);
        
        if ($avatar) {
            $avatar['responsable_id'] = $user->id;
            $avatar['responsable_type'] = get_class($user);
            $avatar['base64'] = json_encode($avatar['base64']);

            Images::create($avatar);
        }

        if (!isset($data['permission'])) {
            $data['permission'] = [
                'user',
                'users',
                'user.show',
                'user.index',
                'user.store',
                'user.update',
                'user.destroy',
                'user.inactivate',
                'user.activate',
                'user.recover',
                'user.block',
                'user.unblock',
                'user.audit',
                'client',
                'auth.login',
                'auth.logout',
                'user.information',
                'user.permission',
            ];
        }

        if (isset($data['permission'])) {
            $permissions = [];

            if (is_array($data['permission'])) {
                foreach ($data['permission'] as $permission) {
                    $group = PermissionItem::where('code', $permission)->first();
                    if (is_null($group))
                        throw new \Exception("unable to find Permission Item: $permission", 1);

                    $association = app(PermissionMapService::class)->associate($group, $user);
                    if ($association)
                        $permissions[] = $association;
                }
            } else {
                $group = PermissionItem::where('code', $data['permission'])->first();
                if (is_null($group))
                    throw new \Exception("unable to find Permission Item: $group", 1);

                $association = app(PermissionMapService::class)->associate($group, $user);
                if ($association)
                    $permissions[] = $association;
            }
        }

        $user['permissions'] = $permissions;

        return $user;
    }

    public static function edit($data, Model $model)
    {
        DB::beginTransaction();
        try {
            if ($model->update($data)) {
                DB::commit();
                return $model;
            }
            DB::rollback();
            return 'unable to save';
        } catch (\Exception $e) {
            DB::rollback();
            return 'ops, something went wrong...';
        }
    }

    public static function exclude(Model $model)
    {
        DB::beginTransaction();
        try {
            $model->status = StatusEnum::EXCLUDED;
            if ($model->save()) {
                DB::commit();
                return true;
            }
            DB::rollback();
            return 'unable to save';
        } catch (\Exception $e) {
            DB::rollback();
            return 'ops, something went wrong...';
        }
    }

    public function getEntityNameAttribute()
    {
        $entity = class_basename($this);
        $entity = strtolower($entity);
        return $entity;
    }

    public function getEntityStatusAttribute()
    {
        return $this->status;
    }

    public function getIsActiveAttribute()
    {
        return $this->status == StatusEnum::ACTIVE;
    }

    public function getIsDestroyedAttribute()
    {
        return $this->status == StatusEnum::EXCLUDED;
    }

    public function getIsBlockedAttribute()
    {
        return $this->status == StatusEnum::BLOCKED;
    }

    public function getIsInactiveAttribute()
    {
        return $this->status == StatusEnum::INACTIVE;
    }

    public function getValueModel($field, $default = '')
    {
        $list = explode('.', $field);
        $model = clone $this;

        foreach ($list as $position) {
            $value = $model->{$position} ?? $default;
            $method = str_replace(' ', '', lcfirst(ucwords('form ' . str_replace('_', ' ', $position) . ' Attribute')));

            if (method_exists($model, $method)) {
                $model = $model->{$method}($value);
                continue;
            }

            $model = $value;
        }

        return $model ?? $default;
    }

    protected static function getRepository()
    {
        $class = str_replace('Entities', 'Repositories', get_called_class());
        return app($class . 'Repository');
    }

    protected function hasManyRepository($class, $foreignKey = null, $localKey = null)
    {
        $reposirory = $class::getRepository();
        return $this->relationshipRepository($this->hasMany($class, $foreignKey, $localKey), $reposirory);
    }

    protected function hasOneRepository($class)
    {
        $reposirory = $class::getRepository();
        return $this->relationshipRepository($this->hasOne($class), $reposirory);
    }

    protected function morphManyRepository($related, $name, $type = null, $id = null, $localKey = null)
    {
        $reposirory = $related::getRepository();
        return $this->relationshipRepository($this->morphMany($related, $name, $type, $id, $localKey), $reposirory);
    }

    protected function belongsToRepository($class)
    {
        $reposirory = $class::getRepository();
        return $this->relationshipRepository($this->belongsTo($class), $reposirory);
    }

    private function relationshipRepository(Relation $relation, RepositoryAbstract $reposirory)
    {
        foreach ($reposirory->getCriteria() as $criteria) {
            $filter = app(get_class($criteria));
            $relation = $filter->apply($relation, $reposirory);
        }

        return $relation;
    }

    public function avatar()
    {
        return $this->morphOne(Images::class, 'responsable');
    }
}
