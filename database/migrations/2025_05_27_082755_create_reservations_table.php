<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('reservations', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        $table->foreignId('local_id')->constrained('locals')->onDelete('cascade');
        $table->date('date');
        $table->time('heure');
        $table->integer('duree'); // en minutes ou heures
        $table->enum('statut', ['En attente', 'Confirmé', 'Annulé'])->default('En attente');
        $table->foreignId('planning_id')->nullable()->constrained('plannings')->onDelete('set null');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
