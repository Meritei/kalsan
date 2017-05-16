<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;
use app\supplier;

class CreatesupplierController extends Controller
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
        return view('createsupplier.index');
    }


    public function creatingsupplier()
    {
                $supplier_name =Input::get('supplier_name');
                $supplierid =Input::get('supplierid');
                $existingsupplierid = supplier::wheresupplierid($supplierid)->first();
                if ($existingsupplierid) {
                    echo "Supplier id is already taken";
                    return view('createsupplier.index');
                }
                $supplier_phonenumber =Input::get('supplier_phonenumber');
                $barcode =Input::get('barcode');
                $extra_details =Input::get('extra_details');

                             $new_supplier = new supplier;
                             $new_supplier->supplier_name=$supplier_name;
                             $new_supplier->supplierid=$supplierid; 
                             $new_supplier->supplier_phonenumber= $supplier_phonenumber;
                             $new_supplier->barcode=$barcode;
                             $new_supplier->extra_details=$extra_details;
                             $new_supplier->save();

              return view('createsupplier.index');
    } 

}
