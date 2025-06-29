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
        Schema::create('detalle_requisicion', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_requisicion')->constrained('requisiciones');
            $table->foreignId('id_producto')->constrained('products');
            $table->decimal('cantidad', 16, 2)->default(0);
            $table->decimal('costo', 16, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_requisicion');
    }
};
