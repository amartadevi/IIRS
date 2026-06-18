<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reasons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 191)->nullable();
            $table->mediumText('description')->nullable();
            $table->string('icon', 191)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reasons');
    }
};
