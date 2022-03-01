<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{

    public function up() : void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',120);
            $table->text('description')->nullable();
            $table->unsignedInteger('price')->default(0);
            $table->timestamps();
        });
    }


    public function down() : void
    {
        Schema::dropIfExists('products');
    }
}
