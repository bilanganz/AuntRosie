@extends('layouts.master')

@section('title')
    {{ $medicalCondition->name }} Information
@endsection

@section('banner_link')
<li><a href="/medicalConditions">Medical Conditions</a></li>
<li><a href="Request::url()">{{ $medicalCondition->name }}</a></li>
@endsection

@section('content')
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <table class="table">
                    <tbody>
                        <tr>
                        <th scope="row">Name</th>
                        <td>{{ $medicalCondition->name }}</td>
                        </tr>
                        <tr>
                        <th scope="row">Description</th>
                        <td>{{ $medicalCondition->description }} weeks</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop