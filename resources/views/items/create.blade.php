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
        <label for="code" class="form-label">Code</label>
        <input id="code" name="code" type="text" class="form-control" tabindex="1" value="{{isset($item->code)?$item->code:old('code')}}">
        {!! $errors->first('code', '<p class="help-block text-danger">:message</p>') !!}
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Description</label>
        <input id="description" name="description" type="text" class="form-control" tabindex="2" value="{{isset($item->description)?$item->description:old('description')}}">
        {!! $errors->first('description', '<p class="help-block text-danger">:message</p>') !!}
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Quantity</label>
        <input id="quantity" name="quantity" type="number" class="form-control" tabindex="3" value="{{isset($item->quantity)?$item->quantity:old('quantity')}}">
        {!! $errors->first('quantity', '<p class="help-block text-danger">:message</p>') !!}
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Price</label>
        <input id="price" name="price" type="number" step=".01"  class="form-control" tabindex="4" value="{{isset($item->price)?$item->price:old('price')}}">
        {!! $errors->first('price', '<p class="help-block text-danger">:message</p>') !!}
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