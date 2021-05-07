@extends('adminlte::page')

@section('title', 'CRUD with Laravel 8')

@section('content_header')
    <h1>Edit Item</h1>
@stop

@section('content')
<form action="/items/{{$item->id}}" method="POST">
<!--To avoid 419 error on server-->
@csrf
<!--To use PUT instead of POST-->
@method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Code</label>
        <input id="code" name="code" type="text" class="form-control" tabindex="1" value="{{$item->code}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Description</label>
        <input id="description" name="description" type="text" class="form-control" tabindex="2" value="{{$item->description}}">
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Quantity</label>
        <input id="quantity" name="quantity" type="number" class="form-control" tabindex="3" value="{{$item->quantity}}">
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Price</label>
        <input id="price" name="price" type="number" steap="any" class="form-control" tabindex="4" value="{{$item->price}}">
    </div>

    <a href="/items" class="btn btn-secondary" tabindex="5">Cancel</a>
    <button type="submit" class="btn btn-primary" tabindex="6">Save</button>

</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop