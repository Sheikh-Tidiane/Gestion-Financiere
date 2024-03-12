<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('packs', function (Blueprint $table) {
        $table->id();
        $table->string('nom');
        $table->decimal('prix', 10, 2);
        $table->decimal('plafond', 15, 2);
        $table->timestamps();
    });

    // Insertion des packs
    DB::table('packs')->insert([
        ['nom' => 'Pack standard', 'prix' => 3000, 'plafond' => 1000000],
        ['nom' => 'Pack premium', 'prix' => 5000, 'plafond' => 5000000],
        ['nom' => 'Pack gold', 'prix' => 12000, 'plafond' => 10000000]
    ]);
  }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packs');
    }
}
