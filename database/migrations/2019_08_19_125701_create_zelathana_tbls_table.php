<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZelathanaTblsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zelathana_tbls', function (Blueprint $table) {
            // $table->increments('zelaId');
            // $table->string('zelaName', 100);

            // $table->increments('thanaId');
            // $table->string('thanaName', 100);

            // $table->string('upozelaName', 100);
            // $table->string('unionName', 100);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zelathana_tbls');
    }
}
