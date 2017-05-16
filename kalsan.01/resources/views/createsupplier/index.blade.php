@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{ route('supplier') }}"><button type="submit" class="btn btn-primary">Back</button></a>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                <div class="panel-heading">Create New Supplier</div>
                <br/>

                 <form class="form-horizontal" role="form" method="PUT" action="{{ route('creatingsupplier') }}">
                  {{ csrf_field() }}
                      
              <div class="form-group{{ $errors->has('supplier_name') ? ' has-error' : '' }}">
                        <label for="supplier_name" class="col-md-4 control-label">Supplier Names</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="supplier_name" value="{{ old('supplier_name') }}" required autofocus>

                                @if ($errors->has('supplier_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('supplier_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                </div>
                 <div class="form-group{{ $errors->has('supplierid') ? ' has-error' : '' }}">
                        <label for="supplierid" class="col-md-4 control-label">Supplier ID</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="supplierid" value="{{ old('supplierid') }}" required autofocus>

                                @if ($errors->has('supplierid'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('supplierid') }}</strong>
                                    </span>
                                @endif
                            </div>
                </div>


            <div class="form-group{{ $errors->has('supplier_phonenumber') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Supplier Phonenumber</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="supplier_phonenumber" required>

                                @if ($errors->has('supplier_phonenumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('supplier_phonenumber') }}</strong>
                                    </span>
                                @endif
                            </div>
            </div>


             <div class="form-group{{ $errors->has('barcode') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Supplied Product Barcode</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="barcode" required>

                                @if ($errors->has('barcoder'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('barcode') }}</strong>
                                    </span>
                                @endif
                            </div>
            </div>

             <div >
                            <label for="name" class="col-md-4 control-label">Extra Details</label>

                            <div class="col-md-6">
                           <textarea class="form-control" rows="5" id="comment" name="extra_details"></textarea>

                            </div>
            </div>
                     <br/>  
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4 ">
                            <center>
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                                </center>
                            </div>
                        </div>
                    </form>
             </div>
        </div>
    </div>
    
</div>
      

@endsection

