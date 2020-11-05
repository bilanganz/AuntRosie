@extends('layouts.master')

@section('title', 'Create Ingredient')

@section('content')
<div class="col-sm-8">
        <h1>Publish a Post</h1>
        <hr>
        <form method="POST" action="/ingredients">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Ingredient Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="description">description:</label>
                <textarea id="description" name="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="shelf_life">Shelf Life:</label>
                <input type="text" class="form-control" id="shelf_life" name="shelf_life">
            </div>
            <div class="form-group">
                <label for="medical_condition">Medical Condition:</label>
                <select name="medical_condition" id="medical_condition">
                    @foreach($medicalConditions as $medicalCondition)
                        <option value="{{$medicalCondition->id}}">{{$medicalCondition->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="calories">Calories:</label>
                <input type="text" class="form-control" id="calories" name="calories">
            </div>
            <div class="form-group">
                <label for="fat">Fat:</label>
                <input type="text" class="form-control" id="fat" name="fat">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>
            
            @include ('layouts.errors')
        </form>
    </div>
@stop