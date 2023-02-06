<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

 class Admin extends Model implements Authenticatable
{
    protected $guard = "admin";
    use HasFactory;
    protected $table = 'admins';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

     public function getAuthIdentifierName()
     {
         // TODO: Implement getAuthIdentifierName() method.
     }

     public function getAuthIdentifier()
     {
         // TODO: Implement getAuthIdentifier() method.
     }

     public function getAuthPassword()
     {
         // TODO: Implement getAuthPassword() method.
     }

     public function getRememberToken()
     {
         // TODO: Implement getRememberToken() method.
     }

     public function setRememberToken($value)
     {
         // TODO: Implement setRememberToken() method.
     }

     public function getRememberTokenName()
     {
         // TODO: Implement getRememberTokenName() method.
     }
 }
