<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Medicinecategory extends Model
{
    use Notifiable;

    protected $fillable = [
        'name',
    ];
    public $timestamps = false;
}
