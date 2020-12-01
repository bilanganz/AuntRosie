@extends('layouts.master')

@section('title')
    Sale #{{ $sale->id }} Show
@endsection

@section('banner_link')
<li><a href="/sales">Sales</a></li>
<li><a href="Request::url()">{{ $sale->id }}</a></li>
@endsection

@section('content')
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <table class="table">
                    <tbody>
                        <tr>
                        <th scope="row">Sale ID</th>
                        <td>{{ $sale->id }}</td>
                        </tr>
                        <tr>
                        <th scope="row">Customer Name</th>
                        <td>{{ $sale->customers->first_name  . ' ' . $sale->customers->last_name }}</td>
                        </tr>
                        <th scope="row">Sales date</th>
                        <td>{{ $sale->sales_date }}</td>
                        </tr>
                        <tr>
                        <td colspan="2">
                            <table class="table">
                            <tr>
                            <th>Item</th>
                            <th>Quantity</th>
                            </tr>
                            @foreach($sale->inventory as $inventory)
                            <tr>
                                <td>{{ $inventory->recipes->name }}</td>
                                <td>{{ $inventory->pivot->quantity }}</td>
                            </tr>
                            @endforeach
                            </table>
                        </td>    
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop