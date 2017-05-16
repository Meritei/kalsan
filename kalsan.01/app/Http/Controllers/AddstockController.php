<?php


namespace app\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Support\Facades\Input;
use app\store;


class AddstockController extends Controller
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
        return view('addstock.index');
    }

    public function addingstock()
    {
             $product_name=Input::get('product_name');
             $barcode=Input::get('barcode'); 
             $quantity=Input::get('quantity');


             $stock = new store;
             $stock->product_name= Input::get('product_name'); 
             $stock->barcode= Input::get('barcode');
             $stock->quantity= Input::get('quantity');
             $stock->save();
            
            return view('addstock.index');

    }
}
