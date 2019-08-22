<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Module;
use Illuminate\Database\Eloquent\Model;
use App\Contact;
use Illuminate\Support\Facades\Redirect;

class ContactusController extends Controller
{
    public function storeCustomerContact(Request $request)
	{

		$request->validate([
            'first_name' => ['required', 'string',],
            'last_name' =>['required', 'string'],
            'email' => ['required', 'email', 'unique:customers'],
            'subject' =>['required', 'string'],
            'message' =>['required', 'string'],
			
		]);

		$contacts = new Contact();
        $contacts->first_name = $request->first_name;
        $contacts->last_name = $request->last_name;
        $contacts->email = $request->email;
        $contacts->subject = $request->subject;
        $contacts->message = $request->message;

        $contacts->save();

		return Redirect::back();

		// dd($request->all());
	}
}
