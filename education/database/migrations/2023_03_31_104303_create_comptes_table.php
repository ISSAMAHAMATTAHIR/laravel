<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comptes', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->string('parcours');
            $table->string('lieu');
            $table->date('date');
            $table->string('genre');
            $table->float('bac');
            $table->string('fichier');
            $table->float('l1');
            $table->string('fichier1');
            $table->float('l2');
            $table->string('fichier2');
            $table->float('l3');
            $table->string('fichier3');
            $table->float('moyenne');
            $table->string('filiere');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comptes');
    }
};
