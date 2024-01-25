<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Dzialy;
use App\Models\Dostawcy;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produkty>
 */
class ProduktyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nazwa' => fake()->word(),
            'ilosc' => fake()->numberBetween(0, 100),
            'id_dzialy' => Dzialy::all()->random()->id,
            'id_dostawcy' => Dostawcy::all()->random()->id,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
