<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Classes\Crypto;
use Caiocesar173\Utils\Enum\StatusEnum;
use Caiocesar173\Utils\Exceptions\ApiException;
use Caiocesar173\Utils\Database\Factories\UserFactory;
use Caiocesar173\Utils\Services\PermissionMapService;
use Caiocesar173\Utils\Exceptions\ValidatorException;
use Caiocesar173\Utils\Repositories\PermissionRepository;
use Caiocesar173\Utils\Exceptions\PermissionGroupNotFound;
use Caiocesar173\Utils\Repositories\PermissionMapRepository;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Laravel\Passport\HasApiTokens;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class User extends Authenticatable implements MustVerifyEmail, Transformable, AuditableContract
{
    use HasApiTokens, Notifiable, TransformableTrait, HasFactory, Auditable;

    public $defaultImage = [
        'base64' => "data:image/png;base64,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",
        'name' => "default_avatar.png",
        'size' => "4 kB",
        'type' => "image/png",
    ];

    protected $basicPermissionGroup = 'Cliente';

    protected $auditHide = [];
    protected $auditTranslate = [];
    protected $auditTranslateValue = [];

    protected $table = 'users';
    protected $primaryKey = 'id';

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
        'avatar' => 'array',
        'email_verified_at' => 'datetime',
    ];

    public function create($data)
    {
        DB::beginTransaction();
        try {
            if (isset($data['avatar'])) {
                $avatar = $data['avatar'];
                unset($data['avatar']);
            } else $avatar =  $this->defaultImage;

            if (!isset($data['password']) || empty($data['password']))
                $data['password'] = bcrypt('123456789');

            if (!isset($data['username']) || empty($data['username']))
                $data['username'] = explode('@', $data['email'])[0] . Crypto::uuid();

            $user = parent::make($data);

            if (!$user->save())
                throw new ValidatorException("Não foi possivel criar o usuario");


            //Creating the user avatar
            $image = Images::make($avatar);
            $image->responsable()->associate($user);

            $errorMessages = $image->validate($avatar);
            if (!is_null($errorMessages))
                throw new ValidatorException("Não foi possivel criar $image->entityName", 400, $errorMessages);

            if (!$image->save())
                throw new ValidatorException("Não foi possivel criar o avatar");

            $user['avatar'] = $this->avatar;


            $group = app(PermissionRepository::class)->where('name', $this->basicPermissionGroup)->first();
            if (is_null($group))
                throw new PermissionGroupNotFound($this->basicPermissionGroup);

            $association = app(PermissionMapService::class)->associate($group, $user);

            $user['permissions'] = $this->permissions;

            DB::commit();
            return $user;
        } catch (\Exception $error) {
            DB::rollback();
            throw new ApiException($error->getMessage());
        }
    }

    public static function edit($data, Model $model)
    {
        DB::beginTransaction();
        try {
            if (isset($data['avatar'])) {
                $avatar = $data['avatar'];
                $avatar['avatar'] = json_encode($avatar['avatar']);

                $model->avatar->update($avatar);
                unset($data['avatar']);
            }

            parent::update($data);
            DB::commit();
            return $model;
        } catch (\Exception $error) {
            DB::rollback();
            throw new ApiException($error->getMessage());
        }
    }

    public static function exclude(Model $model)
    {
        DB::beginTransaction();
        try {
            $model->status = StatusEnum::INACTIVE;
            if (parent::destroy($model->id)) {
                DB::commit();
                return true;
            }
            DB::rollback();
            return 'unable to save';
        } catch (\Exception $error) {
            DB::rollback();
            throw new ApiException($error->getMessage());
        }
    }

    public function avatar()
    {
        return $this->morphOne(Images::class, 'responsable');
    }

    public function getAvatarAttribute()
    {
        $avatar = $this->avatar()->first();
        if (!is_null($avatar))
            $avatar = $avatar->base64;

        return $avatar;
    }

    public function permissions()
    {
        return $this->morphMany(PermissionItem::class, 'responsable');
    }

    public function getPermissionsAttribute()
    {
        $permissions = app(PermissionMapRepository::class);
        $permissions->setThrowable(false);
        $permissions = $permissions->getUserPermissionList($this);

        return $permissions;
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
        return $this->deleted_at != null;
    }

    public function getIsBlockedAttribute()
    {
        return $this->status == StatusEnum::BLOCKED;
    }

    public function getIsInactiveAttribute()
    {
        return $this->status == StatusEnum::INACTIVE;
    }

    protected static function newFactory(): Factory
    {
        return UserFactory::new();
    }
}
