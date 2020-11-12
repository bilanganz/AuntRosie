@extends('layouts.master')

@section('title', 'Create Medical Condition')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-sm-5">
            <h1>Insert New Medical Condition</h1>
            <hr>
            <form method="POST" action="/medicalConditions" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" @if(!$errors->has('name')) value="{{ old('name') }}" @endif>
                    {!! $errors->first('name', '<p class="alert alert-danger">:message</p>') !!}
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Description" @if(!$errors->has('description')) value="{{ old('description') }}" @endif>
                    {!! $errors->first('description', '<p class="alert alert-danger">:message</p>') !!}
                </div>
            </form>
        </div>
    </div>
</div>
@stop