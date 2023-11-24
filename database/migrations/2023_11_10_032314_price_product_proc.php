<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PriceProductProc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('price_product_proc', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("price");
            $table->string("category_id");
            $table->foreign("category_id")->references("id")->on("price_product_category");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("price_product_proc");

    }
}
