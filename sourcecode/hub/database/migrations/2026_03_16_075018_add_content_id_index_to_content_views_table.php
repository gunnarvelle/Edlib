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
        Schema::table('content_views', function (Blueprint $table) {
            $table->index('content_id');
        });
    }

    public function down(): void
    {
        Schema::table('content_views', function (Blueprint $table) {
            $table->dropIndex(['content_id']);
        });
    }
};
