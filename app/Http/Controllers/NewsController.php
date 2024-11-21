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
        $query = News::query();

        // Pencarian berdasarkan title atau content
        if ($request->has('search') && $request->search) {
            $query->where(function($query) use ($request) {
                $query->where('title', 'like', "%{$request->search}%")
                      ->orWhere('content', 'like', "%{$request->search}%");
            });
        }

        // Filter berdasarkan category_id
        if ($request->has('category_id') && $request->category_id) {
            $query->where('category_id', $request->category_id);
        }

        // Filter berdasarkan start_date
        if ($request->has('start_date') && $request->start_date) {
            $query->whereDate('created_at', '>=', $request->start_date);
        }

        // Filter berdasarkan end_date
        if ($request->has('end_date') && $request->end_date) {
            $query->whereDate('created_at', '<=', $request->end_date);
        }

        $news = $query->orderBy('created_at', 'desc')->paginate(10)->appends($request->only(['search', 'category_id', 'start_date', 'end_date']));

        // Mengambil daftar kategori untuk filter
        $categories = Category::all();

        return view('pages.admin.news.index', compact('news', 'categories'));
    }

    // Menampilkan form untuk membuat berita baru
    public function create()
    {
        $categories = Category::all(); // Ambil semua kategori
        return view('news.create', compact('categories'));
    }

    // Menyimpan berita baru ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required|min:10',
            'category_id' => 'required|exists:categories,id',  // Pastikan kategori valid
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after:start_date|before_or_equal:'.now()->addDays(30)->format('Y-m-d'),
        ], [
            'title.required' => 'Judul berita wajib diisi.',
            'title.max' => 'Judul berita maksimal 255 karakter.',
            'content.required' => 'Konten berita wajib diisi.',
            'content.min' => 'Konten berita minimal 10 karakter.',
            'category_id.required' => 'Kategori berita wajib diisi.',
            'category_id.exists' => 'Kategori yang dipilih tidak valid.',
            'category_id.integer' => 'Kategori harus berupa angka yang valid.',
            'image.image' => 'File harus berupa gambar.',
            'image.mimes' => 'Gambar harus berformat jpg, jpeg, atau png.',
            'image.max' => 'Ukuran gambar maksimal 2MB.',
            'start_date.required' => 'Tanggal mulai wajib diisi.',
            'start_date.date' => 'Tanggal mulai harus berupa tanggal yang valid.',
            'start_date.after_or_equal' => 'Tanggal mulai harus hari ini atau setelahnya.',
            'end_date.required' => 'Tanggal selesai wajib diisi.',
            'end_date.date' => 'Tanggal selesai harus berupa tanggal yang valid.',
            'end_date.after' => 'Tanggal selesai harus setelah tanggal mulai.',
            'end_date.before_or_equal' => 'Tanggal selesai maksimal 30 hari ke depan.',
        ]);

        $data = $request->except('image');

        // Jika ada file gambar, simpan ke folder storage/public/images
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        News::create($data);

        return redirect()->route('news.index')->with('success', 'Berita berhasil ditambahkan!');
    }

    public function show ($id){
        $news = News::findOrFail($id);
        $categories = Category::all(); // Ambil semua kategori
        return view('news.show', compact('news','categories'));
    }

    // Menampilkan form untuk mengedit berita
    public function edit($id)
    {
        $news = News::findOrFail($id);
        $categories = Category::all(); // Ambil semua kategori
        return view('news.edit', compact('news', 'categories'));
    }

    // Mengupdate data berita
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required|min:10',
            'category_id' => 'required|exists:categories,id', 
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after:start_date|before_or_equal:'.now()->addDays(30)->format('Y-m-d'),
        ], [
            'title.required' => 'Judul berita wajib diisi.',
            'title.max' => 'Judul berita maksimal 255 karakter.',
            'content.required' => 'Konten berita wajib diisi.',
            'content.min' => 'Konten berita minimal 10 karakter.',
            'category_id.required' => 'Kategori berita wajib diisi.',
            'category_id.exists' => 'Kategori yang dipilih tidak valid.',
            'category_id.integer' => 'Kategori harus berupa angka yang valid.',
            'image.image' => 'File harus berupa gambar.',
            'image.mimes' => 'Gambar harus berformat jpg, jpeg, atau png.',
            'image.max' => 'Ukuran gambar maksimal 2MB.',
            'start_date.required' => 'Tanggal mulai wajib diisi.',
            'start_date.date' => 'Tanggal mulai harus berupa tanggal yang valid.',
            'start_date.after_or_equal' => 'Tanggal mulai harus hari ini atau setelahnya.',
            'end_date.required' => 'Tanggal selesai wajib diisi.',
            'end_date.date' => 'Tanggal selesai harus berupa tanggal yang valid.',
            'end_date.after' => 'Tanggal selesai harus setelah tanggal mulai.',
            'end_date.before_or_equal' => 'Tanggal selesai maksimal 30 hari ke depan.',
        ]);

        $news = News::findOrFail($id);
        $data = $request->except('image');

        // Jika ada file gambar baru, hapus gambar lama, dan simpan yang baru
        if ($request->hasFile('image')) {
            if ($news->image) {
                \Storage::disk('public')->delete($news->image);
            }
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        $news->update($data);

        return redirect()->route('news.index')->with('success', 'Berita berhasil diperbarui!');
    }

    // Menghapus berita
    public function destroy($id)
    {
        $news = News::findOrFail($id);

        // Hapus gambar jika ada
        if ($news->image) {
            \Storage::disk('public')->delete($news->image);
        }

        $news->delete();

        return redirect()->route('news.index')->with('success', 'Berita berhasil dihapus!');
    }
}
