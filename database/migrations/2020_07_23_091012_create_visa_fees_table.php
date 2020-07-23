<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisaFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visa_fees', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->integer('category')->nullable();
            $table->string('entry')->nullable();
            $table->string('type')->nullable();
            $table->string('fee')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visa_fees');
    }
}
