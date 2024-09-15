<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('category_id');
            $table->double('price');
            $table->longText('description');
            $table->string('condition'); // new or used
            $table->string('type'); // sell, buy or exchange
            $table->boolean('status'); // publish or not
            $table->string('photo');
            $table->string('owner_name');
            $table->string('phone_no');
            $table->text('address');
            $table->text('latitude_logitude');
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
        Schema::dropIfExists('products');
    }
};
