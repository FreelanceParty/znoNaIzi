<?php

namespace Database\Factories;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    protected $model = Subject::class;
    /**** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(1),
            'number_in_order' => $this->faker->randomNumber(3),
        ];
    }
}
