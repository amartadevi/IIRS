<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('eventid');
            $table->string('eventtitle', 200)->nullable();
            $table->longText('description')->nullable();
            $table->string('image', 255)->nullable();
            $table->date('eventdate')->nullable();
            $table->timestamps();
            $table->integer('completed')->default(0);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
