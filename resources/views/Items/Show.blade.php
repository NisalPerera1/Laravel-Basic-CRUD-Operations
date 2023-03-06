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


<!--this is for view details  -->
<table class="table table-bordered">
    <tr>
     <th>Item ID</th> 
     <th>Item Name</th>   
     <th>Item Description</th>   
    </tr>
    <tr>
       <!--this is for view details  -->
    </tr>

</table>




@endsection