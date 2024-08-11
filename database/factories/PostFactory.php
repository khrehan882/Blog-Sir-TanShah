<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "user_id"=>$this->faker->numberBetween(1,20),
            "category_id"=>$this->faker->numberBetween(1,5),
            "title"=>$this->faker->realText(100),
            "content"=>$this->faker->realText(1000),
            "photo"=>" https://source.unsplash.com/random",
           
        ];
    }
}


