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
}
