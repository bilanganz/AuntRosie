@extends('layouts.master')

@section('title')
    {{ $ingredient->name }} Edit
@endsection

@section('banner_link')
<li><a href="/ingredients">Ingredients</a></li>
<li><a href="Request::url()">{{ $ingredient->name }}</a></li>
@endsection

@section('content')
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <form method="post" action="/ingredients/{{$ingredient->id}}" enctype="multipart/form-data">
                    {{ method_field('put') }}
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="name">Ingredient Name:</label>
                        <input type="text" class="form-control" id="name" name="name" @if(isset($ingredient)) value="{{ $ingredient->name }}" @elseif(!$errors->has('name')) value="{{ old('name') }}" @endif>
                        {!! $errors->first('name', '<p class="alert alert-danger">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        <label for="description">description: </label>
                        <textarea id="description" name="description" class="form-control"> @if(isset($ingredient)) {{ $ingredient->description }} @elseif(!$errors->has('description')) {{ old('description') }} @endif</textarea>
                        {!! $errors->first('description', '<p class="alert alert-danger">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        <label for="shelf_life">Shelf Life:</label>
                        <input type="text" class="form-control" id="shelf_life" name="shelf_life" @if(isset($ingredient)) value="{{ $ingredient->shelf_life }}" @elseif(!$errors->has('shelf_life')) value="{{ old('shelf_life') }}" @endif>
                        {!! $errors->first('shelf_life', '<p class="alert alert-danger">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        <label for="medical_condition_id">Medical Condition:</label>
                        <select name="medical_condition_id" id="medical_condition_id">
                            @foreach($medicalConditions as $medicalCondition)
                                <!--  @if(!$errors->has('medical_condition_id')) selected @endif -->
                                <!-- {{$ingredient->medical_condition_id}} -->
                                <option value="{{$medicalCondition->id}}" @if((($ingredient->medical_condition_id)==$medicalCondition->id)) selected @endif>{{$medicalCondition->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="calories">Calories:</label>
                        <input type="text" class="form-control" id="calories" name="calories" @if(isset($nutrition)) value="{{ $nutrition->calories }}" @elseif(!$errors->has('calories')) value="{{ old('calories') }}" @endif>
                        {!! $errors->first('calories', '<p class="alert alert-danger">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        <label for="fat">Fat:</label>
                        <input type="text" class="form-control" id="fat" name="fat" @if(isset($nutrition)) value="{{ $nutrition->fat }}" @elseif(!$errors->has('fat')) value="{{ old('fat') }}" @endif>
                        {!! $errors->first('fat', '<p class="alert alert-danger">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        <label for="saturated_fat">Saturated Fat:</label>
                        <input type="text" class="form-control" id="saturated_fat" name="saturated_fat" @if(isset($nutrition)) value="{{ $nutrition->saturated_fat }}" @elseif(!$errors->has('saturated_fat')) value="{{ old('saturated_fat') }}" @endif>
                        {!! $errors->first('saturated_fat', '<p class="alert alert-danger">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        <label for="trans_fat">Trans Fat:</label>
                        <input type="text" class="form-control" id="trans_fat" name="trans_fat" @if(isset($nutrition)) value="{{ $nutrition->trans_fat }}" @elseif(!$errors->has('trans_fat')) value="{{ old('trans_fat') }}" @endif>
                        {!! $errors->first('trans_fat', '<p class="alert alert-danger">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        <label for="cholestrol">Cholestrol:</label>
                        <input type="text" class="form-control" id="cholestrol" name="cholestrol" @if(isset($nutrition)) value="{{ $nutrition->cholestrol }}" @elseif(!$errors->has('cholestrol')) value="{{ old('cholestrol') }}" @endif>
                        {!! $errors->first('cholestrol', '<p class="alert alert-danger">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        <label for="sodium">Sodium:</label>
                        <input type="text" class="form-control" id="sodium" name="sodium" @if(isset($nutrition)) value="{{ $nutrition->sodium }}" @elseif(!$errors->has('sodium')) value="{{ old('sodium') }}" @endif>
                        {!! $errors->first('sodium', '<p class="alert alert-danger">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        <label for="carbohydrate">Carbohydrate:</label>
                        <input type="text" class="form-control" id="carbohydrate" name="carbohydrate" @if(isset($nutrition)) value="{{ $nutrition->carbohydrate }}" @elseif(!$errors->has('carbohydrate')) value="{{ old('carbohydrate') }}" @endif>
                        {!! $errors->first('carbohydrate', '<p class="alert alert-danger">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        <label for="dietary_fiber">Dietary Fiber:</label>
                        <input type="text" class="form-control" id="dietary_fiber" name="dietary_fiber" @if(isset($nutrition)) value="{{ $nutrition->dietary_fiber }}" @elseif(!$errors->has('dietary_fiber')) value="{{ old('dietary_fiber') }}" @endif>
                        {!! $errors->first('dietary_fiber', '<p class="alert alert-danger">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        <label for="sugar">Sugar:</label>
                        <input type="text" class="form-control" id="sugar" name="sugar" @if(isset($nutrition)) value="{{ $nutrition->sugar }}" @elseif(!$errors->has('sugar')) value="{{ old('sugar') }}" @endif>
                        {!! $errors->first('sugar', '<p class="alert alert-danger">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        <label for="protein">Protein:</label>
                        <input type="text" class="form-control" id="protein" name="protein" @if(isset($nutrition)) value="{{ $nutrition->protein }}" @elseif(!$errors->has('protein')) value="{{ old('protein') }}" @endif>
                        {!! $errors->first('protein', '<p class="alert alert-danger">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        <label for="vitamin_d">Vitamin D:</label>
                        <input type="text" class="form-control" id="vitamin_d" name="vitamin_d" @if(isset($nutrition)) value="{{ $nutrition->vitamin_d }}" @elseif(!$errors->has('vitamin_d')) value="{{ old('vitamin_d') }}" @endif>
                        {!! $errors->first('vitamin_d', '<p class="alert alert-danger">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        <label for="calcium">Calcium:</label>
                        <input type="text" class="form-control" id="calcium" name="calcium" @if(isset($nutrition)) value="{{ $nutrition->calcium }}" @elseif(!$errors->has('calcium')) value="{{ old('calcium') }}" @endif>
                        {!! $errors->first('calcium', '<p class="alert alert-danger">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        <label for="iron">Iron:</label>
                        <input type="text" class="form-control" id="iron" name="iron" @if(isset($nutrition)) value="{{ $nutrition->iron }}" @elseif(!$errors->has('iron')) value="{{ old('iron') }}" @endif>
                        {!! $errors->first('iron', '<p class="alert alert-danger">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        <label for="potassium">Potassium:</label>
                        <input type="text" class="form-control" id="potassium" name="potassium" @if(isset($nutrition)) value="{{ $nutrition->potassium }}" @elseif(!$errors->has('potassium')) value="{{ old('potassium') }}" @endif>
                        {!! $errors->first('potassium', '<p class="alert alert-danger">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        <input type="file" name="photo">
                        {!! $errors->first('photo', '<p class="alert alert-danger">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop