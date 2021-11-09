<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFraisCouvertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frais_couverts', function (Blueprint $table) {
            $table->id();
            $table->string('libelle',100);
            $table->string('forfait',100);
            $table->string('limite',100);
            $table->text('description');
            $table->text('remarques');
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
        Schema::dropIfExists('frais_couverts');
    }
}
