<?php

namespace Database\Factories;

use App\Models\Persons;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Persons>
 */
class PersonsFactory extends Factory
{
    protected $model = Persons::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'sex' => $this->faker->randomElement(['men', 'women']),
            'phone' => $this->faker->phoneNumber(),
            'address_id' => $this->faker->numberBetween(1, 5),
            'created_at' => $this->faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
            'updated_at' => $this->faker->dateTime($max = 'now', $timezone = date_default_timezone_get())

        ];
    }
}
