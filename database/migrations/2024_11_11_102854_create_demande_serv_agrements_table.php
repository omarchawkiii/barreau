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
        Schema::create('demande_serv_agrements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_agrement_id')->constrained('type_agrements')->cascadeOnDelete();
            $table->unsignedBigInteger('dosseir_id')->nullable();
            $table->foreignId('stagiaire_id')->constrained('stagiaires')->cascadeOnDelete();
            $table->date('depot');
            $table->string('nom');
            $table->bigInteger('id_maitre_de_stage')->nullable();
            $table->enum('status', ['encours', 'traitee', 'payer'])->default('encours');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande_serv_agrements');
    }
};
