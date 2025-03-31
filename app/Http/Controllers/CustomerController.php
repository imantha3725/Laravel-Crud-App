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

    public function edit($id)
    {
        //Selecting the record
        $customer = Customer::find($id); //used when selecting a record using primary key
        //Share the values with view
        view()->share('customer', $customer);
        return view('edit-customer');
    }

    public function update($id, Request $request)
    {
        //Select the record that needs to be updated
        $customer = Customer::find($id);
        //Updating data for the selected record
        $customer->name = $request->get('name');
        $customer->company = $request->get('company');
        $customer->phone_number = $request->get('phone_number');
        $customer->email = $request->get('email');
        $customer->save();
        //redirect user to user list
        return redirect('/customers');
    }

    public function delete($id){
        $customer=Customer::find($id);
        $customer->delete();
        return redirect('/customers');
    }
}
