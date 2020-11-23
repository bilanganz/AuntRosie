@extends('layouts.master')

@section('title', 'Create Recipe')

@section('banner_link')
<li><a href="/recipes">Recipes</a></li>
<li><a href="Request::url()">Add Recipe</a></li>
@endsection

@section('content')
<script>
    function createChk(obj) {
        // console.log(obj);
        if (obj.value !== '' && document.getElementById(obj.id).checked) {
            var chk = document.createElement('input');  // CREATE CHECK BOX.
            chk.setAttribute('type', 'text');       // SPECIFY THE TYPE OF ELEMENT.
            chk.setAttribute('id', obj.value);     // SET UNIQUE ID.
            chk.setAttribute('class', "form-control");
            chk.setAttribute('placeholder', 0);
            chk.setAttribute('size', 5);
            chk.setAttribute('name', 'amount[]');

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
        <div class="col-sm-5">
            <hr>
            <form method="POST" action="/recipes" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Recipe Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" @if(!$errors->has('name')) value="{{ old('name') }}" @endif>
                    {!! $errors->first('name', '<p class="alert alert-danger">:message</p>') !!}
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Description" @if(!$errors->has('description')) value="{{ old('description') }}" @endif>
                    {!! $errors->first('description', '<p class="alert alert-danger">:message</p>') !!}
                </div>
                <div class="form-group">
                    <table class="table table-responsive-sm">
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Amount</th>
                        </tr>
                    @foreach($ingredients as $ingredient)
                        <tr>
                            <td><input type="checkbox" id="ingredient_{{$ingredient->id}}" name="ingredients[]" value="{{$ingredient->id}}" onclick="createChk(ingredient_{{$ingredient->id}})"></td>
                            <td><label for="ingredient_{{$ingredient->id}}">{{$ingredient->name}}</label></td>
                            <td id="container_{{$ingredient->id}}"></td>
                        </tr>
                    @endforeach
                    </table>
                    {!! $errors->first('ingredients', '<p class="alert alert-danger">:message</p>') !!}
                    {!! $errors->first('amount', '<p class="alert alert-danger">:message</p>') !!}
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Publish</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop