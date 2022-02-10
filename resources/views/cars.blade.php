@extends('layouts.app')
@section('title', 'Cars')
@section('content')
    <ul class="list-group list-group-flush">
        @foreach ($cars as $car)
            <li class="list-group-item">
                <a class="text-decoration-none" href="/cars/{{ $car->id }}"> {{ $car->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection
