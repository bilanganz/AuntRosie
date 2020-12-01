@extends('layouts.master')

@section('title')
    {{ $customer->first_name . ' ' . $customer->last_name }} Show
@endsection

@section('banner_link')
<li><a href="/customers">Customers</a></li>
<li><a href="Request::url()">#{{ $customer->id }} Show</a></li>
@endsection

@section('content')
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <table class="table">
                    <tbody>
                        <tr>
                        <th scope="row">First Name</th>
                        <td>{{ $customer->first_name }}</td>
                        </tr>
                        <tr>
                        <th scope="row">Last Name</th>
                        <td>{{ $customer->last_name }}</td>
                        </tr>
                        <tr>
                        <th scope="row">Date of Birth</th>
                        <td>{{ $customer->DOB }}</td>
                        </tr>
                        <tr>
                        <th scope="row">Email</th>
                        <td>{{ $customer->email }}</td>
                        </tr>
                        <tr>
                        <th scope="row">Phone Number</th>
                        <td>{{ $customer->phone_number }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop