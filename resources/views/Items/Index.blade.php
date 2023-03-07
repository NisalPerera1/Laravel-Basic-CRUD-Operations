
@extends('Items.layout')

@section('content')
<br>
<div class= " form-group row">
<div class="col-lg-12 margin-tb">
    <div class="float-right">
        <a class="btn btn-success" href="{{route('items.create')}}">Create New Item</a>
    </div>
</div>
</div><br>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


<!--this is for view details  -->
<table class="table table-bordered">
    <tr>
     <th>Item ID</th> 
     <th>Item Name</th>   
     <th>Item Description</th>   
    </tr>
       <!--this is for view details  -->
       <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection