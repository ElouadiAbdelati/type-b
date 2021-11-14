<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoutienSollicitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('soutien_sollicites', function (Blueprint $table) {
            $table->id();
            $table->integer('nbr');
            $table->double('montant');
            $table->string('remarques',200);
            $table->unsignedBigInteger('manifestation_id');
            $table->unsignedBigInteger('frais_couvert_id');

            $table->foreign('manifestation_id')->references('id')->on('manifestations') ->onDelete('cascade');
            $table->index('manifestation_id');
            $table->foreign('frais_couvert_id')->references('id')->on('frais_couverts') ->onDelete('cascade');
            $table->index('frais_couvert_id');
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
        Schema::dropIfExists('soutien_sollicites');
    }
}
