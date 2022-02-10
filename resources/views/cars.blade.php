@extends('layouts.app')
@section('title','Cars')
@section('content')
<ul>
            @foreach ($cars as $car)
               <a style="color:black;" href="/cars/{{$car->id}}"> <li>{{$car->title}}</li></a>
            @endforeach
        </ul>
@endsection 