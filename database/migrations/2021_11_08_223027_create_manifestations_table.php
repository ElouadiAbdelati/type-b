<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManifestationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('manifestations', function (Blueprint $table) {
            $table->id();
            $table->string('intitule', 100);
            $table->string('type', 100);
            $table->string('etendue', 100);
            $table->string('lieu', 100);
            $table->string('site_web', 100)->nullable();
            $table->string('agence_organisatrice', 100)->nullable();
            $table->text('partenaires');
            $table->integer('nbr_participants_prevus');
            $table->dateTime('date_debut');
            $table->dateTime('date_fin');
            $table->unsignedBigInteger('entite_organisatrice_id');

            $table->foreign('entite_organisatrice_id')->references('id')->on('entite_organisatrices');
            $table->index('entite_organisatrice_id');
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
        Schema::dropIfExists('manifestations');
    }
}
