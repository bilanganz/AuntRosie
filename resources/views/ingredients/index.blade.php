@extends('layouts.master')

@section('title', 'List of Ingredients')

@section('banner_link')
<li><a href="Request::url()">Ingredients</a></li>
@endsection

@section('content')
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row justify-content-md-center">
            <a class="btn btn-primary" href="{{ URL::to('ingredients/create') }}" role="button">Add New</a>
            <div class="col-md-6">
            <input class="form-control" id="myInput" type="text" placeholder="Search..">
            </div>
        </div>
        <hr/>
          <div class="row" id="myTable">
            @foreach($ingredients as $ingredient)
                @include ('ingredients.ingredient')
            @endforeach
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable div .box-shadow").filter(function() {
      $(this).parents('div .col-md-4').toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
@stop