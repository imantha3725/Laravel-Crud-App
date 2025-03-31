<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        $products = Product::all();
        view()->share('products', $products);
        return view('products');
    }

    public function create()
    {
        return view('add-product');
    }

    public function store(Request $request)
    {

        $data = [
            'name' => $request->get('name'),
            'amount' => $request->get('amount'),


        ];
        //Create an object of the model
        $products = new Product($data);
        //save object to database table
        $products->save();
        //Redirect the user to userlist
        return redirect('/products');
    }

    public function edit($id)
    {
        //Selecting the record
        $products = Product::find($id); //used when selecting a record using primary key
        //Share the values with view
        view()->share('products', $products);
        return view('edit-product');
    }

    public function update($id, Request $request)
    {
        //Select the record that needs to be updated
        $products = Product::find($id);
        //Updating data for the selected record
        $products->name = $request->get('name');
        $products->amount = $request->get('amount');

        $products->save();
        //redirect user to user list
        return redirect('/products');
    }

    public function delete($id)
    {
        $products = Product::find($id);
        $products->delete();
        return redirect('/products');
    }
}
