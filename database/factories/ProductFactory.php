<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $nameProdct = $this->faker->words(asText:true);
        return [
            'name' => $nameProdct,
            'description'=>$this->faker->sentence,
            'price' => $this->faker->randomDigitNotZero(),
            'amount' =>$this->faker->randomDigitNotZero(),
            'slug' => Str::slug($nameProdct)
        ];
    }
}
