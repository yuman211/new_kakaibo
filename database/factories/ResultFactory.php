<?php

namespace Database\Factories;

use App\Models\Result;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ResultFactory extends Factory
{
    protected $model = Result::class;

    public function definition(): array
    {
        return [
            'sum_all' => $this->faker->randomNumber(),
            'sum_01' => $this->faker->randomNumber(),
            'sum_02' => $this->faker->randomNumber(),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];
    }
}
