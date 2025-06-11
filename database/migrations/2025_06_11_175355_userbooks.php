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
        if(
            Schema::hasTable('users') && 
            Schema::hasTable('story_roles') &&
            Schema::hasTable('books')
        ) {
            Schema::create('users_books', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('user_id');
                $table->unsignedBigInteger('role_id');
                $table->unsignedBigInteger('book_id');
                $table->string('description', 100);
                $table->timestamps();

                $table->foreign('user_id')->references('id')->on('users');
                $table->foreign('role_id')->references('id')->on('story_roles');
                $table->foreign('book_id')->references('id')->on('books');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_books');
    }
};
