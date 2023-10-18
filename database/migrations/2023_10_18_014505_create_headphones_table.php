<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadphonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headphones', function (Blueprint $table) {
            $table->string('id');
            $table->string('tid');
            $table->string('name');
            $table->string('genre');
            $table->string('hz');
            $table->string('spl');
            $table->string('oi');
            $table->string('weight');
            $table->string('ts');
            $table->string('price');
            $table->string('created_at');
            $table->string('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('headphones');
    }
}
