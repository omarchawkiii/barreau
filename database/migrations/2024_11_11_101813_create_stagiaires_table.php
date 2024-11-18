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
        Schema::create('stagiaires', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('nom_ar')->nullable();
            $table->string('prenom_ar')->nullable();
            $table->date('date_naiss');
            $table->string('nom_fr');
            $table->string('prenom_fr');
            $table->string('etat')->nullable();
            $table->date('date_serment')->nullable();
            $table->text('lieu_serm')->nullable();
            $table->text('adresse_domic')->nullable();
            $table->text('fonction')->nullable();
            $table->enum('sexe', ['male','femelle']);
            $table->date('depot')->nullable();
            $table->date('mutation')->nullable();
            $table->date('date_capa')->nullable();
            $table->string('ex_proff')->nullable();
            $table->string('scotab')->nullable();
            $table->string('sit_prof')->nullable();
            $table->date('datcosup')->nullable();
            $table->longText('lieu_nais_arb')->nullable();
            $table->longText('lieu_nais_fr')->nullable();
            $table->string('willaya_nais_fr')->nullable();
            $table->integer('tel')->nullable();
            $table->integer('fax')->nullable();
            $table->integer('mob')->nullable();
            $table->string('email');
            $table->integer('n_act_nais')->nullable();
            $table->string('nom_pere')->nullable();
            $table->string('nom_mere')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stagiaires');
    }
};
