@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{ route('home') }}"><button type="submit" class="btn btn-primary">Back</button></a>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                <div class="panel-heading">
                 <div class="col-md-1 col-centered ">
                   <a href="{{ URL::route('createsupplier') }}"><img src="{{URL::asset('ui/add-user(2).png')}}"/></a>
                 </div>
                 <CENTER><h4>Suppliers</h4></CENTER>
                </div>
              </div>
       </div>
   </div>


@foreach($supplier as $supplier)
<div class="row">
        <div class="col-md-8 col-md-offset-2 ">
              <div class="panel panel-default ">
                 <div class="panel-body">
                    <div class="col-md-4 ">
                  <img class="supplier" src="{{URL::asset('ui/1516_icon_suppliers.png')}}"/>
                  <p>Supplier Name: {{$supplier->supplier_name}}</p>
                  <p>Supplier ID:{{$supplier->supplierid}}</p>
                   </div>
                    <div class="col-md-8 col-centered pull-right ">
                     <div>
                       <div class="col-md-8 col-centered ">
                         <div class="col-md-4 col-centered"> 
                         <form method="PUT" action="{{ route('scream') }}">
                                 {!! csrf_field() !!}
                          <input type="hidden" name="supplierid" value="{{$supplier->supplierid}}" />
                          {{ Form::submit('Delete')}}
                          </form
                          </div>
                       </div>
                       <div class="col-md-8 col-centered ">Supplied Items: {{$supplier->barcode}}
                       </div>  
                    </div>
                   </div>

                   <div class="col-md- vcenter pull-down">
                         <div class="phonenumber vcenter">
                        Phone Number: {{$supplier->supplier_phonenumber}}
                         </div>
                    </div>
                  
                </div>
              </div>
       </div>
</div>
@endforeach


            





</div>   
      

@endsection


                                                                      
                                                                      