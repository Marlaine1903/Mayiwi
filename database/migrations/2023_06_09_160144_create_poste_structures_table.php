<?php

use App\Models\Pointage;
use App\Models\Poste;
use App\Models\Structure;
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
        Schema::create('poste_structures', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Poste::class);
            $table->foreignIdFor(Structure::class);
            $table->foreignIdFor(Pointage::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poste_structures');
    }
};
