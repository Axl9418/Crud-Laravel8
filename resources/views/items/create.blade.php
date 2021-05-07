@extends('adminlte::page')

@section('title', 'CRUD with Laravel 8')

@section('content_header')
    <h1>New Item</h1>
@stop

@section('content')
<form action="/items" method="POST">
<!--To avoid 419 error on server-->
@csrf
    <div class="mb-3">
        <label for="" class="form-label">Code</label>
        <input id="code" name="code" type="text" class="form-control" tabindex="1">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Description</label>
        <input id="description" name="description" type="text" class="form-control" tabindex="2">
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Quantity</label>
        <input id="quantity" name="quantity" type="number" class="form-control" tabindex="3">
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Price</label>
        <input id="price" name="price" type="number" steap="any" value="0.00" class="form-control" tabindex="4">
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