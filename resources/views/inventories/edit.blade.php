@extends('layouts.master')

@section('title')
Edit Inventory #{{ $inventory->id }}
@endsection

@section('banner_link')
<li><a href="/inventories">inventories</a></li>
<li><a href="Request::url()">Inventory #{{ $inventory->id }}</a></li>
@endsection

@section('content')
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <form method="post" action="/inventories/{{$inventory->id}}" enctype="multipart/form-data">
                    {{ method_field('put') }}
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="text" class="form-control" id="price" name="price" @if(isset($inventory)) value="{{ $inventory->price }}" @elseif(!$errors->has('price')) value="{{ old('price') }}" @endif>
                        {!! $errors->first('price', '<p class="alert alert-danger">:message</p>') !!}
                        </div>
                    <div class="form-group">
                        <label for="production_date">Production Date:</label>
                        <input type="date" id="production_date" name="production_date" class="form-control" @if(isset($inventory)) value="{{ $inventory->production_date }}" @elseif(!$errors->has('production_date')) {{ old('production_date') }} @endif>
                        {!! $errors->first('production_date', '<p class="alert alert-danger">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity:</label>
                        <input type="number" min="1" id="quantity" name="quantity" class="form-control" @if(isset($inventory)) value="{{ $inventory->quantity }}" @elseif(!$errors->has('quantity')) {{ old('quantity') }} @endif>
                        {!! $errors->first('quantity', '<p class="alert alert-danger">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Publish</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop