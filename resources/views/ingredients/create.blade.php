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
                <input type="text" class="form-control" id="name" name="name" @if(!$errors->has('name')) value="{{ old('name') }}" @endif>
                {!! $errors->first('name', '<p class="alert alert-danger">:message</p>') !!}
            </div>
            <div class="form-group">
                <label for="description">description:</label>
                <textarea id="description" name="description" class="form-control" @if(!$errors->has('description')) value="{{ old('description') }}" @endif></textarea>
                {!! $errors->first('description', '<p class="alert alert-danger">:message</p>') !!}
            </div>
            <div class="form-group">
                <label for="shelfLife">Shelf Life:</label>
                <input type="text" class="form-control" id="shelfLife" name="shelfLife" @if(!$errors->has('shelfLife')) value="{{ old('shelfLife') }}" @endif>
                {!! $errors->first('shelfLife', '<p class="alert alert-danger">:message</p>') !!}
            </div>
            <div class="form-group">
                <label for="medical_condition_id">Medical Condition:</label>
                <select name="medical_condition_id" id="medical_condition_id">
                    @foreach($medicalConditions as $medicalCondition)
                        <option value="{{$medicalCondition->id}}" @if(!$errors->has('medical_condition_id')) selected @endif>{{$medicalCondition->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="calories">Calories:</label>
                <input type="text" class="form-control" id="calories" name="calories">
                {!! $errors->first('calories', '<p class="alert alert-danger">:message</p>') !!}
            </div>
            <div class="form-group">
                <label for="fat">Fat:</label>
                <input type="text" class="form-control" id="fat" name="fat">
                {!! $errors->first('fat', '<p class="alert alert-danger">:message</p>') !!}
            </div>
            <div class="form-group">
                <label for="saturatedFat">Saturated Fat:</label>
                <input type="text" class="form-control" id="saturatedFat" name="saturatedFat">
                {!! $errors->first('saturatedFat', '<p class="alert alert-danger">:message</p>') !!}
            </div>
            <div class="form-group">
                <label for="transFat">Trans Fat:</label>
                <input type="text" class="form-control" id="transFat" name="transFat">
                {!! $errors->first('transFat', '<p class="alert alert-danger">:message</p>') !!}
            </div>
            <div class="form-group">
                <label for="cholestrol">Cholestrol:</label>
                <input type="text" class="form-control" id="cholestrol" name="cholestrol">
                {!! $errors->first('cholestrol', '<p class="alert alert-danger">:message</p>') !!}
            </div>
            <div class="form-group">
                <label for="sodium">Sodium:</label>
                <input type="text" class="form-control" id="sodium" name="sodium">
                {!! $errors->first('sodium', '<p class="alert alert-danger">:message</p>') !!}
            </div>
            <div class="form-group">
                <label for="carbohydrate">Carbohydrate:</label>
                <input type="text" class="form-control" id="carbohydrate" name="carbohydrate">
                {!! $errors->first('carbohydrate', '<p class="alert alert-danger">:message</p>') !!}
            </div>
            <div class="form-group">
                <label for="dietaryFiber">Dietary Fiber:</label>
                <input type="text" class="form-control" id="dietaryFiber" name="dietaryFiber">
                {!! $errors->first('dietaryFiber', '<p class="alert alert-danger">:message</p>') !!}
            </div>
            <div class="form-group">
                <label for="sugar">Sugar:</label>
                <input type="text" class="form-control" id="sugar" name="sugar">
                {!! $errors->first('sugar', '<p class="alert alert-danger">:message</p>') !!}
            </div>
            <div class="form-group">
                <label for="protein">Protein:</label>
                <input type="text" class="form-control" id="protein" name="protein">
                {!! $errors->first('protein', '<p class="alert alert-danger">:message</p>') !!}
            </div>
            <div class="form-group">
                <label for="vitaminD">Vitamin D:</label>
                <input type="text" class="form-control" id="vitaminD" name="vitaminD">
                {!! $errors->first('vitaminD', '<p class="alert alert-danger">:message</p>') !!}
            </div>
            <div class="form-group">
                <label for="calcium">Calcium:</label>
                <input type="text" class="form-control" id="calcium" name="calcium">
                {!! $errors->first('calcium', '<p class="alert alert-danger">:message</p>') !!}
            </div>
            <div class="form-group">
                <label for="iron">Iron:</label>
                <input type="text" class="form-control" id="iron" name="iron">
                {!! $errors->first('iron', '<p class="alert alert-danger">:message</p>') !!}
            </div>
            <div class="form-group">
                <label for="potassium">Potassium:</label>
                <input type="text" class="form-control" id="potassium" name="potassium">
                {!! $errors->first('potassium', '<p class="alert alert-danger">:message</p>') !!}
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>
            <!-- @include ('layouts.errors') -->
        </form>
    </div>
    </div>
</div>
@stop