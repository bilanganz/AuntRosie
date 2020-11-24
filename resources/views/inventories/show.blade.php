@extends('layouts.master')

@section('title')
    {{ $inventory->recipes->name }} Inventory Show
@endsection

@section('banner_link')
<li><a href="/inventories">Inventory</a></li>
<li><a href="Request::url()">{{ $inventory->recipes->name }}</a></li>
@endsection

@section('content')
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <table class="table">
                    <tbody>
                        <tr>
                        <th scope="row">ID</th>
                        <td>{{ $inventory->id }}</td>
                        </tr>
                        <tr>
                        <tr>
                        <th scope="row">Price</th>
                        <td>{{ $inventory->price }}</td>
                        </tr>
                        <tr>
                        <tr>
                        <th scope="row">Production Date</th>
                        <td>{{ $inventory->production_date }}</td>
                        </tr>
                        <tr>
                        <tr>
                        <th scope="row">Quantity</th>
                        <td>{{ $inventory->quantity }}</td>
                        </tr>
                        <tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop