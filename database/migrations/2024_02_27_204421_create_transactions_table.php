<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('nom_expediteur');
            $table->string('prenom_expediteur');
            $table->string('telephone_expediteur');
            $table->string('ville_origine');
            $table->string('nom_beneficiaire');
            $table->string('prenom_beneficiaire');
            $table->string('telephone_beneficiaire');
            $table->string('ville_destinaire');
            $table->decimal('montant', 10, 2); // Exemple: précision de 10 chiffres avec 2 décimales
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
        Schema::dropIfExists('transactions');
    }
}
