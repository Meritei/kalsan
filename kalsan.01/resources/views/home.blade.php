@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                 </br>
                 <div class="panel-body">
                    <div class="col-md-4">
                    <a href="{{route('shop')}}"><img class="circle" src="{{URL::asset('ui/Shop.png')}}"/></a><p>Shop</p>
                </div>
                <div class="col-md-4 ">
                    <a href="{{route('store')}}"><img class="circle" src="{{URL::asset('ui/store.png')}}"/></a><p>Store</p>
                </div>
                <div class="col-md-4">
                    <a href="{{route('supplier')}}"><img class="circle" src="{{URL::asset('ui/supply.png')}}"/></a><p>Suppliers</p>    
                </div>
            </div>

        </div>
       
           




    </div>
    
</div>
      

@endsection


