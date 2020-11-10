@extends('layouts.master')

@section('title', 'List of Ingredients')

@section('content')

<h1>Showing {{ $ingredient->name }}</h1>

<table class="table">
  <tbody>
    <tr>
      <th scope="row">Shelf Life</th>
      <td>{{ $ingredient->shelfLife }}</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

@stop