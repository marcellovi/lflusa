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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title')->index();
            $table->enum('type', ['messages.sell', 'messages.rent', 'messages.study']);
            $table->enum('condition', ['new','used'])->default('new');
            $table->integer('edition')->nullable();
            $table->decimal('price',7,2)->default(0.0);
            $table->bigInteger('copies')->default(1);
            $table->text('description')->nullable();
            $table->year('published')->nullable();
            $table->boolean('status')->default(true);
            $table->string('cover_image')->nullable();
            $table->integer('spirit_id')->nullable();
            $table->integer('language_id')->nullable();
            $table->foreignId('publisher_id')->constrained('publishers');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
