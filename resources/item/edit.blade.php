@extends('master')

@section('content')
<div class ="ml-3">
<form action="/items/{{$item->id}}" method="POST">
  @csrf 
  @method('PUT') 
  <div class="form-group">
    <label for="name">Name :</label>
    <input type="text" class="form-control" placeholder="Enter name" value="{{$item ->name}}" id="name">
  </div>
  <div class="form-group">
    <label for="description">Description :</label>
    <input type="text" class="form-control" placeholder="Enter Description" value="{{$item ->Description}}" id="description">
  </div>
  <div class="form-group">
    <label for="stock">Stock :</label>
    <input type="number" class="form-control" placeholder="Enter stock" value="{{$item ->stock}}" id="stock">
  </div>
  <div class="form-group">
    <label for="price">Price :</label>
    <input type="number" class="form-control" placeholder="Enter price" value="{{$item ->price}}" id="price">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>

@endsection