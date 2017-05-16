<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;

use app\shop;

use app\store;

use Illuminate\Database\Eloquent\Model;

use Collective\Html\Eloquent\FormAccessible;


class MovetostoreController extends Controller
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
        return view('movetostore');
    }


    public function letsmove()
    {
       

        $product = shop::wherebarcode($barcode)->first();
        $existingquantity = $product->quantity;
       
    }
   







}
