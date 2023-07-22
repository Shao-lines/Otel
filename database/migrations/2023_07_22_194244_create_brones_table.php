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
        Schema::create('brones', function (Blueprint $table) {
            $table->id();
            $table->string('entry');
            $table->string('departure');
            $table->string('person');
            $table->string('kid');
            $table->string('nomer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brones');
    }
};
