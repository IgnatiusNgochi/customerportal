<?php

namespace App\Http\Controllers;


Use App\Customer;
Use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
 use App\Events\NewCustomerHasRegisteredEvent;
 use App\Mail\WelcomeNewUserEmail;

class CustomersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); 
    }

    public function index()
    {
        
       $customers = Customer::all();
      
      return view('customers.index', compact('customers')); 
      
    }

    public function create()
        {
            $companies= Company::all();
            $customer = new customer;
            return view('customers.create', compact('companies','customer'));
          
        }

     
    public function store() 
   {
      
     $customer=Customer::create($this->validateRequest());
   
     event(new NewCustomerHasRegisteredEvent($customer));

   
        return redirect('customers'); 
    }

    public function show(Customer $customer) {
       
    
       return view ('customers.show',compact('customer'));
     
    }
    public function edit (Customer $customer)
    {
        $companies= Company::all();
        return view ('customers.edit',compact('customer','companies'));

    }

    public function update(Customer $customer)
    {
        
        $customer->update($this->validateRequest());
    
    return redirect('customers/'. $customer->id); 
}
    

public function destroy(Customer $customer)
        {
            $customer->delete($customer->id);
            return redirect('customers'); 
        }


private function validateRequest(){
   return request()-> validate([
        'name'=>'required|min:3',
         'email'=>'required|email',
         'date'=>'required|before:2019-01-01',
         'active'=>'required',
         'company_id'=>'required',
             ]);


}


}