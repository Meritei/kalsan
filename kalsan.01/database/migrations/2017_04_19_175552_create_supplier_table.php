<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('supplier_name');
            $table->string('supplierid')->unique();
            $table->string('supplier_phonenumber');
            $table->string('barcode')->unique();
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
        Schema::dropIfExists('supplier');
    }
}
