@extends('master')

@section('content')
    <div.ml-3 mt-3>
        <h3>Detail Item</h3>
        <p>Item's name : {{$item->name}}</p>
        <p>Description : {{$item->description}}</p>
        <p>Price : {{$item->price}}</p>
        <p>Stock : {{$item->stock}}</p>
    </div>
@endsection