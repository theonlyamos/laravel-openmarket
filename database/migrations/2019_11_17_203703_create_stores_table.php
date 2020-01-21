<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('address')->nullable();
            $table->string('location')->nullable();
            $table->string('region')->nullable();
            $table->string('city')->nullable();
            $table->string('postal')->nullable();
            $table->string('logo')->nullable();
            $table->enum('role', ['customer', 'store', 'admin'])->default("store");
            $table->json('products')->nullable();
            $table->timestamps();
            $table->softDeletes(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
