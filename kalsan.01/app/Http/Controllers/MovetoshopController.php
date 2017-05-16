<?php

namespace app\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use app\shop;
use app\store;
use app\barcodebase;

class MovetoshopController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('movetoshop.index');
    }

    public function movingtoshop()
    {
             $barcode1=Input::get('barcode1');
             $quantity1=Input::get('quantity1');
             $price1=Input::get('price1');



             $barcode2=Input::get('barcode2');
             $quantity2=Input::get('quantity2');
              $price2=Input::get('price2');
            
             $barcode3=Input::get('barcode3');
             $quantity3=Input::get('quantity3');
              $price3=Input::get('price3');
         

             $itemone =array($barcode1,$quantity1,$price1);
             $itemtwo =array($barcode2,$quantity2,$price2);
             $itemthree =array($barcode3,$quantity3,$price3);
            //all computation functions for item one

             if (!empty($itemone)) 
             {
                  $item = store::wherebarcode( $itemone[0])->first();
                  $productname = $item->product_name;
                  $item->barcode;
                  $item->quantity;
                //Computing new quantity
                  $new_storequantity = $item->quantity - $itemone[1];
                //saving
                  $item->quantity = $new_storequantity;
                  $itemsaved = $item->save();
                  if ($itemsaved) 
                  {
                      $shopitem = shop::wherebarcode( $itemone[0])->first();
                      if ($shopitem)
                       {
                            $shopitem->product_name;

                            $shopitem->barcode;
                            $shopquantity = $shopitem->quantity;
                            //computing new shop quantity
                            $newshopquantity = $shopquantity + $itemone[1];
                            $shopitem->price = $itemone[2];
                            $shopitem->quantity = $newshopquantity;
                            $shopitem->save(); 
                            echo "Item successfully added";     
                       }
                       else
                       {

                             $new_shopitem = new shop;
                             $new_shopitem->product_name=$productname; 
                             $new_shopitem->price = $itemone[2];
                             $new_shopitem->barcode=$itemone[0];
                             $new_shopitem->quantity=$itemone[1];
                             $new_shopitem->save();
                             echo "Item successfully added";

                       }

                  }


             }
             //end of item one section
             //Computation for item 2
               if ($itemtwo[0] = "null")
               {
                
                 return view('movetoshop.index');
              }
               if (!empty($itemtwo)) 
             {
                  $item = store::wherebarcode( $itemtwo[0])->first();
                  $item->barcode;
                  $item->quantity;
                //Computing new quantity
                  $new_storequantity = $item->quantity - $itemtwo[1];
                //saving
                  $item->quantity = $new_storequantity;
                  $itemsaved = $item->save();
                  if ($itemsaved) 
                  {


                      $shopitem = shop::wherebarcode( $itemtwo[0])->first();
                      if ($shopitem)
                       {
                            $shopitem->product_name;

                            $shopitem->barcode;
                            $shopquantity = $shopitem->quantity;
                            //computing new shop quantity
                            $newshopquantity = $shopquantity + $itemtwo[1];
                            $shopitem->price;
                            $shopitem->price = $itemtwo[2];
                            $shopitem->quantity = $newshopquantity;
                            $shopitem->save(); 
                            echo "Item successfully added";     
                       }
                       else
                       {

                             $checkname = barcodebase::wherebarcode($itemtwo[0])->first();
                             $productname = $checkname->product_name;
                             $new_shopitem = new shop;
                             $new_shopitem->product_name=$productname; 
                             $new_shopitem->barcode=$itemtwo[0];
                             $new_shopitem->price = $itemtwo[2];
                             $new_shopitem->quantity=$itemtwo[1];
                             $new_shopitem->save();
                             echo "Item successfully added";

                       }

                  }


             }
             //End of computation for items two
            
             //Computation for item 3
               if ($itemthree[0] = "null")
               {
                  
                 return view('movetoshop.index');
              }
               if (!empty($itemthree)) 
             {
                  $item = store::wherebarcode( $itemthree[0])->first();
                  $productname = $item->product_name;
                  $item->barcode;
                  $item->quantity;
                //Computing new quantity
                  $new_storequantity = $item->quantity - $itemthree[1];
                //saving
                  $item->quantity = $new_storequantity;
                  $itemsaved = $item->save();
                  if ($itemsaved) 
                  {
                      $shopitem = shop::wherebarcode( $itemthree[0])->first();
                      if ($shopitem)
                       {
                            $shopitem->product_name;

                            $shopitem->barcode;
                            $shopquantity = $shopitem->quantity;
                            //computing new shop quantity
                            $newshopquantity = $shopquantity + $itemthree[1];
                            $shopitem->price;
                            $shopitem->price = $itemthree[2];
                            $shopitem->quantity = $newshopquantity;
                            $shopitem->save(); 
                            echo "Item successfully added";    
                       }
                       else
                       {

                             $new_shopitem = new shop;
                             $new_shopitem->product_name=$productname; 
                             $new_shopitem->barcode=$itemthree[0];
                             $new_shopitem->price = $itemthree[2];
                             $new_shopitem->quantity=$itemthree[1];
                             $new_shopitem->save();
                             echo "Item successfully added";

                       }

                  }


             }
             //End of computation for items three

             

         return view('movetoshop.index');
    }

}
