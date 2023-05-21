<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ajaxs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('price',8,2);
            $table->integer('quantity');
            $table->text('description');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ajaxs');
    }

/*

            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('activation_key')->nullable();
            $table->timestamps();

*/


};
