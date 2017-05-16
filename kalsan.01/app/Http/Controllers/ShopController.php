<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;

use app\shop;

use Illuminate\Database\Eloquent\Model;

use Collective\Html\Eloquent\FormAccessible;

class ShopController extends Controller
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

        $shop = shop::all();

        return view('shop', ['shop' => $shop]);
        
    }
}
