@extends('layouts.master')

@section('title', 'Create Customer')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-sm-5">
            <h1>Insert New Customer</h1>
            <hr>
            <form method="POST" action="/customers" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="firstName">First Name:</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" @if(!$errors->has('firstName')) value="{{ old('firstName') }}" @endif>
                    {!! $errors->first('firstName', '<p class="alert alert-danger">:message</p>') !!}
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name:</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" @if(!$errors->has('lastName')) value="{{ old('lastName') }}" @endif>
                    {!! $errors->first('lastName', '<p class="alert alert-danger">:message</p>') !!}
                </div>
                <div class="form-group">
                    <label for="DOB">Date of Birth:</label>
                    <input type="date" class="form-control" id="DOB" name="DOB" @if(!$errors->has('DOB')) value="{{ old('DOB') }}" @endif>
                    {!! $errors->first('DOB', '<p class="alert alert-danger">:message</p>') !!}
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" @if(!$errors->has('email')) value="{{ old('email') }}" @endif>
                    {!! $errors->first('email', '<p class="alert alert-danger">:message</p>') !!}
                </div>
                <div class="form-group">
                    <label for="phoneNumber">Phone Number:</label>
                    <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" @if(!$errors->has('phoneNumber')) value="{{ old('phoneNumber') }}" @endif>
                    {!! $errors->first('phoneNumber', '<p class="alert alert-danger">:message</p>') !!}
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Publish</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop