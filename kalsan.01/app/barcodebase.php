<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class barcodebase extends Model
{
    // use Notifiable;
   public $timestamps = false;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_name', 'barcode'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'barcodebase';
}
