<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoordonnateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coordonnateurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom',50);
            $table->string('prenom',50);
            $table->string('profession',50);
            $table->string('email',150)->unique();
            $table->string('tel',15);
            $table->string('fax',15);
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
        Schema::dropIfExists('coordonnateurs');
    }
}
