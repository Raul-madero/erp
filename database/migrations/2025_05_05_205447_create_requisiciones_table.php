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
        Schema::create('requisiciones', function (Blueprint $table) {
            $table->id();
            $table->integer('no_requisicion')->unique();
            $table->date('fecha');
            $table->date('fecha_requiere');
            $table->string('tipo_requisicion');
            $table->string('observaciones')->nullable();
            $table->decimal('cant_autorizada', 16, 2)->default(0);
            $table->string('firma_autoriza')->nullable();
            $table->string('motivo_cancela')->nullable();
            $table->integer('estatus')->default(1);
            $table->foreignId('id_almacen')->constrained('almacen');
            $table->foreignId('id_departamento')->constrained('departamento');
            $table->foreignId('id_usuario')->constrained('users');
            $table->foreignId('id_usuario_edita')->nullable()->constrained('users');
            $table->foreignId('id_usuario_cancela')->nullable()->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requisiciones');
    }
};
