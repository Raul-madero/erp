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
        Schema::create('detalle_impuesto_requisicion', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_requisicion')->constrained('requisiciones');
            $table->decimal('subtotal', 16, 2)->default(0);
            $table->decimal('iva', 16, 2)->default(0);
            $table->decimal('total', 16, 2)->default(0);
            $table->decimal('isr', 16, 2)->default(0);
            $table->decimal('ieps', 16, 2)->default(0);
            $table->decimal('otros_impuestos', 16, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_impuesto_requisicion');
    }
};
