<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\PaymentMethod;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Membership>
 */
class MembershipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'concept' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'amount' => $this->faker->randomFloat(2, 100, 1000),
            'currency' => $this->faker->currencyCode(),
            'frequency' => $this->faker->word(),
            'payment_date' => $this->faker->date(),
            'next_payment_date' => $this->faker->date(),
            'category_id' => Category::factory(),
            'payment_method_id' => PaymentMethod::factory(),
            'user_id' => User::factory(),
        ];
    }
}
