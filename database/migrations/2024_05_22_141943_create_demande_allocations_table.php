<?php

use App\Models\AnneeAcademique;
use App\Models\AnneeEtude;
use App\Models\Diplome;
use App\Models\Filiere;
use App\Models\Pay;
use App\Models\User;
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
        Schema::create('demande_allocations', function (Blueprint $table) {
            $table->string('CodeDemandeAllocation')->primary();
            $table->string('type');
            $table->string('statut');
            $table->foreignIdFor(Pay::class, 'CodePays')->constrained('pays','CodePays');
            $table->foreignIdFor(Filiere::class, 'CodeFiliere')->constrained('filieres','CodeFiliere');
            $table->foreignIdFor(AnneeAcademique::class, 'CodeAnneeAcademique')->constrained('annee_academiques','CodeAnneeAcademique');
            $table->foreignIdFor(AnneeEtude::class, 'CodeAnneeEtude')->constrained('annee_etudes','CodeAnneeEtude');
            $table->foreignIdFor(Diplome::class, 'CodeDiplome')->constrained('diplomes','CodeDiplome');            
            $table->foreignIdFor(User::class)->nullable()->constrained('users','id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande_allocations');
    }
};