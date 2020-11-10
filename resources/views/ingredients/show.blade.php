@extends('layouts.master')

@section('title', 'List of Ingredients')

@section('content')
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">

                <h1>Showing {{ $ingredient->name }} Information</h1>

                <table class="table">
                    <tbody>
                        <tr>
                        <th scope="row">Description</th>
                        <td>{{ $ingredient->description }}</td>
                        </tr>
                        <tr>
                        <th scope="row">Shelf Life</th>
                        <td>{{ $ingredient->shelfLife }} weeks</td>
                        </tr>
                        <tr>
                        <th scope="row">Calories</th>
                        <td>{{ $nutrition->calories }}</td>
                        </tr>
                        <tr>
                        <th scope="row">Fat</th>
                        <td>{{ $nutrition->fat }}</td>
                        </tr>
                        <tr>
                        <th scope="row">Saturated Fat</th>
                        <td>{{ $nutrition->saturatedFat }}</td>
                        </tr>
                        <tr>
                        <th scope="row">Trans Fat</th>
                        <td>{{ $nutrition->transFat }}</td>
                        </tr>
                        <tr>
                        <th scope="row">Cholestrol</th>
                        <td>{{ $nutrition->cholestrol }}</td>
                        </tr>
                        <tr>
                        <th scope="row">Sodium</th>
                        <td>{{ $nutrition->sodium }}</td>
                        </tr>
                        <tr>
                        <th scope="row">Carbohydrate</th>
                        <td>{{ $nutrition->carbohydrate }}</td>
                        </tr>
                        <tr>
                        <th scope="row">Dietary Fiber</th>
                        <td>{{ $nutrition->dietaryFiber }}</td>
                        </tr>
                        <tr>
                        <th scope="row">sugar</th>
                        <td>{{ $nutrition->sugar }}</td>
                        </tr>
                        <tr>
                        <th scope="row">protein</th>
                        <td>{{ $nutrition->protein }}</td>
                        </tr>
                        <tr>
                        <th scope="row">vitamin D</th>
                        <td>{{ $nutrition->vitaminD }}</td>
                        </tr>
                        <tr>
                        <th scope="row">Calcium</th>
                        <td>{{ $nutrition->calcium }}</td>
                        </tr>
                        <tr>
                        <th scope="row">Iron</th>
                        <td>{{ $nutrition->iron }}</td>
                        </tr>
                        <tr>
                        <th scope="row">Potassium</th>
                        <td>{{ $nutrition->potassium }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop