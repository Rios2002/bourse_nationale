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
        Schema::create('demande_paiements', function (Blueprint $table) {
            $table->id();
            $table->string('CodeBanque');
            $table->string('CodeGuichet');
            $table->string('NumCompte');
            $table->string('CleRIB');
            $table->string('IBAN');
            $table->string('CodeSwift');
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
        Schema::dropIfExists('demande_paiements');
    }
};