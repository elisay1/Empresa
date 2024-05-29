<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * TODO: Run the migrations.
     * php artisan migrate
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->char('direccion',50);
            $table->string('email',30)->unique();
            //$table->string('direccion')->after('direccion')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     * TODO: Para eliminar todas las migraciones creadas ejecutamos en el terminal del proyecto:
     * php artisan migrate:rollback
     */

     /**
     * Reverse the migrations.
     * TODO: Para eliminar la última migración creada ejecutamos en el terminal del proyecto:
    *  php artisan migrate:rollback --step=1
    * 1 porque es la ultima migración que queremos, pero puede ser 2, 3, etc
     */

     /**
     * Reverse the migrations.
     * TODO: Comando migrate:fresh
        *Vamos a suponer que queremos agregar
        *el campo phone a la tabla users.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        //migramos un campo especifico sin malograr los otros datos
        //Schema::table('users', function (Blueprint $table) {
         //   $table->dropColumn('direccion');
        //});
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
