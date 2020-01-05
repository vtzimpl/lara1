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
        $table->char('proj1stordername', 150)->nullable(); //FIRST ORDER NAME
        $table->integer('projunits')->nullable(); //UNITS
        $table->date('proj1starrivaldate')->nullable(); //1 ST ARRIVAL DATE
        $table->date('projopeneddate')->nullable(); //DATE OPENED
        $table->text('projprimetargetmarket')->nullable(); //PRIME TARGET MARKET
        $table->text('projgraphics')->nullable(); //GRAPHICS
        $table->text('projpresentation')->nullable(); //PRESENTATION
        $table->text('projmaturityour')->nullable(); //MATURITY LEVEL AT OUR SIDE
        $table->text('projmaturitysupplier')->nullable(); //MATURITY LEVEL AT SUPPLIER'S SIDE(%)
        $table->date('projsampletargetdate')->nullable(); //SAMPLES TARGET DATE
        $table->date('projprodtargetdate')->nullable(); //PRODUCTION TARGET DATE
        $table->date('projpauseddate')->nullable(); //DATE PAUSE
        $table->longText('projreasonpaused')->nullable(); //REASON PAUSED
        $table->longText('projreasonrejected')->nullable(); //REASON REJECTED
        $table->date('projrejecteddate')->nullable(); //DATE REJECTED
        
       



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
