<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('email');
            $table->string('contact')->nullable(); // Téléphone/WhatsApp
            $table->string('entreprise')->nullable();
            $table->text('message');
            $table->timestamps(); // Crée created_at et updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
