<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManifestationContributeursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('manifestation_contributeurs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('manifestation_id');
            $table->unsignedBigInteger('contributeur_id');

            $table->foreign('manifestation_id')->references('id')->on('manifestations') ->onDelete('cascade');
            $table->index('manifestation_id');
            $table->foreign('contributeur_id')->references('id')->on('contributeurs') ->onDelete('cascade');
            $table->index('contributeur_id');
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
        Schema::dropIfExists('manifestation_contributeurs');
    }
}
