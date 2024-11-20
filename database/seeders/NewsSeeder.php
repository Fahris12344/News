<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News;
use Illuminate\Support\Facades\DB;


class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 
        DB::table('news')->insert([
            [
                'title' => 'BORONG MEDALI PERUNGGU',
                'content' => 'Siswa smk al-azhar berhasil memborong medali perunggu pada lomba yang di adakan di stikes banyuwangi',
                'category_id' => '1',
                'image' => 'makanan.jpeg',
                'start_date' => '2024-11-27',
                'end_date' => '2024-12-10',
    
            ],[
                 'title' => 'JUARA LKS BANYUWANGI ',
                'content' => 'Siswa smk al-azhar berhasil menjuarai lks tingkat kabupaten yang diadakan di smk al-azhar sempu',
                'category_id' => '2',
                'image' => 'esteh.jpeg',
                'start_date' => '2024-11-29',
                'end_date' => '2024-12-7,'
    
            ],[
                'title' => 'PEERAIH SERTIFIKAT',
                'content' => 'Seorang siswa dari smk al-azhar succes membawa sertifikat dari lomba badminton',
                'category_id' => '1',
                'image' => 'seafood.jpeg',
                'start_date' => '2024-11-25',
                'end_date' => '2024-12-14',
    
            ],

        ]);

        // News::create([
        //     'title' => 'PERKIRAAN PERTANGGUNGJAWABAN',
        //     'content' => 'Seorang siswa smk al-azhar memiliki kesempatan mengikuti pertanggungjawaban',
        //     'category_id' => '3',
        //     'image' => 'vegetarian.jpeg',
        //     'start_date' => 2024-11-30,
        //     'end_date' => 2024-12-25,
        // ]);
     
    }
}
