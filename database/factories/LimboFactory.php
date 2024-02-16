<?php

namespace Database\Factories;

use App\Models\Limbo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class LimboFactory extends Factory
{
    protected $model = Limbo::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
