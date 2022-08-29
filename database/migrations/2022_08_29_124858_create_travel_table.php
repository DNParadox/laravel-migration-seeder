<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel', function (Blueprint $table) {
            $table->id();
            // Stringhe per comprensione su DB
            $table->string('test', 12);
            $table->string('address', 100);
            // Rollback funzionante
            $table->string('test2', 50);
            $table->string('test3', 50);
            $table->string('test4', 50);

        

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
     

        Schema::dropIfExists('travel');
    }
}
