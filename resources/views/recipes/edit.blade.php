@extends('layouts.master')

@section('title')
    {{ $recipe->name }} Edit
@endsection

@section('content')
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">

                <h1>Edit {{ $recipe->name }} Information</h1>

                <form method="post" action="/recipe/{{$recipe->id}}" enctype="multipart/form-data">
                    {{ method_field('put') }}
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="name">Ingredient Name:</label>
                        <input type="text" class="form-control" id="name" name="name" @if(isset($ingredient)) value="{{ $ingredient->name }}" @elseif(!$errors->has('name')) value="{{ old('name') }}" @endif>
                        {!! $errors->first('name', '<p class="alert alert-danger">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        <label for="description">description: </label>
                        <textarea id="description" name="description" class="form-control"> @if(isset($ingredient)) {{ $ingredient->description }} @elseif(!$errors->has('description')) {{ old('description') }} @endif</textarea>
                        {!! $errors->first('description', '<p class="alert alert-danger">:message</p>') !!}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop