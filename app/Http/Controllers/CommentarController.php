<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commentar; // Menggunakan model Commentar
use App\Models\News;
use App\Models\User;

class CommentarController extends Controller
{
    // Tampilkan daftar komentar
    public function index()
    {
        $commentars = Commentar::with('user', 'news')->latest()->paginate(10); // Memuat data user dan news
        return view('commentars.index', compact('commentars'));
    }

    // Tampilkan form untuk menambahkan komentar
    public function create($news_id)
    {
        $news = News::findOrFail($news_id);
        return view('commentars.create', compact('news'));
    }

    // Simpan komentar baru
    public function store(Request $request, $news_id)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        // Menyimpan komentar terkait dengan user dan news
        Commentar::create([
            'content' => $request->content,
            'user_id' => auth()->id(), // Menggunakan ID pengguna yang login
            'news_id' => $news_id,
        ]);

        return redirect()->route('news.show', $news_id)->with('success', 'Komentar berhasil ditambahkan.');
    }

    // Tampilkan detail komentar (opsional)
    public function show($id)
    {
        $commentar = Commentar::findOrFail($id);
        return view('commentars.show', compact('commentar'));
    }

    // Tampilkan form untuk mengedit komentar
    public function edit($id)
    {
        $commentar = Commentar::findOrFail($id);
        return view('commentars.edit', compact('commentar'));
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
