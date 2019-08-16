@extends('layouts.app')

 @section ('title','Customer list')  


@section('content')

<div class="row">
    <div class="col-12">
    <h1>Add new Customer</h1>
    <p> <a href="customers/create"> Add New Customer </a></p>
    </div>
</div>
@foreach ($customers as $customer)

   <div class="row">
        <div class="col-2">  {{$customer->id}}  </div>
        <div class="col-4"> <a href="/customers/{{$customer->id }}"> {{$customer->name }}</a>  </div>
        <div class="col-2">  {{$customer->date}} </div>
        <div class="col-2">  {{$customer->company->name}} </div>
        <div class="col-2">  {{$customer->active}} </div>
    </div>
      
@endforeach

@endsection