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
                        <tr>
                        <td colspan="2">
                            <table class="table">
                            <tr>
                            <th>Ingredient name</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            </tr>
                            @foreach($recipe->ingredients as $ingredient)
                                <tr>
                                    <th scope="row">{{$ingredient->name}}</th>
                                    <td>{{ $ingredient->description }}</td>
                                    <td>{{ $ingredient->pivot->amount }} piece(s)</td>
                                </tr>
                            @endforeach
                            </table>
                        </td>    
                        </tr>
                    </tbody>
                </table>
            <div>
            @php
            $calories = $total_fat = $saturated_fat = $trans_fat = $cholestrol = $sodium = $carbohydrate = $dietary_fiber = 0;
            $sugar = $protein = $vitamin_d = $calcium = $iron = $potassium = 0;
            
            @endphp
            @foreach ($recipe->ingredients as $ingredient)
                @php
                $calories +=($ingredient->nutrition->calories)*($ingredient->pivot->amount);
                $total_fat +=($ingredient->nutrition->fat)*($ingredient->pivot->amount);
                $saturated_fat +=($ingredient->nutrition->saturated_fat)*($ingredient->pivot->amount);
                $trans_fat +=($ingredient->nutrition->trans_fat)*($ingredient->pivot->amount);
                $cholestrol +=($ingredient->nutrition->cholestrol)*($ingredient->pivot->amount);
                $sodium +=($ingredient->nutrition->sodium)*($ingredient->pivot->amount);
                $carbohydrate +=($ingredient->nutrition->carbohydrate)*($ingredient->pivot->amount);
                $dietary_fiber +=($ingredient->nutrition->dietary_fiber)*($ingredient->pivot->amount);
                $sugar +=($ingredient->nutrition->sugar)*($ingredient->pivot->amount);
                $protein +=($ingredient->nutrition->protein)*($ingredient->pivot->amount);
                $vitamin_d +=($ingredient->nutrition->vitamin_d)*($ingredient->pivot->amount);
                $calcium +=($ingredient->nutrition->calcium)*($ingredient->pivot->amount);
                $iron +=($ingredient->nutrition->iron)*($ingredient->pivot->amount);
                $potassium +=($ingredient->nutrition->potassium)*($ingredient->pivot->amount);
                @endphp 
            @endforeach
            
            <div class="row">
                <div class="col">
                <section class="performance-facts">
                    <header class="performance-facts__header">
                        <h1 class="performance-facts__title">Nutrition Facts</h1>
                        <p>Serving Size 1/2 cup (about 82g)
                        <p>Serving Per Container 8</p>
                    </header>
                    <table class="performance-facts__table">
                        <thead>
                        <tr>
                            <th colspan="3" class="small-info">
                            Amount Per Serving
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th colspan="2">
                            <b>Calories</b>
                            @php
                                echo $calories;
                            @endphp
                            </th>
                        </tr>
                        <tr class="thick-row">
                            <td colspan="3" class="small-info">
                            <b>% Daily Value*</b>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">
                            <b>Total Fat</b>
                            @php
                                echo $total_fat/1000 . 'g';
                            @endphp
                            </th>
                            <td>
                            <b>
                            @php
                                echo round($total_fat/1000/65,2) . '%';
                            @endphp
                            </b>
                            </td>
                        </tr>
                        <tr>
                            <td class="blank-cell">
                            </td>
                            <th>
                            Saturated Fat
                            @php
                                echo $saturated_fat/1000 . 'g';
                            @endphp
                            </th>
                            <td>
                            <b>@php
                                echo round($saturated_fat/1000/20,2) . '%';
                            @endphp</b>
                            </td>
                        </tr>
                        <tr>
                            <td class="blank-cell">
                            </td>
                            <th>
                            Trans Fat
                            @php
                                echo $trans_fat/1000 . 'g';
                            @endphp
                            </th>
                            <td>
                            <b>@php
                                echo round($trans_fat/1000/20,2) . '%';
                            @endphp</b>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">
                            <b>Cholesterol</b>
                            @php
                                echo $cholestrol/1000 . 'g';
                            @endphp
                            </th>
                            <td>
                            <b>@php
                                echo round($cholestrol/1000/0.3,2) . '%';
                            @endphp</b>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">
                            <b>Sodium</b>
                            @php
                                echo $sodium/1000 . 'g';
                            @endphp
                            </th>
                            <td>
                            <b>@php
                                echo round($sodium/1000/2.4,2) . '%';
                            @endphp</b>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">
                            <b>Total Carbohydrate</b>
                            @php
                                echo $carbohydrate/1000 . 'g';
                            @endphp
                            </th>
                            <td>
                            <b>@php
                                echo round($carbohydrate/1000/300,2) . '%';
                            @endphp</b>
                            </td>
                        </tr>
                        <tr>
                            <td class="blank-cell">
                            </td>
                            <th>
                            Dietary Fiber
                            @php
                                echo $dietary_fiber/1000 . 'g';
                            @endphp
                            </th>
                            <td>
                            <b>@php
                                echo round($dietary_fiber/1000/25,2) . '%';
                            @endphp</b>
                            </td>
                        </tr>
                        <tr>
                            <td class="blank-cell">
                            </td>
                            <th>
                            Sugars
                            @php
                                echo $sugar/1000 . 'g';
                            @endphp
                            </th>
                            <td>
                            <b>@php
                                echo round($sugar/10000*0.8,2) . '%';
                            @endphp</b>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">
                            <b>Protein</b>
                            @php
                                echo $protein/1000 . 'g';
                            @endphp
                            </th>
                            <td>
                            <b>@php
                                echo round($protein/1000*0.6,2) . '%';
                            @endphp</b>
                            </td>
                        </tr>
                        <tr>
                            <td class="blank-cell">
                            </td>
                            <th>
                            Vitamin D
                            @php
                                echo $vitamin_d/1000 . 'g';
                            @endphp
                            </th>
                            <td>
                            <b>@php
                                echo round($vitamin_d/1000*rand(1,10),2) . '%';
                            @endphp</b>
                            </td>
                        </tr>
                        <tr>
                            <td class="blank-cell">
                            </td>
                            <th>
                            Calcium
                            @php
                                echo $calcium/1000 . 'g';
                            @endphp
                            </th>
                            <td>
                            <b>@php
                                echo round($calcium/1000/1.1,2) . '%';
                            @endphp</b>
                            </td>
                        </tr>
                        <tr>
                            <td class="blank-cell">
                            </td>
                            <th>
                            Iron
                            @php
                                echo $iron/1000 . 'g';
                            @endphp
                            </th>
                            <td>
                            <b>@php
                                echo round($iron/1000/0.014,2) . '%';
                            @endphp</b>
                            </td>
                        </tr>
                        <tr class="thick-end">
                            <td class="blank-cell">
                            </td>
                            <th>
                            Potassium
                            @php
                                echo $potassium/1000 . 'g';
                            @endphp
                            </th>
                            <td>
                            <b>@php
                                echo round($potassium/1000/17,2) . '%';
                            @endphp</b>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <table class="performance-facts__table--grid">
                        <tbody>
                        <tr>
                            <td colspan="2">
                            Vitamin A
                            @php
                                echo round(rand(1,12)/100,2) . '%';
                            @endphp
                            </td>
                            <td>
                            Vitamin C
                            @php
                                echo round(rand(1,15)/100,2) . '%';
                            @endphp
                            </td>
                        </tr>
                        <tr class="thin-end">
                            <td colspan="2">
                            Calcium
                            @php
                                echo round(rand(1,12)/100,2) . '%';
                            @endphp
                            </td>
                            <td>
                            Iron
                            @php
                                echo round(rand(1,15)/100,2) . '%';
                            @endphp
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <p class="small-info">* Percent Daily Values are based on a 2,000 calorie diet. Your daily values may be higher or lower depending on your calorie needs:</p>

                    </section>
                </div>
                <div class="col">
                    Ingredient: @foreach($recipe->ingredients as $ingredient){{$ingredient->name}} @if(!$loop->last),@endif @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@stop