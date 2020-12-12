@extends('layouts.master')

@section('title')
    {{ $medicalCondition->name }} Edit
@endsection

@section('banner_link')
<li><a href="/medicalConditions">Medical Conditions</a></li>
<li><a href="Request::url()">{{$medicalCondition->name}}</a></li>
@endsection

@section('content')
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <form method="post" action="/medicalConditions/{{$medicalCondition->id}}" enctype="multipart/form-data">
                    {{ method_field('put') }}
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" @if(isset($medicalCondition)) value="{{ $medicalCondition->name }}" @elseif(!$errors->has('name')) value="{{ old('name') }}" @endif>
                        {!! $errors->first('name', '<p class="alert alert-danger">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <input type="text" class="form-control" id="description" name="description" @if(isset($medicalCondition)) value="{{ $medicalCondition->description }}" @elseif(!$errors->has('description')) value="{{ old('description') }}" @endif>
                        {!! $errors->first('description', '<p class="alert alert-danger">:message</p>') !!}
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