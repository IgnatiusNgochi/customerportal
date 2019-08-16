@extends('layouts.app')

 @section ('title','Details for ' .$customer->name)  


@section('content')

<div class="row">
    <div class="col-12">
    <h3>Details for {{$customer->name}} </h3>
    <p><a href="/customers/{{$customer->id}}/edit"> Edit </a></p>
 
     <form action="/customers/{{ $customer->id }}" method="POST">
        @method('DELETE')
        @csrf
        <button class="btn btn-danger" type="submit"> Delete </button>
    </form>

    </div>
</div>

<div class="row">
    <div class="col-12">
    <p> <strong> Name </strong> {{$customer->name}}  </p>
    <p> <strong> Email </strong> {{$customer->email}}  </p>
    <p> <strong> Date Of birth  </strong> {{$customer->date}}  </p>
    <p> <strong> Company  </strong> {{$customer->Company->name}}  </p>

</div>
</div>

@endsection