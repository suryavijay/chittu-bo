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
        Schema::create('group_count', function (Blueprint $table) {
            $table->GROUP_ID();
            $table->string('GROUP_NAME');
            $table->string('GROUP_COUNT');
            $table->string('USER_ID');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group_count');
    }
};
