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
         if(Schema::hasTable('books')) {
            Schema::create('book_chapters', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('book_id');
                $table->string('title', 100);
                $table->string('description', 250);
                $table->text('chapter');
                $table->timestamps();

                $table->foreign('book_id')->references('id')->on('books');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_chapters');
    }
};
