<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Commentar;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Commentar::create([
            'user_id' => '1',
            'news_id' => '1',
            'content' => 'enak tuh bang',
        ],[
            'user_id' => '2',
            'news_id' => '1',
            'content' => 'mantap mas',
        ],[
            'user_id' => '3',
            'news_id' => '1',
            'content' => 'agomo ngayomi',
        ]);
    }
}
