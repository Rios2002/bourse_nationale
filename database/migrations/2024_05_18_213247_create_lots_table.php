<?php

use App\Models\Pv;
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
        Schema::create('lots', function (Blueprint $table) {
            $table->id();
            // $table->foreignIdFor(Pv::class, 'CodePV')->constrained('pvs','CodePV');
            $table->integer('CodePV');
            $table->foreign('CodePV')->references('CodePV')->on('pvs')->onDelete('restrict');
            $table->integer('Numero');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lots');
    }
};
