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
        $table->char('projnbr', 100); //NUMBER
        $table->string('projname');//NAME
        $table->char('projtype', 20); //TYPE
        $table->char('projstatus', 100); //STATUS
        $table->char('projmaker', 100); //MAKER
        $table->text('projdoc'); //DOCUMENTS PATH
        $table->longText('projcomments');//COMMENTS



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
