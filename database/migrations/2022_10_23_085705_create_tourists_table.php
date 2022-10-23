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
        Schema::create('tourists', function (Blueprint $table) {
            $table->id();
            $table->String('title');
            $table->String('logo')->nullable();
            $table->String('slider_two')->nullable();
            $table->String('slider_three')->nullable();
            $table->String('slider_four')->nullable();
            $table->String('tags');
            $table->longText('description');
            $table->longText('details');
            $table->String('price');
            $table->date('datetime')->nullable();
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
        Schema::dropIfExists('tourists');
    }
};