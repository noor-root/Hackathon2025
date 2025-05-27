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
    
    Schema::create('locals', function (Blueprint $table) {
        $table->id();
        $table->string('type');
        $table->integer('capacite');
        $table->decimal('prix', 8, 2); // par heure
        $table->string('location');
        $table->enum('status', ['En attente', 'Reservé', 'Disponible'])->default('Disponible');
        $table->timestamps();
    });
}

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locals');
    }
};
