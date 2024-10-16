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
        Schema::create('container_updates', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('worker_name');
            $table->date('update_date');
            $table->string('analyst_name');
            $table->string('status')->default('success');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('container_updates');
    }
};
