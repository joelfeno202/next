<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('nomProduit');
            $table->string('image');
            $table->integer('prix');
            $table->string('categorie');
            $table->string('selectt')->default('0');
            $table->mediumText('description');
            $table->string('vu')->default('0');
            $table->integer('quatite')->default(0);
            $table->integer('nombre');
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
        Schema::dropIfExists('produits');
    }
}