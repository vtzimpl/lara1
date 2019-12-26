<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->timestamps();
        $table->text('projimage')->nullable(); //IMAGE
        $table->char('projnbr', 100)->nullable(); //NUMBER
        $table->string('projname')->nullable();//NAME
        $table->char('projtype', 20)->nullable(); //TYPE
        $table->char('projstatus', 100)->nullable(); //STATUS
        $table->char('projmaker', 100)->nullable(); //MAKER
        $table->text('projdoc')->nullable(); //DOCUMENTS PATH
        $table->longText('projcomments')->nullable();//COMMENTS

        

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
