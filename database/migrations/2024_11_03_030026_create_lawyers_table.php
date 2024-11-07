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
        Schema::create('lawyers', function (Blueprint $table) {
            $table->id();
            $table->string('code', 255);
            $table->string('nom_arb', 255);
            $table->string('prenom_arb', 255);
            $table->date('date_naiss');
            $table->string('nom_fr', 255);
            $table->string('prenom_fr', 255);
            $table->string('etat', 255);
            $table->date('date_serment')->nullable();
            $table->string('lieu_serm', 255)->nullable();
            $table->string('grade', 255)->nullable();
            $table->string('tribunal', 255)->nullable();
            $table->string('adresse_prof_arb', 255)->nullable();
            $table->string('commune', 255)->nullable();
            $table->string('willaya', 255)->nullable();
            $table->string('adresse_fr', 255)->nullable();
            $table->date('fin_contrat_local')->nullable();
            $table->date('date_expir_carte')->nullable();
            $table->string('local', 255)->nullable();
            $table->string('adresse_domic', 255)->nullable();
            $table->string('majles', 255)->nullable();
            $table->string('fonction', 255)->nullable();
            $table->string('sexe', 255)->nullable();
            $table->string('depot', 255)->nullable();
            $table->string('mutation', 255)->nullable();
            $table->date('date_capa')->nullable();
            $table->string('ex_proff', 255)->nullable();
            $table->string('scotab', 255)->nullable();
            $table->string('sit_prof', 255)->nullable();
            $table->date('date_reglement')->nullable();
            $table->date('datcosup')->nullable();
            $table->string('lieu_nais_arb', 255)->nullable();
            $table->string('lieu_nais_fr', 255)->nullable();
            $table->string('willaya_nais_fr', 255)->nullable();
            $table->date('fin_carte_prof')->nullable();
            $table->string('tel', 255)->nullable();
            $table->string('fax', 255)->nullable();
            $table->string('mob', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('num_act_nais', 255)->nullable();
            $table->string('nom_pere', 255)->nullable();
            $table->string('nom_mere', 255)->nullable();
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lawyers');
    }
};
