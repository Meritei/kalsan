 <?php echo '<form method="post" action="'.URL::to('deletesupplier').'">'; ?>


                       {{Form::open(['action' => ['CreatesupplierController@scream', $supplier->supplierid ,'method' => 'post']])}}
                       {{Form::token()}}
                       {{ Form::submit('Delete')}}
                       {{ Form::close()}}


                 <a href="{{ route('freesupplier', $supplier->supplierid) }}">Delete Supplier</a>







@foreach($shop as $shop)
<div class="row">
        <div class="col-md-8 col-md-offset-2 ">
              <div class="panel panel-default ">
                <div class="panel-body">
                            <div class="panel-body alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <div class="col-md-4 ">Product Name: {{$shop->product_name}}</div>
                                <div class="col-md-3 col-centered ">Barcode: {{$shop->barcode}}</div>
                                <div class="col-md-1 col-centered ">Quantity: {{$shop->quantity}}</div>
                                <div class="col-md-2 pull-right ">Price: {{$shop->price}}</div>


                            </div>
                      </div>
              </div>
       </div>
</div> 
@endforeach  


<div class="row">
        <div class="col-md-8 col-md-offset-2 ">
              <div class="panel panel-default ">
                 <div class="panel-body">
                 @foreach($supplier as $supplier)
                    <div class="col-md-4 ">
                    
                  <img class="supplier" src="{{URL::asset('ui/1516_icon_suppliers.png')}}"/>
                  <p>Supplier Name: {{$supplier->supplier_name}}</p>
                  <p>Supplier ID:{{$supplier->supplierid}}</p>
                   </div>
                    <div class="col-md-8 col-centered">
                     <div>
                       <div class="col-md-5 col-centered ">
                          <div class="suppliercontacts vcenter"> 
                  
                          </div>
                       </div>
                       <div class="col-md-7 col-centered "><div class="suppliesmade vcenter">Supplied Items: {{$supplier->barcode}}</div>
                       </div>  
                    </div>
                   </div>
                   <br/>
                   <div class="col-md-9 vcenter">
                         <div class="phonenumber vcenter">
                        Phone Number: {{$supplier->supplier_phonenumber}}
                         </div>
                    </div>
                  @endforeach
                </div>
              </div>
       </div>
</div>                  

$Station=Station::whereocsemail($ocsemail)->first();


 
 
 