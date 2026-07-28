<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        $categories = ['Budget', 'Policy', 'Report', 'Publication', 'Guidelines', 'Strategic Plan'];

        for ($i = 0; $i < 20; $i++) {
            $title = $faker->catchPhrase();

            \App\Models\Document::create([
                'title' => $title,
                'slug' => \Illuminate\Support\Str::slug($title . '-' . rand(100, 999)),
                'description' => $faker->paragraphs(3, true),
                'category' => $faker->randomElement($categories),
                'file_path' => 'dummy/path/file-' . rand(1, 100) . '.pdf',
                'file_size' => rand(100000, 5000000), // Random size between 100KB and 5MB
                'download_count' => rand(0, 1500),
                'is_published' => true,
                'published_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ]);
        }
    }
}
