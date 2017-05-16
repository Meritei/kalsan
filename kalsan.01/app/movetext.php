//End of computation for items one
             //Computation for item 2
               if (!empty($itemone)) 
             {
                  $item = store::wherebarcode( $itemtwo[0])->first();
                  $productname = $item->product_name;
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
                            $shopitem->quantity = $newshopquantity;
                            $shopitem->save();      
                       }
                       else
                       {

                             $new_shopitem = new shop;
                             $new_shopitem->product_name=$productname; 
                             $new_shopitem->barcode=$itemtwo[0];
                             $new_shopitem->quantity=$itemtwo[1];
                             $new_shopitem->save();

                       }

                  }


             }
             //End of computation for items two
            
             //Computation for item 3
               if (!empty($itemone)) 
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
                            $shopitem->quantity = $newshopquantity;
                            $shopitem->save();      
                       }
                       else
                       {

                             $new_shopitem = new shop;
                             $new_shopitem->product_name=$productname; 
                             $new_shopitem->barcode=$itemthree[0];
                             $new_shopitem->quantity=$itemthree[1];
                             $new_shopitem->save();

                       }

                  }


             }
             //End of computation for items three