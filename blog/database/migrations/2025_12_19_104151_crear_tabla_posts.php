<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();              // ID autonumérico
            $table->string('titulo');  // Título del post
            $table->text('contenido'); // Contenido del post
            $table->timestamps();      // created_at y updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
