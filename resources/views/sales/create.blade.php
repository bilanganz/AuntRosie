@extends('layouts.master')

@section('title', 'Create New Sale')

@section('banner_link')
<li><a href="/sales">Sales</a></li>
<li><a href="Request::url()">New Sales</a></li>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-sm-5">
            <hr>
            <form method="POST" action="/medicalConditions" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="customers_id">Customer:</label>
                    <select name="customers_id" id="customers_id">
                        @foreach($customers as $customer)
                            <option value="{{$customer->id}}">{{$customer->first_name . " " . $customer->last_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Description" @if(!$errors->has('description')) value="{{ old('description') }}" @endif>
                    {!! $errors->first('description', '<p class="alert alert-danger">:message</p>') !!}
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Publish</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop