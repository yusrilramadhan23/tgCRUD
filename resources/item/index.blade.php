@extends('master')

@section('content')
    <table class="table">
      <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>description</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>
       </thead>
        <tbody>
        @foreach($items as $key => $item)
            <tr>
                <td> {{$key + 1}} </td>
                <td> {{$item -> name}} </td>
                <td> {{$item -> description}} </td>
                <td> {{$item -> price}} </td>
                <td> {{$item -> stock}} </td>
                <td>
                    <a href="/items/{{$item->id}}" class="btn btn--sm btn-info">show</a>
                    <a href="/items/{{$item->id}}/edit" class="btn btn--sm btn-default">edit</a>
                    <form action="/items/{{$item->id}}" method ="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class ="btn btn-sm btn-danger">delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody> 
  </table>

   
    
@endsection