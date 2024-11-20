<?php
    // app/Http/Controllers/DashboardController.php

    namespace App\Http\Controllers;
use App\Models\News;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Versi untuk Data Real
    // public function indexReal()
    // {
    //     $totalBerita = News::count();
    //     $totalKategori = Category::count();
    //     $totalPengumuman = Announcement::count();

    //     // Mengambil berita terbaru
    //     $beritaTerbaru = News::latest()->take(5)->get();

    //     return view('dashboard.real', compact('totalBerita', 'totalKategori', 'totalPengumuman', 'beritaTerbaru'));
    // }

    // Versi untuk Data Manual (Dummy Data)
    public function indexManual()
    {
        // Dummy data
        $totalBerita = 50; // Jumlah berita manual
        $totalKategori = 10; // Jumlah kategori manual
        $totalPengumuman = 5; // Jumlah pengumuman manual

        // Data berita terbaru dummy
        $beritaTerbaru = [
            (object) ['judul' => 'Berita 1'],
            (object) ['judul' => 'Berita 2'],
            (object) ['judul' => 'Berita 3'],
            (object) ['judul' => 'Berita 4'],
            (object) ['judul' => 'Berita 5'],
        ];

        return view('dashboard', compact('totalBerita', 'totalKategori', 'totalPengumuman', 'beritaTerbaru'));
    }
}
