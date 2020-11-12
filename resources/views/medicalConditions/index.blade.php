@extends('layouts.master')

@section('title', 'List of Medical Conditions')

@section('content')

<div class="album py-5 bg-light">
    <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-md-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col" colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($medicalCoditions as $medicalCodition)
                            @include ('$medicalCoditions.$medicalCodition')
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@stop