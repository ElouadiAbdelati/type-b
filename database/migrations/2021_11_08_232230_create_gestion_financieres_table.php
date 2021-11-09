<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGestionFinancieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('gestion_financieres', function (Blueprint $table) {
            $table->id();
            $table->string('libelle',100);
            $table->text('information');
            $table->unsignedBigInteger('manifestation_id');

            $table->foreign('manifestation_id')->references('id')->on('manifestations');
            $table->index('manifestation_id');
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
        Schema::dropIfExists('gestion_financieres');
    }
}
