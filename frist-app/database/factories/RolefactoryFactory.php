<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RolefactoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id' => $this->faker->id,
            'name' => $this->faker->name,
            'Email' => $this->faker->unique()->safeEmail(),
            'gender' =>$this->faker->randomElement(['male','female']),
        ];
    }
}
