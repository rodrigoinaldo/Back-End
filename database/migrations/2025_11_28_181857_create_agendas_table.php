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
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->string('descricao')->nullable();

            $table->foreignId('medico_id');
            $table->foreign('medico_id')->references('id')->on('medicos')->onDelete('cascade');

            $table->foreignId('local_atendimento_id');
            $table->foreign('local_atendimento_id')->references('id')->on('local_atendimentos');

            $table->foreignId('tipo_consulta_id');
            $table->foreign('tipo_consulta_id')->references('id')->on('tipo_consultas')->onDelete('cascade');

            $table->foreignId('horario_id');
            $table->foreign('horario_id')->references('id')->on('horarios')->onDelete('cascade');

            $table->boolean('status')->default(true);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendas');
    }
};
