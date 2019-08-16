<?php

namespace App\Http\Controllers;
use App\Customer;

use Illuminate\Http\Request;

class TestingVueController extends Controller
{
public function index()
{
     $customers = Customer::all();
    return [
    'name' => 'John Doe', 
    // dump($customers)
      ];

    }

}
