<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpenDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('open_days', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("company_id");
            $table->string("monday");
            $table->string("tuesday");
            $table->string("wednesday");
            $table->string("thursday");
            $table->string("friday");
            $table->string("saturday");
            $table->string("sunday");
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
        Schema::dropIfExists('open_days');
    }
}
