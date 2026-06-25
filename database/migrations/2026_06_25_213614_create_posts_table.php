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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string("title", length: 50); // Not null by default
            $table->text("content");
            $table->enum("is_active", ["Yes","No"])->default("Yes"); // create enum
            $table->timestamps(); // creates "created_at" and "updated_at" - confirm that this type is datetime
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
