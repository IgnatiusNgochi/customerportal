@extends('layouts.app')


@section ('title','Contact Us') 

@section('content')
<h3> Contact Us </h3>

 @if(!session()->has('message'))
<form action="{{route('contact.store')}}" method="POST">
<div class="form-group">
<label for="name">Name</label>
<input type="text" name="name" placeholder="Input name" value="{{old('name')}}" class="form-control"> 
<div> {{$errors->first('name')}} </div>
</div>
<div class="form-group">
    <label for="email">Email</label>
<input type="text" name="email" placeholder="Input email" value="{{old('email')}}" class="form-control"> 
<div> {{$errors->first('email')}} </div>
</div>

<div class="form-group">
    <label for="message">Message</label>
<textarea name="message" id="" cols="30" rows="10" class="form-control"  > {{old('message')}} </textarea>
<div> {{$errors->first('message')}} </div>
</div>
 <button type="submit" class="btn btn-alert">Submit Message </button>
 @csrf
</form>
@endif
@if(session()->has('message')) 
  
  <div class="alert alert-success" role="alert">
 <strong>Success </strong> {{session()->get('message')}}
 </div> 
 @endif
 
@endsection