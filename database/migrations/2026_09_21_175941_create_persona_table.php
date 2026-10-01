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
        Schema::create('persona', function (Blueprint $table) {
            $table->string('dni', 25)->primary();
            $table->string('password', 255);
            $table->string('nombre', 45);
            $table->string('apellido',45);
            $table->string('correo', 255)->unique();
            $table->string('telefono', 20);
            $table->boolean('activo')->default(true);
            $table->foreignId('rol_id')
                ->constrained('rol');
            /**Laravel implementa el borrado lógico mediante la aplicación de softDeletes() en la migración y 
            el modelo, lo cual crea un campo llamado deleted_at que indica la fecha en la cual se ha 
            eliminado el registro. */
            $table->softDeletes();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persona');
    }
};
