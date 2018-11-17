<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Model implements Authenticatable
{
    use SoftDeletes;
    use AuthenticableTrait;

    protected $fillable = [
        'email',
        'password',
        'role',
    ];

    protected $date = [
        'deleted_at'
    ];

    
}
