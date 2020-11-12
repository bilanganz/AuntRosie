@extends('layouts.master')

@section('title', 'List of Ingredients')

@section('content')

<div class="album py-5 bg-light">
    <div class="container">
          <div class="row">
            @foreach($ingredients as $ingredient)
                @include ('ingredients.ingredient')
            @endforeach
        </div>
    </div>
</div>

@stop