@extends('layouts.master')

@section('title', 'Create Ingredient')

@section('content')
<div class="col-sm-8">
        <h1>Publish a Post</h1>
        <hr>
        <form method="POST" action="/posts">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Ingredient Name:</label>
                <input type="text" class="form-control" id="name" name="name">
                <!--<input type="text" class="form-control" id="title" name="title" required>-->
            </div>
            <div class="form-group">
                <label for="description">description:</label>
                <textarea id="description" name="description" class="form-control"></textarea>
                <!--<textarea id="body" name="body" class="form-control" required></textarea>-->
            </div>
            <div class="form-group">
                <label for="shelf_life">Shelf Life:</label>
                <input type="text" class="form-control" id="shelf_life" name="shelf_life">
                <!--<textarea id="body" name="body" class="form-control" required></textarea>-->
            </div>
            <div class="form-group">
                @foreach($medicalConditions as $medicalCondition)
                    <input type="checkbox" id="{{$medicalCondition->name}}" name="{{$medicalCondition->name}}" value="{{$medicalCondition->name}}">
                    <label for="{{$medicalCondition->name}}"> {{$medicalCondition->name}}</label><br>
                @endforeach
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>
            
            @include ('layouts.errors')
        </form>
    </div>
@stop