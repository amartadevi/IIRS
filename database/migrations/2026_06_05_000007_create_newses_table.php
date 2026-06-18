<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('newses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 191)->nullable();
            $table->mediumText('excerpt')->nullable();
            $table->longText('description')->nullable();
            $table->string('photo', 191)->nullable();
            $table->date('date')->nullable();
            $table->timestamps();
            $table->string('gallery', 191)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('newses');
    }
};
