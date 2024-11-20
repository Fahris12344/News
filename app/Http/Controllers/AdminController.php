<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Tampilkan dashboard admin.
     */
    public function index()
    {
        // Pastikan pengguna adalah admin
        if (Auth::check() && Auth::user()->role !== 'admin') {
            return redirect('/')->with('error', 'Anda tidak memiliki akses.');
        }

        return view('pages.admin.dashboard');
    }

    /**
     * Kelola kategori - Tampilkan semua kategori.
     */
    public function category()
    {
        $categories = Category::all();
        return view('pages.admin.category.index', compact('categories'));
    }

    /**
     * Form untuk menambahkan kategori baru.
     */
    public function createCategory()
    {
        return view('pages.admin.category.create');
    }

    /**
     * Simpan kategori baru ke database.
     */
    public function storeCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Category::create($request->all());
        return redirect()->route('pages.admin.category.index')->with('success', 'Kategori berhasil ditambahkan.');
    }

    /**
     * Form untuk mengedit kategori.
     */
    public function editCategory($id)
    {
        $category = Category::findOrFail($id);
        return view('pages.admin.category.edit', compact('category'));
    }

    /**
     * Perbarui kategori di database.
     */
    public function updateCategory(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = Category::findOrFail($id);
        $category->update($request->all());
        return redirect()->route('pages.admin.category.index')->with('success', 'Kategori berhasil diperbarui.');
    }

    /**
     * Hapus kategori dari database.
     */
    public function destroyCategory($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('pages.admin.category.index')->with('success', 'Kategori berhasil dihapus.');
    }

    /**
     * Kelola berita - Tampilkan semua berita.
     */
    public function news()
    {
        $news = News::all();
        return view('pages.admin.news.index', compact('news'));
    }

    /**
     * Form untuk menambahkan berita baru.
     */
    public function createNews()
    {
        return view('pages.admin.news.create');
    }

    /**
     * Simpan berita baru ke database.
     */
    public function storeNews(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        News::create($request->all());
        return redirect()->route('pages.admin.news.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    /**
     * Form untuk mengedit berita.
     */
    public function editNews($id)
    {
        $news = News::findOrFail($id);
        return view('pages.admin.news.edit', compact('news'));
    }

    /**
     * Perbarui berita di database.
     */
    public function updateNews(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        $news = News::findOrFail($id);
        $news->update($request->all());
        return redirect()->route('pages.admin.news.index')->with('success', 'Berita berhasil diperbarui.');
    }

    /**
     * Hapus berita dari database.
     */
    public function destroyNews($id)
    {
        $news = News::findOrFail($id);
        $news->delete();
        return redirect()->route('pages.admin.news.index')->with('success', 'Berita berhasil dihapus.');
    }

    /**
     * Set pengguna menjadi admin.
     */
    public function setAdmin(User $user)
    {
        $user->update(['role' => 'admin']);
        return redirect()->back()->with('success', 'Role pengguna berhasil diubah menjadi admin.');
    }
}
