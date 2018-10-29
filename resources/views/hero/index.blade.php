@extends('layouts/app')

@section('content')

<h1>The hero roster</h1>

@foreach ($heroes as $hero)

{{ $hero->name }} <br>

@endforeach

@endsection