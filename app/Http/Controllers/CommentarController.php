<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commentar; // Menggunakan model Commentar
use App\Models\News;
use App\Models\User;

class CommentarController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

   

    // Tampilkan form untuk menambahkan komentar
    public function create($news_id)
    {
        $news = News::findOrFail($news_id);
        return view('commentars.create', compact('news'));
    }
        /**
         * Menyimpan komentar ke database
         */
        public function store(Request $request)
        {
            // Validasi input
            $request->validate([
                'news_id' => 'required|exists:news,id', // Pastikan berita ada
                'author_name' => 'required|string|max:255', // Nama pengirim wajib
                'content' => 'required|string|min:3', // Komentar minimal 3 karakter
            ], [
                'news_id.required' => 'Berita tidak ditemukan.',
                'news_id.exists' => 'Berita yang dipilih tidak valid.',
                'author_name.required' => 'Nama pengirim wajib diisi.',
                'author_name.max' => 'Nama pengirim maksimal 255 karakter.',
                'content.required' => 'Komentar wajib diisi.',
                'content.min' => 'Komentar minimal 3 karakter.',
            ]);
    
            // Simpan komentar
            Comment::create([
                'news_id' => $request->news_id,
                'author_name' => $request->author_name,
                'content' => $request->content,
            ]);
    
            // Redirect kembali ke halaman berita dengan pesan sukses
            return redirect()->back()->with('success', 'Komentar berhasil ditambahkan!');
        }
    


    // Update komentar
    public function update(Request $request, $id)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        $commentar = Commentar::findOrFail($id);
        $commentar->update([
            'content' => $request->content,
        ]);

        return redirect()->route('commentars.index')->with('success', 'Komentar berhasil diperbarui.');
    }

    // Hapus komentar
    public function destroy($id)
    {
        $commentar = Commentar::findOrFail($id);
        $commentar->delete();

        return redirect()->route('commentars.index')->with('success', 'Komentar berhasil dihapus.');
    }
}
