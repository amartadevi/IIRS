<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 191)->nullable();
            $table->string('duration', 50)->nullable();
            $table->string('credits', 50)->nullable();
            $table->longText('mission')->nullable();
            $table->longText('objectives')->nullable();
            $table->timestamps();
            $table->string('image', 191)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
