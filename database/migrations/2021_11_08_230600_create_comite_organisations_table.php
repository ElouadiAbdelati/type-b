<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComiteOrganisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('comite_organisations', function (Blueprint $table) {
            $table->id();
            $table->string('nom',50);
            $table->string('prenom',50);
            $table->string('email',150);
            $table->string('tel',15);
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
        Schema::dropIfExists('comite_organisations');
    }
}
