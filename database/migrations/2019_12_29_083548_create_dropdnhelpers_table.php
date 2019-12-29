<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDropdnhelpersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dropdnhelpers', function (Blueprint $table) {
            $table->bigIncrements('id');
           // $table->timestamps();
           $table->string('labelname')->nullable();//name
           $table->text('optionsvalue')->nullable(); //dropdown values

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dropdnhelpers');
    }
}
