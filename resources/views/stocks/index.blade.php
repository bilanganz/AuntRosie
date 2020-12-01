@extends('layouts.master')

@section('title', 'List of Medical Conditions')

@section('banner_link')
<li><a href="Request::url()">Stocks</a></li>
@endsection

@section('content')
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
$(document).ready(function(){
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',

        // The data for our dataset
        data: {
            labels: [@foreach($stocksTotal as $stock)'{{$stock->ingredients->name}}'@if( !$loop->last),@endif @endforeach],
            datasets: [{
                label: 'Quantity',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: 
                [@foreach($stocksTotal as $stock)'{{$stock->quantity}}'@if( !$loop->last),@endif @endforeach]    
                }]
        },

        // Configuration options go here
        options: {
            legend: {
            display: false
         },

            scales: {
                yAxes: [{
                    ticks: {
                        max: 200,
                        min: 0,
                        stepSize: 20
                    }
                }]
            }
        }
    });

});
</script>
<div class="album py-5 bg-light">
    <div class="container">
        <br/>
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <a class="btn btn-primary" href="{{ URL::to('stocks/create') }}" role="button">Add New</a>
                <a class="btn btn-primary" href="{{ URL::to('stocks/reduce') }}" role="button">Reduce</a>
                <p></p>
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
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
</div>

@stop