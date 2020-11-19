@extends('layouts.master')

@section('title', 'List of Recipes')

@section('content')

<div class="album py-5 bg-light">
    <div class="container">
    <button type="button" class="btn btn-primary">Add</button>
    <hr/>
          <div class="row">
            @foreach($recipes as $recipe)
                @include ('recipes.recipe')
            @endforeach
        </div>
    </div>
</div>

@stop