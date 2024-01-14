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
        Schema::create('form_data', function (Blueprint $table) {
            $table->id();
            $table->string('task_title');
            $table->string('task_description');
            $table->string('task_startDate')->nullable();
            $table->string('task_deadline')->nullable();
            $table->string('select_maping')->nullable();
            $table->string('select_priority')->nullable();
            $table->string('select_user')->nullable();
            $table->string('task_remarks')->nullable();
            $table->string('task_links')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_data');
    }
};
