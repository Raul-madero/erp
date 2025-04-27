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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 150);
            $table->string('nombre_corto', 50)->nullable();
            $table->string('rfc', 13);
            $table->string('regimen_fiscal', 45)->nullable();
            $table->string('telefono', 10)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('celular', 10)->nullable();
            $table->string('sitio_web', 100)->nullable();
            $table->string('ventas', 100)->nullable();
            $table->string('correo_ventas', 100)->nullable();
            $table->string('otro_contacto', 100)->nullable();
            $table->string('correo_otro_contacto', 100)->nullable();
            $table->string('contabilidad', 100)->nullable();
            $table->string('correo_contabilidad', 100)->nullable();
            $table->string('calle', 100);
            $table->string('numero_exterior', 10);
            $table->string('numero_interior', 10)->nullable();
            $table->string('colonia', 100);
            $table->string('municipio', 100);
            $table->string('estado', 100);
            $table->string('codigo_postal', 10);
            $table->string('giro', 100);
            $table->string('contrato', 100);
            $table->date('vencimiento_contrato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};
