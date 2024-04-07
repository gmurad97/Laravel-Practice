<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('localization', function (Blueprint $table) {
            $table->id();
            $table->string('key')->nullable(false)->comment('dynamic key localization');
            $table->string("en")->nullable(false);
            $table->string("ru")->nullable(false);
            $table->string("az")->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('localization');
    }
};
