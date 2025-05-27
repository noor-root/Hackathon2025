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
    Schema::create('facturations', function (Blueprint $table) {
        $table->id();
        $table->foreignId('reservation_id')->constrained('reservations')->onDelete('cascade');
        $table->decimal('montant', 8, 2);
        $table->date('date_creation');
        $table->string('file_path');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturations');
    }
};
