@extends('layouts.master')

@section('title', 'Add inventory')

@section('banner_link')
<li><a href="/inventories">inventories</a></li>
<li><a href="Request::url()">Add inventory</a></li>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-sm-5">
            <hr>
            <form method="POST" action="/inventories" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="recipes_id">Recipe:</label>
                    <select name="recipes_id" id="recipes_id">
                        @foreach($recipes as $recipe)
                            <!--  @if(!$errors->has('medical_condition_id')) selected @endif -->
                            <option value="{{$recipe->id}}">{{$recipe->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Price:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" @if(!$errors->has('name')) value="{{ old('name') }}" @endif>
                    {!! $errors->first('name', '<p class="alert alert-danger">:message</p>') !!}
                </div>
                <div class="form-group">
                    <label for="description">Date:</label>
                    <textarea id="description" name="description" class="form-control" placeholder="Description">@if(!$errors->has('description')) {{ old('description') }} @endif</textarea>
                    {!! $errors->first('description', '<p class="alert alert-danger">:message</p>') !!}
                </div>
                <div class="form-group">
                    <label for="description">Quantity:</label>
                    <textarea id="description" name="description" class="form-control" placeholder="Description">@if(!$errors->has('description')) {{ old('description') }} @endif</textarea>
                    {!! $errors->first('description', '<p class="alert alert-danger">:message</p>') !!}
                </div>
            </form>
        </div>
    </div>
</div>
@stop