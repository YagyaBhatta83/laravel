<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
	protected $table = "orders";
	protected $fillable = ['email','location','phone','medicine_id','quantity','customer_id','prescription'];
}
