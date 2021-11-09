<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->timestamp('date_envoie');
            $table->string('etat', 20);
            $table->string('remarques', 500);
            $table->unsignedBigInteger('manifestation_id');
            $table->unsignedBigInteger('coordonnateur_id');

            $table->foreign('manifestation_id')->references('id')->on('manifestations');
            $table->index('manifestation_id');

            $table->foreign('coordonnateur_id')->references('id')->on('coordonnateurs');
            $table->index('coordonnateur_id');
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
        Schema::dropIfExists('demandes');
    }
}
