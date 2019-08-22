<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Module;
use Illuminate\Database\Eloquent\Model;
use App\Order;
use App\Medicine;
use Illuminate\Support\Facades\Redirect;

class CheckOutController extends Controller
{

	public function getCheckoutForm($product_id, $quantity){
		// $data['product_id'] = $product_id;
		$product = Medicine::find($product_id);
		// dd($data);
		// dd($data);
		return view('checkout', compact('product','quantity'));
	}
	public function storeCustomerOrder(Request $request)
	{
// dd($request->all());
		$request->validate([
			'location' => ['required', 'string',],
			'email' => ['required', 'email', 'unique:customers'],
			'phone' => ['required'],
			'quantity' => 'required'
		]);

		$orders = new Order();
        $orders->email = $request->email;
        $orders->location = $request->location;
        $orders->phone = $request->phone;
        $orders->quantity = $request->quantity;
		$orders->medicine_id = $request->medicine_id;
		$orders->customer_id = $request->customer_id;

		if(($request->prescription != null)){
		$orders->prescription = $request->file('prescription')->store('orders','public');
		}
        $orders->save();

		return Redirect::back();
	}
}
