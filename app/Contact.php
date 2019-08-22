<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Contact extends Model
{
    use Notifiable;

    protected $fillable = [
        'first_name', 'last_name', 'email', 'subject', 'message',
    ];
    public $timestamps = false;
}
