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
        Schema::table('newses', function (Blueprint $table) {
            $table->string('type', 100)->nullable()->after('title');
        });

        Schema::table('programs', function (Blueprint $table) {
            $table->longText('description')->nullable()->after('credits');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('newses', function (Blueprint $table) {
            $table->dropColumn('type');
        });

        Schema::table('programs', function (Blueprint $table) {
            $table->dropColumn('description');
        });
    }
};
