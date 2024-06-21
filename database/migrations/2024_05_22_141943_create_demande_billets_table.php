<?php

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
        Schema::create('demande_billets', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('motif');
            $table->string('ville_depart');
            $table->string('ville_destination');
            $table->date('date_depart');
            $table->date('date_retour');
            $table->string('Adresse');
            $table->string('statut');
            $table->foreignIdFor(User::class)->nullable()->constrained('users','id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande_billets');
    }
};