@extends('Items.layout')

@section('content')
<br>
<h2>Enter Your Item Details</h2><br>
<!--this form is for create items  -->

<!--onsubmit sending inputs to the itemcontroller's store function with POST method  -->
<form action="{{route('items.store')}}" method="POST">
@csrf

<div class="row">

<div class="col-lg-12">
<div class= " form-group"> 
<label>Item Name</label>
<input type="text" class="form-control" id="itemname" name="itemname" placeholder="Enter Item Name">
<br>
</div>
</div>

<div class="col-lg-12">
<div class= " form-group"> 
<label>Item Description</label>
<input type="text" class="form-control" id="itemdescription" name="itemdescription" placeholder="Enter Item Description">
<br>
</div>
</div>

<div class="col-lg-12">
<div class= " form-group"> 
<button type="submit" class="btn btn-primary" >Submit</button>

<!--href is assigned to city.it means index-->
<a class="btn btn-danger" href="{{route('items.index')}}">Back</a>

</div>
</div>

</div>
</form>

@endsection