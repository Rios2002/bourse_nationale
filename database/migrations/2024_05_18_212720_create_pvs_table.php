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
        Schema::create('pvs', function (Blueprint $table) {
            $table->integer('CodePV')->primary();
            $table->string('Reference_PV');
            $table->date('DateDebutSession');
            $table->date('DateFinSession');
            $table->integer('AnneeCivile');
            $table->string('NoteBasPage');
            $table->date('DateTransmissionListe');
            $table->string('RefLettreTransmissionListe')->nullable();
            $table->enum('statut', ['OUVERT', 'CLOTURE']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pvs');
    }
};
