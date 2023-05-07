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
        Schema::create('perfil', function (Blueprint $table) {
            $table->id();
            $table->integer('usr_id')->unsigned();
            $table->unsignedBigInteger('img_id'); // referencciar a la tabla multimedia en vez de un url normal
            $table->string('desc_perfil');
            $table->timestamps();
            $table->foreign('img_id')->references('id')->on('multimedia');
            $table->foreign('usr_id')->references('id')->on('usuario');
            // $table->foreign('img')->references('id')->on('multimedia');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perfil');
    }
};
