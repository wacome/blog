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
        Schema::create('one_liners', function (Blueprint $table) {
            $table->id();
            $table->string('content');
            $table->timestamp('published_at')->nullable();
            $table->string('source');
            $table->string('author')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('one_liners');
    }
};
