<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\subcategory>
 */
class SubCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cate_id' => rand(1,10),
            'name' => $this->faker->realText(15),
            'slug' => Str::slug($this->faker->realText(15)),
            'user_id' => 1,
            'status' => 'publish'
        ];
    }
}
