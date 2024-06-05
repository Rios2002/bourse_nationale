<?php

use App\Models\AnneeAcademique;
use App\Models\AnneeEtude;
use App\Models\Filiere;
use App\Models\Pay;
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
        Schema::create('tauxes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Pay::class, 'CodePays')->constrained('pays','CodePays');
            $table->foreignIdFor(Filiere::class, 'CodeFiliere')->constrained('filieres','CodeFiliere');
            $table->foreignIdFor(AnneeEtude::class, 'CodeAnneeEtude')->constrained('annee_etudes','CodeAnneeEtude');
            $table->foreignIdFor(AnneeAcademique::class, 'CodeAnneeAcademique')->constrained('annee_academiques','CodeAnneeAcademique');
            $table->integer('taux');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tauxes');
    }
};
