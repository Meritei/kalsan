<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('shop', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name');
            $table->string('barcode')->unique();
            $table->string('quantity');          
            $table->index(['product_name', 'barcode']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('shop');
    }
}
