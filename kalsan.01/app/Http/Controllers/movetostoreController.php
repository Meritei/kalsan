<?php

namespace app\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use app\shop;
use app\store;
//use Input;

class movetostoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('movetostore.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function moveitem()
    {
        
             $barcode1=Input::get('barcode1');
             $quantity1=Input::get('quantity1'); 
             $barcode2=Input::get('barcode2');
             $quantity2=Input::get('quantity2'); 
             $barcode3=Input::get('barcode3');
             $quantity3=Input::get('quantity3');
             
             $buffer1 = array($barcode1,$quantity1);
             $buffer2 = array($barcode2,$quantity2);
             $buffer3 = array($barcode3,$quantity3);

            //buffer one function starts here
             if (!empty($buffer1))
              {
                 $item = shop::wherebarcode( $buffer1[0])->first();

                  if ($item) 
                  {
                          $productname = $item->product_name;
                          $barcode=$item->barcode;
                          $quantity=$item->quantity;
                          $price=$item->price;
                          $newquantity = $quantity-$buffer1[1];
                          $item->quantity = $newquantity;
                           if ($newquantity <= 0) 
                              {
                                $item->delete();
                                $moveitem = store::wherebarcode( $buffer1[0])->first();
                                $moveitem->product_name;
                                $moveitem->barcode;
                                $exisitingquantity = $moveitem->quantity;
                                $adding_existing = $exisitingquantity + $buffer1[1];
                                $moveitem->quantity = $adding_existing;
                                $moveitem->save();
                              }
                          
                          $save = $item->save();

                   //Lets move  item to store
                          if ($save) {
                          $moveitem = store::wherebarcode( $buffer1[0])->first();
                          $moveitem->product_name;
                          $moveitem->barcode;
                          $oldfigure = $moveitem->quantity;
                          $moveitem->quantity =  $buffer1[1] + $oldfigure;
                          $moveitem->save();
                          }
                         



                         
                   }
                  
             }
             //Buffer one functions end here
  
          //buffer two function starts here
             if (!empty($buffer2))
              {
                 $item = shop::wherebarcode( $buffer2[0])->first();

                  if ($item) 
                  {
                          $productname = $item->product_name;
                          $barcode=$item->barcode;
                          $quantity=$item->quantity;
                          $price=$item->price;
                          $newquantity = $quantity-$buffer2[1];
                                          if ($newquantity<=0) 
                                          {
                                        $delete = $item->delete();
                                            if ($delete) {
                                            $moveitem = store::wherebarcode( $buffer2[0])->first();
                                            $moveitem->product_name;
                                            $moveitem->barcode;
                                            $existingfig0 =$moveitem->quantity; 
                                            $moveitem->quantity =  $buffer2[1]  + $existingfig0;
                                            $moveitem->save();
                                                 
                                              }
                                          }
                          $item->quantity = $newquantity;
                          $save = $item->save();
                          if ($save) {
                          $moveitem = store::wherebarcode( $buffer2[0])->first();
                          $moveitem->product_name;
                          $moveitem->barcode;
                          $existingfig =$moveitem->quantity; 
                          $moveitem->quantity =  $buffer2[1] + $existingfig;
                          $moveitem->save();
                          }
                          
                   }
                 
             }
             //Buffer two functions end here
            
             //Buffer three function starts here 
             if (!empty($buffer3))
              {
                 $item = shop::wherebarcode( $buffer3[0])->first();

                  if ($item) 
                  {
                          $productname = $item->product_name;
                          $barcode=$item->barcode;
                          $quantity=$item->quantity;
                          $price=$item->price;
                          $newquantity = $quantity-$buffer3[1];
                                          if ($newquantity<=0) 
                                          {
                                             $delete = $item->delete();
                                             
                                              if ($delete)
                                              {
                                              $moveitem = store::wherebarcode( $buffer3[0])->first();
                                              $moveitem->product_name;
                                              $moveitem->barcode;
                                              $existingfig3 =$moveitem->quantity; 
                                              $moveitem->quantity =  $buffer3[1] + $existingfig3;
                                              $moveitem->save();
                                              }
                                              else
                                              {
  
                                                $item->quantity = $buffer3[1] + $existingfig3;
                                                $item->save();
                                              }
                                             
                                          }
                          
                          
                   }
                 
             }
             //Buffer three functions end here
            
                   return view('movetostore.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
