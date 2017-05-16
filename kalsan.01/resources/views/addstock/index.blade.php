@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{ route('store') }}"><button type="submit" class="btn btn-primary">Back</button></a>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                <div class="panel-heading">Adding Stock Form</div>
                <br/>
                 <form class="form-horizontal" role="form" method="PUT" action="{{ route('addingstock') }}">
                        {{ csrf_field() }}
              <div class="form-group{{ $errors->has('product_name') ? ' has-error' : '' }}">
                        <label for="product_name" class="col-md-4 control-label">Product Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="product_name" value="{{ old('product_name') }}" required autofocus>

                                @if ($errors->has('product_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                </div>


            <div class="form-group{{ $errors->has('barcode') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Product Barcode</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="barcode" required>

                                @if ($errors->has('barcode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('barcode') }}</strong>
                                    </span>
                                @endif
                            </div>
            </div>


             <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Quantity</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="quantity" required>

                                @if ($errors->has('quantity'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('quantity') }}</strong>
                                    </span>
                                @endif
                            </div>
            </div>

                     <br/>  
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4 ">
                            <center>
                                <button type="submit" class="btn btn-primary">
                                    Add Stock
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

