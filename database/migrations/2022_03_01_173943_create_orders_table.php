<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up() : void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name',80);
            $table->string('customer_email',120);
            $table->string('customer_mobile',40);
            $table->string('status',20)->default('CREATED')->nullable();
            $table->unsignedBigInteger('product_id');
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    public function down() : void
    {
        Schema::dropIfExists('orders');
    }
}
