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
        Schema::create('verification_boursiers', function (Blueprint $table) {
            $table->id();
            $table->integer('NumeroDeTable');
            $table->date('DateNaissance');
            $table->string('AnneeObtention');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verification_boursiers');
    }
};
