@extends('layouts.master')

@section('title', 'Create Ingredient')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
    <div class="col-sm-5">
        <h1>Insert New Ingredient</h1>
        <hr>
        <form method="POST" action="/ingredients">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Ingredient Name:</label>
                <input type="text" class="form-control" id="name" name="name">
                {!! $errors->first('name', '<p class="alert alert-danger">:message</p>') !!}
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
                <label for="saturatedFat">Saturated Fat:</label>
                <input type="text" class="form-control" id="saturatedFat" name="saturatedFat">
            </div>
            <div class="form-group">
                <label for="transFat">Trans Fat:</label>
                <input type="text" class="form-control" id="transFat" name="transFat">
            </div>
            <div class="form-group">
                <label for="cholestrol">Cholestrol:</label>
                <input type="text" class="form-control" id="cholestrol" name="cholestrol">
            </div>
            <div class="form-group">
                <label for="sodium">Sodium:</label>
                <input type="text" class="form-control" id="sodium" name="sodium">
            </div>
            <div class="form-group">
                <label for="carbohydrate">Carbohydrate:</label>
                <input type="text" class="form-control" id="carbohydrate" name="carbohydrate">
            </div>
            <div class="form-group">
                <label for="dietaryFiber">Dietary Fiber:</label>
                <input type="text" class="form-control" id="dietaryFiber" name="dietaryFiber">
            </div>
            <div class="form-group">
                <label for="sugar">Sugar:</label>
                <input type="text" class="form-control" id="sugar" name="sugar">
            </div>
            <div class="form-group">
                <label for="protein">Protein:</label>
                <input type="text" class="form-control" id="protein" name="protein">
            </div>
            <div class="form-group">
                <label for="vitaminD">Vitamin D:</label>
                <input type="text" class="form-control" id="vitaminD" name="vitaminD">
            </div>
            <div class="form-group">
                <label for="calcium">Calcium:</label>
                <input type="text" class="form-control" id="calcium" name="calcium">
            </div>
            <div class="form-group">
                <label for="iron">Iron:</label>
                <input type="text" class="form-control" id="iron" name="iron">
            </div>
            <div class="form-group">
                <label for="potassium">Potassium:</label>
                <input type="text" class="form-control" id="potassium" name="potassium">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>
            
            @include ('layouts.errors')
        </form>
    </div>
    </div>
</div>
@stop