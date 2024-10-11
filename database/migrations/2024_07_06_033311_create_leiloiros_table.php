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
        Schema::create('leiloeiro', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique();
            $table->string('nome');
            $table->string('email');
            $table->date('nascido_em');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leiloeiro');
    }
};
