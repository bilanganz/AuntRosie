@extends('layouts.master')

@section('title', 'List of inventories')

@section('banner_link')
<li><a href="Request::url()">inventories</a></li>
@endsection

@section('content')
<div class="album py-5 bg-light">
    <div class="container">
        <br/>
        <div class="row justify-content-md-center">
            <a class="btn btn-primary" href="{{ URL::to('inventories/create') }}" role="button">Add New</a>
            <div class="col-md-6"> 
                <input class="form-control" id="myInput" type="text" placeholder="Search..">
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <p></p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col">Production Date</th>
                            <th scope="col" colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                    @foreach($inventories as $inventory)
                        @include ('inventories.inventory')
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
@stop