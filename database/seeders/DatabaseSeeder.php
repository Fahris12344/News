<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */


    public function run()
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'), // Ganti dengan password yang aman
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Users Reguler',
            'email' => 'user@gmail.com',
            'password' => bcrypt('password'), // Ganti dengan password yang aman
            'role' => 'user',
        ]);

        $this->call([
            CategorySeeder::class,
            NewsSeeder::class,
            CommentSeeder::class,
            AnnouncementSeeder::class,
        ]);
    }
    
}
