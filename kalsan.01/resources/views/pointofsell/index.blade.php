@extends('layouts.app')

@section('content')
<div class="container">
 <a href="{{ route('home') }}"><button type="submit" class="btn btn-primary">Back</button></a>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                <div class="panel-heading">Point Of Sell</div>
                <br/>
                 <form class="form-horizontal" role="form" method="PUT" action="{{ route('sell') }}">

            <div class="form-group{{ $errors->has('barcode') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Item Barcode</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="barcode1" required>

                                @if ($errors->has('barcode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('barcode') }}</strong>
                                    </span>
                                @endif
                            </div>
            </div>


             <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label"> Item Quantity</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="quantity1" required>

                                @if ($errors->has('quantity'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('quantity') }}</strong>
                                    </span>
                                @endif
                            </div>
            </div>
  <div class="form-group{{ $errors->has('barcode2') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Item Barcode</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="barcode2">

                                @if ($errors->has('barcode2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('barcode2') }}</strong>
                                    </span>
                                @endif
                            </div>
            </div>


             <div class="form-group{{ $errors->has('quantity2') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label"> Item Quantity</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="quantity2">

                                @if ($errors->has('quantity2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('quantity2') }}</strong>
                                    </span>
                                @endif
                            </div>
            </div>
              <div class="form-group{{ $errors->has('barcode3') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Item Barcode</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="barcode3">

                                @if ($errors->has('barcode3'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('barcode3') }}</strong>
                                    </span>
                                @endif
                            </div>
            </div>


             <div class="form-group{{ $errors->has('quantity3') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label"> Item Quantity</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="quantity3">

                                @if ($errors->has('quantity3'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('quantity3')}}</strong>
                                    </span>
                                @endif
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

