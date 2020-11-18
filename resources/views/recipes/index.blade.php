@extends('layouts.master')

@section('title', 'List of Recipes')

@section('content')

<div class="album py-5 bg-light">
    <div class="container">
          <div class="row">
            @foreach($recipes as $recipe)
                @include ('recipes.recipe')
            @endforeach
        </div>
    </div>
</div>

@stop