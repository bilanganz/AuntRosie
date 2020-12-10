@extends('layouts.master')

@section('title', 'List of Customers')

@section('banner_link')
<li><a href="Request::url()">Customers</a></li>
@endsection

@section('content')
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-6"> 
                <input class="form-control" id="myInput" type="text" placeholder="Search..">
            </div>
        </div>
        <br/>
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email Address</th>
                            <th scope="col" colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @foreach($customers as $customer)
                            @include ('customers.customer')
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