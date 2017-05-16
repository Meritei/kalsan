<?php
namespace app\Http\Controllers;

use Illuminate\Http\Request;

use app\shop;

use Illuminate\Database\Eloquent\Model;

use Collective\Html\Eloquent\FormAccessible;

use Illuminate\Support\Facades\Input;


class pointofsellController extends Controller
{
    use FormAccessible;
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
           
           return view('pointofsell.index');
    }
    public function sell()
    {       
            $barcode1=Input::get('barcode1');
            $quantity1=Input::get('quantity1');
            $barcode2=Input::get('barcode2');
            $quantity2=Input::get('quantity2');
            $barcode3=Input::get('barcode3');
            $quantity3=Input::get('quantity3');

            $itemone = array($barcode1,$quantity1);
            $itemtwo = array($barcode2,$quantity2);
            $itemthree = array($barcode3,$quantity3);

           if (!empty($itemone)) 
           {
                $item1 = shop::wherebarcode( $itemone[0])->first();
                $existing1 = $item1->quantity;
                $newquantity1 = $existing1 - $quantity1;
                 if ($newquantity1 <= 0)
                    {
                      echo "Not enough first items in the shop.";
                      return redirect()->route('pointofsell');
                    }
                    else
                    {
                    $item1->quantity = $newquantity1;
                    $item1->save();
                    }

           }
            //Computation for item 2
               if ($itemtwo[0] = "null")
               {
                
                 return redirect()->route('pointofsell');
              }

           if (!empty($itemtwo)) 
           {
               $item2 = shop::wherebarcode( $itemtwo[0])->first();
               $existing2 =$item2->quantity;
               $newquantity2 =$existing2 - $quantity2;
               if ($newquantity2 <= 0) {
                     echo "Not enough Second items in the shop.";
                      return redirect()->route('pointofsell');
                 }
                 else
                    {
                    $item2->quantity = $newquantity2;
                    $item2->save();
                    }
           }
           if (!empty($itemthree)) 
           {
               $item3 = shop::wherebarcode( $itemtwo[0])->first();
               $existing3 =$item3->quantity;
               $newquantity3 = $existing3 - $quantity3;
               if ($newquantity3 <= 0) {
                     echo "Not enough third items in the shop.";
                      return redirect()->route('pointofsell');
                 }
                    else
                    {
                    $item3->quantity = $newquantity3;
                    $item3->save();
                    }
           }

           return view('pointofsell');
    }
}
