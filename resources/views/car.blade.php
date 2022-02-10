@extends('layouts.app')
@section('title',$car->title)

@section('content')
<h1>{{$car->title}}</h1>
        <p>Produced by {{$car->producer}}
        </p>
        <p>Door number is {{$car->number_of_doors}}</p>
@endsection
