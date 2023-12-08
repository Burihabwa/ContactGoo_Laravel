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
        Sche+ma::create('contacts', function (Blueprint $table) {
            $table->id();
            $table ->string('nom');
            $table ->string('prenom');
            $table ->string('entreprise');
            $table ->string('email');
            $table ->string('tel');
            $table ->string('description');
            $table ->string('profil');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
