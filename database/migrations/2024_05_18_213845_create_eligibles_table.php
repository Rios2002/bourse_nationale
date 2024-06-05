<?php

use App\Models\AnneeAcademique;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('eligibles', function (Blueprint $table) {
            $table->integer('Num_table')->primary();
            $table->foreignIdFor(AnneeAcademique::class, 'CodeAnneeAcademique')->constrained('annee_academiques','CodeAnneeAcademique');
            $table->string('Nom');
            $table->string('Prenoms');
            $table->integer('Numero');
            $table->enum('Sexe', ['Masculin', 'Feminin', 'Autre']);
            $table->string('Serie');
            $table->string('LieuNaissance');
            $table->double('Moyenne');
            $table->string('Mention');
            $table->date('DateNaissance');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eligibles');
    }
};
