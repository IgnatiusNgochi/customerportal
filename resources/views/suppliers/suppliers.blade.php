@extends('layouts.app');

@section ('title','Suppliers') 

@section('content')

<h1>Suppliers Page  </h1>

<p><strong> List of Suppliers </strong> </p>
 <nav> 

<ol>
   
    @foreach ($suppliers as $supplier)
        <li>{{$supplier->name}}</li>
    @endforeach
       
</ol>
</nav>


<p><strong> Please supply Info  </strong> </p>
<div class="container">
<div class= "row">
<div class="col-md-12">

<form action="suppliers" method="post">
<div class="form-group">
<label for="name">Name</label>
<input type="text" name="name" placeholder="Input name" value="" class="form-control"> 
<div> {{$errors->first('name')}} </div>
</div>
<div class="form-group">
    <label for="email">Email</label>
<input type="text" name="email" placeholder="Input email" value="" class="form-control"> 
<div> {{$errors->first('email')}} </div>
</div>
<div class="form-group"> 
<div class="form-group">
    <label for="email">Phone number</label>
<input type="text" name="number" placeholder="Input Phone number" value="" class="form-control"> 
<div> {{$errors->first('number')}} </div>
</div>

<button type="submit" class="btn btn-primary">Save Supplier </button>
@csrf
</form>
</div>
</div>
</div>
</div>
@endsection