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
        Schema::table('container_updates', function (Blueprint $table) {
            // Remova essas colunas se já existirem
            if (!Schema::hasColumn('container_updates', 'client_name')) {
                $table->string('client_name')->after('id');
            }
            if (!Schema::hasColumn('container_updates', 'worker_name')) {
                $table->string('worker_name')->after('client_name');
            }
            if (!Schema::hasColumn('container_updates', 'analyst_name')) {
                $table->string('analyst_name')->after('update_date');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('container_updates', function (Blueprint $table) {
            //
        });
    }
};
