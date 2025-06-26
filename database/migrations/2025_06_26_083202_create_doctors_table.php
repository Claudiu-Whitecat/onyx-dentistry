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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('job_title');
            $table->text('short_description')->nullable();
            $table->string('image')->nullable(); // Assuming it's a path/URL
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->longText('markdown_text')->nullable();
            $table->timestamps();
        });

        Schema::create('doctor_price_category', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id')->constrained('doctors')->onDelete('cascade');
            $table->foreignId('price_category_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
        Schema::dropIfExists('doctor_price_category');
    }
};
