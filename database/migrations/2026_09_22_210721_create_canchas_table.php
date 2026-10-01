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
        Schema::create('canchas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 45);
            $table->string('descripcion', 255);
            $table->string('imagen', 255);
            $table->decimal('precio',10,2);
            $table->boolean('activa')->default(true);          
            $table->foreignId('persona_dni')
                ->constrained('persona');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('canchas');
    }
};
