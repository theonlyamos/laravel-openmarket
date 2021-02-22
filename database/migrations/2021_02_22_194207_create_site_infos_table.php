<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('OpenmartGH');
            $table->string('phone_developer')->nullable();
            $table->string('phone_admin')->nullabe();
            $table->string('phone_info')->nullable();
            $table->string('phone_support')->nullable();
            $table->string('email_developer')->nullable();
            $table->string('email_admin')->nullable();
            $table->string('email_info')->nullable();
            $table->string('email_support')->nullable();
            $table->text('description')->nullable();
            $table->string('address')->nullable();
            $table->string('box_office')->nullable();
            $table->string('url')->default('https://openmartgh.com');
            $table->string('author')->default('Amos Amissah <https://github.com/theonlyamos>');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_infos');
    }
}
