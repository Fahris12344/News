<?
namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    // Tampilkan daftar berita
    public function index()
    {
        $news = News::with('category')->latest()->paginate(10); // Menampilkan berita beserta kategori
        return view('news.index', compact('news'));
    }

    // Tampilkan form untuk membuat berita baru
    public function create()
    {
        $categories = Category::all(); // Ambil semua kategori untuk dropdown
        return view('news.create', compact('categories'));
    }

    // Simpan berita baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id', // Validasi kategori
            'date' => 'required|date',
        ]);

        News::create([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'date' => $request->date,
        ]);

        return redirect()->route('news.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    // Tampilkan berita untuk diedit
    public function edit($id)
    {
        $news = News::findOrFail($id);
        $categories = Category::all(); // Ambil semua kategori
        return view('news.edit', compact('news', 'categories'));
    }

    // Update berita
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'date' => 'required|date',
        ]);

        $news = News::findOrFail($id);
        $news->update([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'date' => $request->date,
        ]);

        return redirect()->route('news.index')->with('success', 'Berita berhasil diperbarui.');
    }

    // Hapus berita
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('news.index')->with('success', 'Berita berhasil dihapus.');
    }

    // Tampilkan berita secara detail (Opsional)
    public function show($id)
    {
        $news = News::with('category')->findOrFail($id);
        return view('news.show', compact('news'));
    }
}
