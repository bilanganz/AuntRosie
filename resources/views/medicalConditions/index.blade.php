@extends('layouts.master')

@section('title', 'List of Medical Conditions')

@section('banner_link')
<li><a href="Request::url()">Medical Conditions</a></li>
@endsection

@section('content')
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row justify-content-md-center">
            <a class="btn btn-primary" href="{{ URL::to('medicalConditions/create') }}" role="button">Add New</a>
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
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col" colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @foreach($medicalConditions as $medicalCondition)
                            @include ('medicalConditions.medicalCondition')
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- <div class="row justify-content-md-center">
            <div class="col-md-8">
            <h4>Soft Deleted Conditions</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @foreach($deletedConditions as $deletedCondition)
                            @include ('medicalConditions.deletedCondition')
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div> -->
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