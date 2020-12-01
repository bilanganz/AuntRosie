@extends('layouts.master')

@section('title', 'List of Sales')

@section('banner_link')
<li><a href="Request::url()">Sales</a></li>
@endsection

@section('content')
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
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row justify-content-md-center">
            <a class="btn btn-primary" href="{{ URL::to('sales/create') }}" role="button">Add New</a>
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
                            <th scope="col">Customer Name</th>
                            <th scope="col">Purchase Date</th>
                            <th scope="col" colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @foreach($sales as $sale)
                            @include ('sales.sale')
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@stop