<?php

namespace App\Http\Controllers;
Use App\Supplier;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    public function list()
    {
        $suppliers = Supplier::all();
         
             
            return view('suppliers.suppliers', [
        'suppliers'=> $suppliers,
        ]);
    }


    Public function store()
    {
  $data = request () -> validate([
    'name'=> 'required',
    'email'=> 'required',
    'number'=> 'required',
  ]);
        $supplier = new Supplier ();
        $supplier->name= request('name');
        $supplier->email= request('email');
        $supplier-> number=  request('number');

        $supplier-> save();
     return back();

 
    }
}
