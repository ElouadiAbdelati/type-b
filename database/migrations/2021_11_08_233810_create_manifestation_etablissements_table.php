<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManifestationEtablissementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('manifestation_etablissements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('manifestation_id');
            $table->unsignedBigInteger('etablissement_id');

            $table->foreign('manifestation_id')->references('id')->on('manifestations');
            $table->index('manifestation_id');
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
        Schema::dropIfExists('manifestation_etablissements');
    }
}
