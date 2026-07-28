<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Production Safety Shield: Prevent seeding dummy data in production
        if (App::environment('production') || App::isProduction()) {
            if (isset($this->command)) {
                $this->command->warn('Seeding fake test data is disabled in production environment.');
            }
            return;
        }

        $this->call([
            DocumentSeeder::class,
            NewsSeeder::class,
        ]);

        if (!User::where('email', 'test@example.com')->exists()) {
            User::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
                'password' => Hash::make('password'),
            ]);
        }
    }
}
