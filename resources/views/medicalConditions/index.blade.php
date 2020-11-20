@extends('layouts.master')

@section('title', 'List of Medical Conditions')

@section('content')

<div class="album py-5 bg-light">
    <div class="container">
        <a class="btn btn-primary" href="{{ URL::to('medicalConditions/create') }}" role="button">Add New</a>
        <hr/>
          <div class="row justify-content-md-center">
            <div class="col-md-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col" colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($medicalConditions as $medicalCondition)
                            @include ('medicalConditions.medicalCondition')
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@stop