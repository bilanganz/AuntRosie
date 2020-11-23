@extends('layouts.master')

@section('title', 'List of Medical Conditions')

@section('content')

<div class="album py-5 bg-light">
    <div class="container">
        <div class="row justify-content-md-center">
                <a class="btn btn-primary" href="{{ URL::to('stocks/create') }}" role="button">Add New</a>
                <a class="btn btn-primary" href="{{ URL::to('stocks/reduce') }}" role="button">Reduce</a>
            </div>
        <br/>
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($stocksTotal as $stock)
                            @include ('stocks.stock')
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@stop