@extends('layouts.app')
@section('title','Cars')
@section('content')
<ul class="list-group list-group-flush">
            @foreach ($cars as $car)
               <a class="text-decoration-none" href="/cars/{{$car->id}}"> <li class="list-group-item" >{{$car->title}}</li></a>
            @endforeach
        </ul>
@endsection 