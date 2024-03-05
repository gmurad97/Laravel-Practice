<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title"=> fake()->firstName(),
            "category_id"=> fake()->randomDigit(),
            "is_published"=> fake()->boolean(50),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),
        ];
    }
}
