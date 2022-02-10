@extends('layouts.app')
@section('title','Cars')
@section('content')
<ul>
            @foreach ($cars as $car)
               <a class="link-secondary" href="/cars/{{$car->id}}"> <li>{{$car->title}}</li></a>
            @endforeach
        </ul>
@endsection 