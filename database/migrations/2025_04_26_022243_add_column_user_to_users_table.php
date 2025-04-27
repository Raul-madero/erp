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
        Schema::table('users', function (Blueprint $table) {
            //
            // Add the new column to the users table
            $table->string('user')->after('name');
            $table->integer('status')->after('password')->default(1);
            $table->integer('role')->after('status')->notNullable()->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            // Drop the new column from the users table
            $table->dropColumn('user');
            $table->dropColumn('status');
            $table->dropColumn('role');
        });
    }
};
