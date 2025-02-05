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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 500);
            $table->string('slug', 500);
            $table->string('description')->nullable(); //nullable permite que en la columna se usen valores null
            $table->string('content')->nullable(); //nullable permite que en la columna se usen valores null
            $table->string('image')->nullable(); //nullable permite que en la columna se usen valores null
            $table->enum('posted', ['yes', 'not'])->default('not'); // valor por defecto 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
