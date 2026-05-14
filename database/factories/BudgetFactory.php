<?php

namespace Database\Factories;

use App\Models\Budget;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Budget>
 */
class BudgetFactory extends Factory
{
    public array $names = [
        'Housing',
        'Transportation',
        'Food provided',
        'Utilities',
        'Clothing',
        'Healthcare',
        'Insurance',
        'Personal Spending',
        'Debt',
        'Savings',
        'Education',
        'Entertainment',
        'Groceries',
        'Restaurants',
        'Travel',
        'Gifts',
        'Donations',
        'Investments',
        'Taxes',
        'Childcare',
        'Pets',
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'name' => $this->faker->randomElement($this->names),
            'amount' => $this->faker->numberBetween(100, 10000),
            'type' => $this->faker->randomElement([
                'reset',
                'rollover',
            ]),
        ];
    }
}
