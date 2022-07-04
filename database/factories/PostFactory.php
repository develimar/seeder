<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use LaraDev\Models\Category;
use Psy\Util\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\LaraDev\Models\Post>
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

        $title = $this->faker->sentence(10);
        return [
            'title' => $title,
            'slug' => \Illuminate\Support\Str::slug($title),
            'subtitle' => $this->faker->sentence(10),
            'description' => $this->faker->paragraph(5),
            'publish_at' => $this->faker->dateTime(),
            'category' => function(){
                return Category::factory()->create()->id;
                //return factory(Category::class)->create()->id;
            }
        ];
    }
}
