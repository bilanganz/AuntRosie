@extends('layouts.master')

@section('title', 'Create New Sale')

@section('banner_link')
<li><a href="/sales">Sales</a></li>
<li><a href="Request::url()">New Sales</a></li>
@endsection

@section('content')
<script>
    function createChk(obj) {
        // console.log(obj);
        if (obj.value !== '' && document.getElementById(obj.id).checked) {
            var chk = document.createElement('input');  // CREATE CHECK BOX.
            chk.setAttribute('type', 'number');       // SPECIFY THE TYPE OF ELEMENT.
            chk.setAttribute('id', obj.value);     // SET UNIQUE ID.
            chk.setAttribute('class', "form-control");
            chk.setAttribute('placeholder', 0);
            chk.setAttribute('size', 5);
            chk.setAttribute('name', 'quantity[]');
            chk.setAttribute('min', 1);

            // APPEND THE NEWLY CREATED CHECKBOX AND LABEL TO THE <p> ELEMENT.
            document.getElementById('container_'+obj.id.slice(-1)).appendChild(chk);
        }
        else if(!document.getElementById(obj.id).checked)
        {
            var element  = document.getElementById(obj.value);
            element.parentNode.removeChild(element);
        }
    }
</script>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-sm-6">
            <hr>
            <form method="POST" action="/sales" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="customers_id">Customer:</label>
                    <select name="customers_id" id="customers_id">
                        @foreach($customers as $customer)
                            <option value="{{$customer->id}}">{{$customer->first_name . " " . $customer->last_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="sales_date">Sales Date:</label>
                    <input type="date" class="form-control" id="sales_date" name="sales_date" placeholder="Sales Date" @if(!$errors->has('sales_date')) value="{{ old('sales_date') }}" @endif>
                    {!! $errors->first('sales_date', '<p class="alert alert-danger">:message</p>') !!}
                </div>
                <div class="form-group">
                    <table class="table table-responsive-sm">
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Inventory</th>
                            <th>Production Date</th>
                            <th>Quantity</th>
                        </tr>
                    @foreach($inventories as $inventory)
                        <tr>
                            <td><input type="checkbox" id="inventory_{{$inventory->id}}" name="inventories[]" value="{{$inventory->id}}" onclick="createChk(inventory_{{$inventory->id}})"></td>
                            <td><label for="inventory_{{$inventory->id}}">{{$inventory->recipes->name}}</label></td>
                            <td>{{$inventory->quantity}}</td>
                            <td>{{$inventory->production_date}}</td>
                            <td id="container_{{$inventory->id}}"></td>
                        </tr>
                    @endforeach
                    </table>
                    {!! $errors->first('inventories', '<p class="alert alert-danger">:message</p>') !!}
                    {!! $errors->first('quantity', '<p class="alert alert-danger">:message</p>') !!}
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Publish</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop