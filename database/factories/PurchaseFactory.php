<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PurchaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'owner' => \App\Models\User::factory(),
            'purchase_name' => $this->faker->word(),
            'installment_purchase' => $this->faker->boolean(),
            'installments' => $this->faker->optional()->numberBetween(1, 12),
            'cost' => $this->faker->numberBetween(1000, 100000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
