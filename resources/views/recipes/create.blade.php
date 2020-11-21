@extends('layouts.master')

@section('title', 'Create Recipe')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-sm-5">
            <h1>Insert New Recipe</h1>
            <hr>
            <form method="POST" action="/recipes" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Recipe Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" @if(!$errors->has('name')) value="{{ old('name') }}" @endif>
                    {!! $errors->first('name', '<p class="alert alert-danger">:message</p>') !!}
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Description" @if(!$errors->has('description')) value="{{ old('description') }}" @endif>
                    {!! $errors->first('description', '<p class="alert alert-danger">:message</p>') !!}
                </div>
                <div class="form-group">
                    <table class="table table-responsive-sm">
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Amount</th>
                        </tr>
                    @foreach($ingredients as $ingredient)
                        <tr>
                            <td><input type="checkbox" id="ingredient_{{$ingredient->id}}" name="ingredients[]" value="{{$ingredient->name}}"></td>
                            <td><label for="ingredient_{{$ingredient->id}}">{{$ingredient->name}}</label></td>
                            <td><input type="text" class="form-control" id="ingredient_{{$ingredient->id}}" name="amount[]" placeholder="0" size="5"></td>
                        </tr>
                    @endforeach
                    </table>
                    {!! $errors->first('ingredients', '<p class="alert alert-danger">:message</p>') !!}
                    {!! $errors->first('amount', '<p class="alert alert-danger">:message</p>') !!}
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Publish</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop