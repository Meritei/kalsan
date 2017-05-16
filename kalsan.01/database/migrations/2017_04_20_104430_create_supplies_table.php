<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('supplies', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps('receved_at');
            $table->string('supplier_name');
            $table->string('supplierid')->unique();
            $table->string('barcode')->unique();
            $table->string('quantity');
            $table->string('extra_details')->nullable();
            $table->index(['supplierid', 'barcode']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplies');
    }
}
