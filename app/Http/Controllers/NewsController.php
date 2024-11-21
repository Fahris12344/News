<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Category;

class NewsController extends Controller
{
    // Menampilkan daftar berita dengan pencarian dan filter
    public function index(Request $request)
    {

    }

    // Menampilkan form untuk membuat berita baru
    public function create()
    {
       
    }

    // Menyimpan berita baru ke database
    public function store(Request $request)
    {
        // Validasi input
       
    }


    // Menampilkan form untuk mengedit berita
    public function edit($id)
    {
        
    }

    // Mengupdate data berita
    public function update(Request $request, $id)
    {
        // Validasi input
       
    }

    // Menghapus berita
    public function destroy($id)
    {
     
    }
}
