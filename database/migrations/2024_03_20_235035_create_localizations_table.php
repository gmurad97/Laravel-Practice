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
        Schema::create('localizations', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique("key_index");
            $table->longText("az")->nullable(); //why nullable? => for adding new language
            $table->longText("ru")->nullable(); //why nullable? => for adding new language
            $table->string("en")->nullable(); //why nullable? => for adding new language
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('localizations');
    }
};
