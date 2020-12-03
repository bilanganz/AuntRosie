@extends('layouts.master')

@section('title', 'Edit Sales')

@section('banner_link')
<li><a href="/sales">Sales</a></li>
<li><a href="Request::url()">{{ $sale->id }}</a></li>
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
                    <input type="text" id="lname" name="lname" disabled value="{{$sale->customers->first_name . ' ' . $sale->customers->last_name}}">
                </div>
                <div class="form-group">
                    <label for="sales_date">Sales Date:</label>
                    <input type="date" class="form-control" id="sales_date" name="sales_date" placeholder="Sales Date" @if(isset($sale)) value="{{ $sale->sales_date }}" @elseif(!$errors->has('sales_date')) value="{{ old('sales_date') }}" @endif>
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
                    </table>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Publish</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop