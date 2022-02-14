<?php

namespace Database\Factories;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
    	return [
    	    'text' => $this->faker->sentence(),
            'time' => $this->faker->date()
    	];
    }
}
