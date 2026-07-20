<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence();
        return [
            'title' => $title,
            'slug' => \Illuminate\Support\Str::slug($title),
            'excerpt' => fake()->paragraph(),
            'content' => fake()->paragraphs(5, true),
            'featured_image' => null, // Leave null to display the placeholder
            'is_published' => true,
            'is_featured' => fake()->boolean(20),
            'seo_title' => $title,
            'seo_description' => fake()->sentence(),
            'categories' => fake()->randomElement(['Planning', 'Budget', 'Development', 'Community']),
            'tags' => fake()->word() . ',' . fake()->word(),
            'user_id' => \App\Models\User::first() ?? \App\Models\User::factory(),
            'published_at' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
