<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('frontuser_id');
            $table->string('card_number');
            $table->date('expiration_date');
            $table->decimal('montant');
            $table->string('cvv');
            $table->timestamps();

            // Ajoute une contrainte de clé étrangère
            $table->foreign('frontuser_id')->references('id')->on('frontusers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
}
