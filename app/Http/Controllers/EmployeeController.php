<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function employee()
    {
        $employees = Employee::all();
        view()->share('employees', $employees);
        return view('employees');
    }

    public function create()
    {
        return view('add-employee');
    }

    public function store(Request $request)
    {

        $data = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'occupation' =>$request->get('occupation'),


        ];
        //Create an object of the model
        $employees = new Employee($data);
        //save object to database table
        $employees->save();
        //Redirect the user to userlist
        return redirect('/employees');
    }

    public function edit($id)
    {
        //Selecting the record
        $employees = Employee::find($id); //used when selecting a record using primary key
        //Share the values with view
        view()->share('employees', $employees);
        return view('edit-employee');
    }

    public function update($id, Request $request)
    {
        //Select the record that needs to be updated
        $employees = Employee::find($id);
        //Updating data for the selected record
        $employees->name = $request->get('name');
        $employees->email = $request->get('email');
        $employees->occupation = $request->get('occupation');

        $employees->save();
        //redirect user to user list
        return redirect('/employees');
    }

    public function delete($id)
    {
        $employees = Employee::find($id);
        $employees->delete();
        return redirect('/employees');
    }
}
