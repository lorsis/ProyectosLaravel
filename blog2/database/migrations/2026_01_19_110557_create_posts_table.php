<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();                // id autonumèric
            $table->string('titulo');    // títol
            $table->text('contenido');   // contingut
            $table->timestamps();        // created_at i updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
