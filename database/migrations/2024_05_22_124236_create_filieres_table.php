<?php

use App\Models\Etablissement;
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
        Schema::create('filieres', function (Blueprint $table) {
            $table->string('CodeFiliere', 50)->unique();
            $table->string('LibelleFiliere');
            $table->foreignIdFor(Etablissement::class, 'CodeEtablissement')->constrained('etablissements','CodeEtablissement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filieres');
    }
};