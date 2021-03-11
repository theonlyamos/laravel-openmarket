<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductTableAddColumnsPriceWidthHeightBreadthWeightVolumeColorsSizes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->float('price')->nullable();
            $table->float('width')->nullable();
            $table->float('height')->nullable();
            $table->float('breadth')->nullable();
            $table->float('weight')->nullable();
            $table->float('volume')->nullable();
            $table->text('colors')->nullable();
            $table->text('sizes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
}
