<?php

use App\Models\Universite;
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
        Schema::create('etablissements', function (Blueprint $table) {
            $table->string('CodeEtablissement', 50)->unique();
            $table->string('LibelleEtablissement');
            $table->foreignIdFor(Universite::class, 'CodeUniversite')->constrained('universites','CodeUniversite');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etablissements');
    }
};