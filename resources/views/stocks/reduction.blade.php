@extends('layouts.master')

@section('title', 'Remove Stock')

@section('banner_link')
<li><a href="/stocks">Stocks</a></li>
<li><a href="Request::url()">Remove Stock</a></li>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-sm-5">
            <hr>
            <form method="POST" action="/stocks/reduction" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="ingredients_id">Ingredient:</label>
                    <select name="ingredients_id" id="ingredients_id">
                        @foreach($ingredients as $ingredient)
                            <!--  @if(!$errors->has('medical_condition_id')) selected @endif -->
                            <option value="{{$ingredient->id}}">{{$ingredient->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <input type="text" class="form-control" id="quantity" name="quantity" placeholder="quantity" @if(!$errors->has('quantity')) value="{{ old('quantity') }}" @endif>
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