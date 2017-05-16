<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class supplies extends Model
{
    
    use Notifiable;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'supplier_name', 'supplierid', 'barcode','quantity','extra_details'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


}
