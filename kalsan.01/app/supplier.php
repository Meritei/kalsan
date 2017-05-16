<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    //use Notifiable;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'supplier_name', 'supplierid', 'supplier_phonenumber','barcode','extra_details'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'supplier';
}



