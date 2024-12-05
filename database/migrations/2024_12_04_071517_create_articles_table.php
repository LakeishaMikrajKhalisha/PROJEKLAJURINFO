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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->uuid('article_id')->unique();
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('content');
            $table->string('first_image')->nullable();
            $table->enum('status', ['draft', 'published'])->default('draft');
            $table->bigInteger('category_id')->unsigned();
            $table->uuid('user_id');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
