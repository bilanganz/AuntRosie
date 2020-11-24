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
                    <label for="price">Price:</label>
                    <input type="number" min="1" class="form-control" id="price" name="price" placeholder="Price" @if(!$errors->has('price')) value="{{ old('price') }}" @endif>
                    {!! $errors->first('price', '<p class="alert alert-danger">:message</p>') !!}
                </div>
                <div class="form-group">
                    <label for="production_date">Production Date:</label>
                    <input type="date" id="production_date" name="production_date" class="form-control" placeholder="Production Date">@if(!$errors->has('production_date')) {{ old('production_date') }} @endif</textarea>
                    {!! $errors->first('production_date', '<p class="alert alert-danger">:message</p>') !!}
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <input type="number" min="1" id="quantity" name="quantity" class="form-control" placeholder="Quantity">@if(!$errors->has('quantity')) {{ old('quantity') }} @endif</textarea>
                    {!! $errors->first('quantity', '<p class="alert alert-danger">:message</p>') !!}
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Publish</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop