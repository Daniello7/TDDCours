<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
        ];
    }

    public function released(Carbon $date = null): self
    {
        return $this->state(
            fn(array $attributes) => ['released_at' => $date ?? Carbon::now()]
        );
    }
}
