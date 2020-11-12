@extends('layouts.master')

@section('title')
    {{ $customer->firstName . ' ' . $customer->lastName }} Show
@endsection

@section('content')
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">

                <h1>Showing {{ $customer->firstName . ' ' . $customer->lastName }} Information</h1>

                <table class="table">
                    <tbody>
                        <tr>
                        <th scope="row">First Name</th>
                        <td>{{ $customer->firstName }}</td>
                        </tr>
                        <tr>
                        <th scope="row">Last Name</th>
                        <td>{{ $customer->lastName }} weeks</td>
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
                        <td>{{ $customer->phoneNumber }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop