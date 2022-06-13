<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class JelasFactory extends Factory
{
    /* *
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title" => $this->faker->name(),
            "desc" => $this->faker->text($maxNbChars = 200),
            "tag" => $this->faker->randomElement([
                "toplo predjelo",
                "hladno predjelo",
                "juha",
                "glavno jelo",
                "desert"
            ]),
            "created_at" => $this->faker->dateTime(),
            "updated_at" => $this->faker->dateTime()
        ];
    }
}
