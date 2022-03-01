<?php

namespace Caiocesar173\Utils\Entities;

use App\Models\User;
use Tymon\JWTAuth\Contracts\JWTSubject;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Caiocesar173\Utils\Abstracts\ModelAbstract;



class UserAuth extends User implements ModelAbstract, Auditable, MustVerifyEmail, JWTSubject
{
}

