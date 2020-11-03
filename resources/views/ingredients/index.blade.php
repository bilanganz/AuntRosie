@extends('layouts.master')

@section('title', 'List of Ingredients')

@section('content')

@foreach($ingredients as $ingredient)
    @include ('ingredients.ingredient')
@endforeach

@stop