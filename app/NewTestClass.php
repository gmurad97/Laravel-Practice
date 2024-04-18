<?php

namespace App;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NewTestClass
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        Schema::create("", function (Blueprint $table) {
            $table->increments("id");
            $table->string("name");
            $table->string("");
            $table->string("")->nullable();
        });
    }
}
