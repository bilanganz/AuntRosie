@extends('layouts.master')

@section('title')
    {{ $recipe->name }} Show
@endsection

@section('content')
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">

                <h1>Showing {{ $recipe->name }} Information</h1>

                <table class="table">
                    <tbody>
                        <tr>
                        <th scope="row">Description</th>
                        <td>{{ $recipe->description }}</td>
                        </tr>
                        @foreach($rec as $ingredient)
                            <tr>
                                <th scope="row">{{$ingredient->name}}</th>
                                <td>{{ $recipe->description }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop