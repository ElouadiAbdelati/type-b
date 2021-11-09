<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntiteOrganisatricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('entite_organisatrices', function (Blueprint $table) {
            $table->id();
            $table->string('nom',100);
            $table->text('responsable');
            $table->unsignedBigInteger('etablissement_id');

            $table->foreign('etablissement_id')->references('id')->on('etablissements');
            $table->index('etablissement_id');
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
        Schema::dropIfExists('entite_organisatrices');
    }
}
