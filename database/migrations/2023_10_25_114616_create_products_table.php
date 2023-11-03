<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary(); 
            $table->string('product_name');
            $table->string('product_thumbnail');
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
