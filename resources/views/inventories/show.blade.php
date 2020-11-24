@extends('layouts.master')

@section('title')
    {{ $inventory->id }} Show
@endsection

@section('content')
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">

                <h1>Showing {{ $inventory->recipes->name }} Information</h1>

                <table class="table">
                    <tbody>
                        <tr>
                        <th scope="row">Price</th>
                        <td>{{ $inventory->price }}</td>
                        </tr>
                        <tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop