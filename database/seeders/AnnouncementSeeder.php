<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Announcement;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Announcement::create([
            'title' => 'Pengumuman Semester Baru',
            'description' => 'Selamat datang ke semester baru, kami hadirkan informasi berita-berita yang berkaitan dengan sekolah, siswa, dan guru.',
            'image' => 'makanan.jpeg',
            'date' => '2024-12-5'
        ]);
    }
}
