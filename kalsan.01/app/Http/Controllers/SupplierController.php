<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;

use app\supplier;
use Illuminate\Support\Facades\Input;

use Illuminate\Database\Eloquent\Model;

use Collective\Html\Eloquent\FormAccessible;

class SupplierController extends Controller
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

         $supplier = supplier::all();

        return view('supplier', ['supplier' => $supplier]);
           
           
    }
   
    public function scream()
    {  
        //$supplier= supplier::wheresupplierid($supplier->supplierid)->first(); 
         $supplierid=Input::get('supplierid');
         $supplier = supplier::wheresupplierid($supplierid)->first();
         $supplier->delete();

         
      return redirect()->route('supplier');
         
    }


 
}

