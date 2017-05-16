@extends('layouts.app')

@section('content')
<div class="container">
                <a href="{{ route('home') }}"><button type="submit" class="btn btn-primary">Back</button></a>
    <div class="row">
     <center><h4>Store</h4></center>
        <div class="col-md-7 col-md-offset-2">
              <div class="panel panel-default">
                <div class="panel-heading">
                 <div class="col-md-3 col-left ">
                 <a href="{{ URL::route('addstock') }}"><img src="{{URL::asset('ui/1493305579_lorry_add.png')}}"/> Add Stock </a>
                 </div>
                 <div class="col-md-5 col-center ">
                 <a href="{{ URL::route('movetoshop') }}"><img src="{{URL::asset('ui/hotel-supplier(1).png')}}"/>  Move Stock To Shop </a>
                 </div>
                 <div class="col-md-4 ">
                <a href="{{ URL::route('shop') }}"><img src="{{URL::asset('ui/movetoshop.png')}}"/>  Shop </a>
                 </div>
<br>

                </div>
              </div>
       </div>
   </div>
 <!-- End of Header  Section -->

   <div class="row">
        <div class="col-md-8 col-md-offset-2 ">
              <div class="panel panel-default ">
                <div class="panel-body">
                          @foreach($store as $store)
<div class="panel-body alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <div class="col-md-4 ">Product Name:{{$store->product_name}}</div>
                                <div class="col-md-3 col-centered ">Barcode:{{$store->barcode}} </div>
                                <div class="col-md-2 pull-right ">Quantity:{{$store->quantity}}</div>
 </div>                          
@endforeach
                      </div>
              </div>
       </div>
</div>
















</div> 




      

@endsection


                                                                      
