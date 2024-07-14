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
        Schema::create('attensions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('flag')->nullable();
            $table->string('nameImage')->nullable();
            $table->string('embasy_phone')->nullable();
            $table->string('section_1')->nullable();
            $table->text('section_2_text')->nullable();
            $table->text('section_2_image')->nullable();
            $table->text('section_2_alt')->nullable();
            $table->text('section_3_text')->nullable();
            $table->text('section_3_image')->nullable();
            $table->text('section_3_alt')->nullable();
            $table->text('section_4_text')->nullable();
            $table->text('section_4_alt')->nullable();
            $table->text('section_4_image')->nullable();
            $table->text('section_5_text')->nullable();
            $table->text('section_5_image')->nullable();
            $table->text('section_5_alt')->nullable();
            $table->text('section_6_text')->nullable();
            $table->text('section_6_image')->nullable();
            $table->text('section_6_alt')->nullable();
            $table->text('section_7_text')->nullable();
            $table->text('address')->nullable();
            $table->text('description')->nullable();
            $table->text('section_7_image')->nullable();
            $table->text('section_7_alt')->nullable();
            $table->text('section_9_text')->nullable();
            $table->text('section_10_text')->nullable();
            $table->text('faq')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('canonical')->nullable();
            $table->string('nav_bar')->nullable();
            $table->string('nav_bar_name')->nullable();
            $table->enum('status', ['A', 'D']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attensions');
    }
};
