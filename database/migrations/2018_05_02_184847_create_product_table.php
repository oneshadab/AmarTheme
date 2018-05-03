<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('product',function (Blueprint $table)
        {
            $table->increments('product_id');
            $table->string('product_name');
            $table->string('product_description');
            $table->enum('product_status', ['available', 'unavailable']);
            $table->float('product_price');
        });
        Schema::table('product', function (Blueprint $table) {
            $table->unsignedInteger('developer_id');
            $table->foreign('developer_id')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('product');
    }
}
