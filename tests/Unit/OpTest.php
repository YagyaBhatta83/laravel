<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Customer;
use App\Order;
use Illuminate\Support\Facades\Hash;
use App\Contact;
use App\Company;
use Medicinecategory;

class OpTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testAddCustomer()
    {

        $customer = Customer::create(
            [
                'first_name' => 'yagya',
                'last_name' => 'bhatta',
                'address' => 'gwarkhu',
                'phone' => '32435433232',
                'email' => 'yagya@gmail.com',
                'password' => Hash::make('Password')
            ]
        );

        $customers = Customer::get();
        $this->assertCount(1, $customers);
    }

    public function testUpdateCustomer()
    {

        $customer = Customer::find(2);
        $customer->first_name = 'testname';
        $customer->last_name = 'bhattarai';
        $customer->address = 'koteshwor';
        $customer->phone = '0011225458';
        $customer->email = 'bnmk@gmail.com';
        $customer->password = Hash::make('NewPassword');

        $customer->save();

        $customers = Customer::get();
        $this->assertCount(4, $customers);
    }

    public function test_customer_add()
    {

        $response = $this->post(
            '/customer-register',
            [
                'first_name' => 'thetestname',
                'last_name' => 'bhattarai',
                'address' => 'koteshwor',
                'phone' => '0011225458',
                'email' => 'njhasdk@gmail.com',
                'password' => 'Password',
                'password_confirmation' => 'Password'
            ]
        );

        $customers = Customer::get();
        $this->assertCount(4, $customers);
    }

    public function testAddOrder()
    {

        $order = order::create(
            [
                'location' => 'balkumari',
                'email' => 'yagya@gmail.com',
                'customer_id' => 2,
                'medicine_id' => 3,
                'phone' => '15494616911',
                'quantity' => 59,
                'prescription' => 1
            ]
        );

        $orders = order::get();
        $this->assertCount(1, $orders);
    }

    public function testUpdateOrder()
    {

        $order = Order::find(1);
        $order->location = 'koteshwor';
        $order->email = 'bhattarai@gmail.com';
        $order->customer_id = '1';
        $order->medicine_id = '3';
        $order->phone = '78965412';
        $order->quantity = '50';
        $order->prescription = '1';


        $order->save();

        $orders = Order::get();
        $this->assertCount(1, $orders);
    }

    public function testAddContact()
    {

        $contact = contact::create(
            [
                'first_name' => 'yagya',
                'last_name' => 'bhatta',
                'email' => 'bhatta@gmail.com',
                'subject' => 'onlinepharmacy',
                'message' => 'hello i am yagya bhatta',
            ]
        );

        $contacts = Contact::get();
        $this->assertCount(1, $contacts);
    }

    public function testUpdateContact()
    {

        $contact = Contact::find(1);
        $contact->first_name = 'yagya';
        $contact->last_name = 'bhatt';
        $contact->email = 'bhattarai@gmail.com';
        $contact->subject = 'about onlone pharmacy';
        $contact->message = 'its very nice online pharmacy';


        $contact->save();

        $contacts = Contact::get();
        $this->assertCount(1, $contacts);
    }

    public function testAddCompanies()
    {

        $companies = Company::create(
            [
                'name' => 'Nepal Drug',
            ]
        );

        $companies = Company::get();
        $this->assertCount(1, $companies);
    }

    public function testUpdateCompanies()
    {

        $companies = Company::find(1);
        $companies->name = 'drug nepal';


        $companies->save();

        $companies = Company::get();
        $this->assertCount(1, $companies);
    }

    public function testAddMedicinecategories()
    {

        $medicinecategories = Medicinecategory::create(
            [
                'name' => 'prescription',
            ]
        );

        $medicinecategories = Medicinecategory::get();
        $this->assertCount(1, $medicinecategories);
    }
}
