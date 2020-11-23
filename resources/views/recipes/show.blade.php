@extends('layouts.master')

@section('title')
    {{ $recipe->name }} Show
@endsection

@section('banner_link')
<li><a href="/recipes">Recipes</a></li>
<li><a href="Request::url()">{{ $recipe->name }}</a></li>
@endsection

@section('content')
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <table class="table">
                    <tbody>
                        <tr>
                        <th scope="row">Description</th>
                        <td>{{ $recipe->description }}</td>
                        </tr>
                        @foreach($recipe->ingredients as $ingredient)
                            <tr>
                                <th scope="row">{{$ingredient->name}}</th>
                                <td>{{ $ingredient->description }}</td>
                                <td>{{ $ingredient->pivot->amount }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop