@extends('layouts.master')

@section('title', 'List of Ingredients')

@section('banner_link')
<li><a href="Request::url()">Ingredients</a></li>
@endsection

@section('content')
<div class="album py-5 bg-light">
    <div class="container">
        <a class="btn btn-primary" href="{{ URL::to('ingredients/create') }}" role="button">Add New</a>
        <hr/>
          <div class="row">
            @foreach($ingredients as $ingredient)
                @include ('ingredients.ingredient')
            @endforeach
        </div>
    </div>
</div>

@stop