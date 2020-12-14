@extends('layouts.master')

@section('title', 'Home')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
$(document).ready(function(){
    var  months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: [@foreach($monthlySales as $monthlySale)months['{{$monthlySale->month}}'-1]@if( !$loop->last),@endif @endforeach],
            datasets: [{
                label: 'Sales Record',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: [@foreach($monthlySales as $monthlySale)'{{$monthlySale->id}}'@if( !$loop->last),@endif @endforeach]
            }]
        },

        // Configuration options go here
        options: {
            legend: {
            display: false
         },
         title: {
            display: true,
            text: 'Sales'
        }

        }
    });

});
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection
