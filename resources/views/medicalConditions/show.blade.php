@extends('layouts.master')

@section('title')
    {{ $medicalCondition->name }} Show
@endsection

@section('content')
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">

                <h1>Showing {{ $medicalCondition->name }} Information</h1>

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