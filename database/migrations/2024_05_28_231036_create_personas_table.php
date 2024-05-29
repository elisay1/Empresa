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
        Schema::create('personas', function (Blueprint $table) {
            $table->bigInteger('nPerCodigo', 20);
            $table->char('cPerApellido', 50)->nullable();
            $table->char('nPerNombre', 50)->nullable();
            $table->string('nPerDireccion', 100)->nullable();
            $table->date('nPerFecNac');
            $table->integer('nPerEdad');
            $table->decimal('nPerSueldo', 6,2);
            $table->string('cPerRnd', 50);
            $table->char('nPerEstado' ,1)->default(1);
            $table->string('remenber_token', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
