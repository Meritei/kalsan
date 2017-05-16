@extends('layouts.app')
@section('content')
<div class="container">
<a href="{{ route('store') }}"><button type="submit" class="btn btn-primary">Back</button></a>
<div class="row">
<div class="col-md-8 col-md-offset-2">
</div>
        <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                <div class="panel-heading">Move Stock To Shop</div>
                <br/>
                <form class="form-horizontal" role="form" method="PUT" action="{{ route('movingtoshop') }}">
                 
                        {{ csrf_field() }}
                <div class="panel-body">
                        <div class="panel-body alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                
                                <div class="col-md-4 col-centered ">Barcode:<input id="name" type="text" class="form-control" name="barcode1" required> 
                                </div>
                                <div class="col-md-3">
                                 Quantity: <input id="name" type="text" class="form-control" name="quantity1" required> 
                               </div>
                               <div class="col-md-4">
                                 Price: <input id="name" type="text" class="form-control" name="price1" required> 
                               </div>


                            </div>
                      </div>
            <div class="panel-body">
                        <div class="panel-body alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                             
                                <div class="col-md-4 col-centered ">Barcode:<input id="name" type="text" class="form-control" name="barcode2" > </div>
                                
                                <div class="col-md-3">
                                 Quantity: <input id="name" type="text" class="form-control" name="quantity2"> 
                               </div>
                               <div class="col-md-4">
                                 Price: <input id="name" type="text" class="form-control" name="price2" > 
                               </div>
            
                            </div>
                      </div>

                       <div class="panel-body">
                        <div class="panel-body alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                               
                                <div class="col-md-4 col-centered ">Barcode:<input id="name" type="text" class="form-control" name="barcode3" > </div>
                                
                                <div class="col-md-3">
                                 Quantity: <input id="name" type="text" class="form-control" name="quantity3"> 
                               </div>
                               <div class="col-md-4">
                                 Price: <input id="name" type="text" class="form-control" name="price3" > 
                               </div>
           
                            </div>
                      </div>

                     <br/>  
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4 ">
                            <center>
                                <button type="submit" class="btn btn-primary">
                                    Move To Shop
                                </button>
                                </center>
                            </div>
                        </div>
                    </form>
             </div>
        </div>
        </div>
    </div>
    
</div>
      

@endsection

