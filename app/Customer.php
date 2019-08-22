<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{

    use Notifiable;

        protected $guard = 'customer';

        protected $fillable = [
            'first_name', 'last_name', 'address', 'phone', 'email', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];

    public $timestamps = false;
}
