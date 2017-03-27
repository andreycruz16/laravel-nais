@extends('layout')

@section('title')
    <title>Home</title>
@stop

@section('content')
    <h1>This is the homepage</h1>
    @foreach ($names as $name)
        <ul>
            <li>{{ $name }}</li>
        </ul>
    @endforeach
@stop
