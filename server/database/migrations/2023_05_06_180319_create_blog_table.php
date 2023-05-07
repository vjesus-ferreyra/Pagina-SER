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
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->integer('autor_id')->unsigned();
            $table->string('descripcion');
            $table->string('contenido');
            $table->unsignedInteger('multimedia_id');
            $table->timestamps();
            $table->foreign('autor_id')->references('id')->on('usuario');
            $table->foreign('multimedia_id')->references('id')->on('multimedia');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog');
    }
};
