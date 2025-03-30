<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customer()
    {
        $customer = Customer::all();
        view()->share('customer', $customer);
        return view('customer');
    }

    public function create()
    {
        return view('add-customer');
    }

    public function store(Request $request)
    {

        $data = [
            'name' => $request->get('name'),
            'company' => $request->get('company'),
            'phone_number' => $request->get('phone_number'),
            'email' => $request->get('email'),

        ];
        //Create an object of the model
        $customer = new Customer($data);
        //save object to database table
        $customer->save();
        //Redirect the user to userlist
        return redirect('/customers');
    }
}
