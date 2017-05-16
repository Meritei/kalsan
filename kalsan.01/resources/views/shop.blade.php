@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{ route('home') }}"><button type="submit" class="btn btn-primary">Back</button></a>
               
    <div class="row">
     <center><h4>Shop</h4></center>
        <div class="col-md-7 col-md-offset-2">
              <div class="panel panel-default">
                <div class="panel-heading">
                 
                 <div class="col-md-4 col-left ">
                 <a href="{{ URL::route('pointofsell') }}"><img src="{{URL::asset('ui/cashier.png')}}"/> Point of Sell</a>

                 </div>
                   <div class="col-md-4 col-right ">
                   <a href="{{ URL::route('movetostore.index') }}"><img src="{{URL::asset('ui/hotel-supplier.png')}}"/> Move Stock To Store</a>
                 </div>
                 <div class="col-md-4 ">
                 <a href="{{ URL::route('store') }}"><img src="{{URL::asset('ui/warehouse.png')}}"/> Store</a>
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

  @foreach($shop as $shop)
                            <div class="panel-body alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <div class="col-md-4 ">Product Name: {{$shop->product_name}}</div>
                                <div class="col-md-3 col-centered ">Barcode: {{$shop->barcode}}</div>
                                <div class="col-md-1 col-centered ">Quantity: {{$shop->quantity}}</div>
                                <div class="col-md-2 pull-right ">Price: {{$shop->price}}</div>
                            </div>
@endforeach
                      </div>
              </div>
       </div>
</div> 

















</div> 




      

@endsection


                                                                      
