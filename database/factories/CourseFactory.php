<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Course::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'price' => $this->faker->numberBetween(1000, 5000),
            'image' => $this->faker->imageUrl(640, 480, 'cats'),
        ];
    }
}
