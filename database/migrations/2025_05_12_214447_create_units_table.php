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
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('no_unidad')->unique();
            $table->string('socio')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('placas', 10)->nullable();
            $table->string('no_serie')->nullable();
            $table->integer('year')->nullable();
            $table->string('tipo_combustible')->nullable();
            $table->string('no_poliza')->nullable();
            $table->string('aseguradora')->nullable();
            $table->date('inicio_poliza')->nullable();
            $table->date('fin_poliza')->nullable();
            $table->string('tarjeta_circulacion')->nullable();
            $table->date('vence_tcirculacion')->nullable();
            $table->date('fecha_entregadoc')->nullable();
            $table->decimal('rendimiento_estandar', 4, 2)->default(0);
            $table->string('notas')->nullable();
            $table->string('archivo')->nullable();
            $table->string('archivo_tarjeta')->nullable();
            $table->string('archivo_permiso')->nullable();
            $table->integer('estatus')->default(1);
            $table->integer('id_edit')->nullable()->constrained('users');
            $table->foreignId('id_usuario')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('units');
    }
};
