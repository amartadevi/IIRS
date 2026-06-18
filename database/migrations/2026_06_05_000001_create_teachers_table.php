<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 192);
            $table->string('designation', 192);
            $table->string('photo', 192)->nullable();
            $table->integer('sort_order')->default(1);
            $table->string('qualifications', 255)->nullable();
            $table->longText('description')->nullable();
            $table->longText('current_positions')->nullable();
            $table->longText('education')->nullable();
            $table->longText('experience')->nullable();
            $table->longText('publications')->nullable();
            $table->longText('awards')->nullable();
            $table->string('email', 192)->nullable();
            $table->string('contact_number', 100)->nullable();
            $table->string('code', 50)->nullable();
            $table->string('department', 192)->nullable()->default('Electrical Engineering');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
