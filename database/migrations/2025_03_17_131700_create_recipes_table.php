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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->integer('serving')->nullable();
            $table->string('language')->nullable();
            $table->json('images')->nullable();
            $table->text('description')->nullable();
            $table->enum('difficulty', ["einfach","mittel","schwierig"])->nullable();
            $table->enum('diet', ["vegan","vegetarisch"])->nullable();
            $table->enum('time', ["Bis 30 Minuten","Bis 60 Minuten","Bis 2 Stunden","Mehr als 2 Stunden"])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
