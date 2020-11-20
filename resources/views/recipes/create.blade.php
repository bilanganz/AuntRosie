@extends('layouts.master')

@section('title', 'Create Ingredient')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-sm-5">
            <h1>Insert New Ingredient</h1>
            <hr>
            <form method="POST" action="/ingredients" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Ingredient Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" @if(!$errors->has('name')) value="{{ old('name') }}" @endif>
                    {!! $errors->first('name', '<p class="alert alert-danger">:message</p>') !!}
                </div>
            </form>
        </div>
    </div>
</div>
@stop