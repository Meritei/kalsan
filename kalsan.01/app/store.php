<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class store extends Model
{
   // use Notifiable;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_name', 'barcode', 'quantity'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'store';
}

