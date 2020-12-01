@extends('layouts.master')

@section('title')
    {{ $customer->first_name . ' ' . $customer->last_name }} Edit
@endsection

@section('banner_link')
<li><a href="/customers">Customers</a></li>
<li><a href="Request::url()">#{{ $customer->id }} Edit</a></li>
@endsection

@section('content')
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <form method="post" action="/customers/{{$customer->id}}" enctype="multipart/form-data">
                    {{ method_field('put') }}
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="firstName">First Name:</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" @if(isset($customer)) value="{{ $customer->first_name }}" @elseif(!$errors->has('firstName')) value="{{ old('firstName') }}" @endif>
                        {!! $errors->first('firstName', '<p class="alert alert-danger">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name:</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" @if(isset($customer)) value="{{ $customer->last_name }}" @elseif(!$errors->has('lastName')) value="{{ old('lastName') }}" @endif>
                        {!! $errors->first('lastName', '<p class="alert alert-danger">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        <label for="DOB">Date of Birth:</label>
                        <input type="date" class="form-control" id="DOB" name="DOB" @if(isset($customer)) value="{{ $customer->DOB }}" @elseif(!$errors->has('DOB')) value="{{ old('DOB') }}" @endif>
                        {!! $errors->first('DOB', '<p class="alert alert-danger">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" id="email" name="email" @if(isset($customer)) value="{{ $customer->email }}" @elseif(!$errors->has('email')) value="{{ old('email') }}" @endif>
                        {!! $errors->first('email', '<p class="alert alert-danger">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        <label for="phoneNumber">Phone Number:</label>
                        <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" @if(isset($customer)) value="{{ $customer->phone_number }}" @elseif(!$errors->has('phoneNumber')) value="{{ old('phoneNumber') }}" @endif>
                        {!! $errors->first('phoneNumber', '<p class="alert alert-danger">:message</p>') !!}
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