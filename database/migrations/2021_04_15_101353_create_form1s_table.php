<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form1s', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('fathersname')->nullable();
            $table->string('address')->nullable();
            $table->string('area')->nullable();
            $table->string('boundaries')->nullable();
            $table->string('reference')->nullable();
            $table->string('treespecies')->nullable();

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
        Schema::dropIfExists('form1s');
    }
}
