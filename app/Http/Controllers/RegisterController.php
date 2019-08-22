<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request){
            //    dd($request->all());
        
                $request->validate([
                    'first_name' => ['required', 'string'],
                    'last_name' => ['required', 'string'],
                    'address' => ['required', 'string',],
                    'email' => ['required', 'email', 'unique:customers'],
                    'password' => ['required', 'min:6', 'confirmed'],
                    'phone' => ['required'],
                ]);
        
        
            //    dd('validated');
                $customer = new Customer();
                $customer->first_name = $request->first_name;
                $customer->last_name = $request->last_name;
                $customer->email = $request->email;
                $customer->address = $request->address;
                $customer->phone = $request->phone;
                $customer->password = Hash::make($request->password);
        
                $customer->save();
        
                return redirect()->route('customerlogin');
        
        
            }
}
