<?
namespace App\Http\Controllers;

<<<<<<< Updated upstream
use App\Models\News;
use App\Models\Category;
=======
>>>>>>> Stashed changes
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
<<<<<<< Updated upstream

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
=======
    // Menampilkan daftar berita
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->paginate(10);
        return view('news.index', compact('news'));
    }

    // Menampilkan form untuk membuat berita baru
    public function create()
    {
        return view('news.create');
    }

    // Menyimpan berita baru ke database
   // Menyimpan berita baru ke database
public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'title' => 'required|max:255',
        'content' => 'required|min:10',
        'category_id' => 'required|integer',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'start_date' => 'required|date|after_or_equal:today',
        'end_date' => 'required|date|after:start_date|before_or_equal:'.now()->addDays(30)->format('Y-m-d'),
    ], [
        'title.required' => 'Judul berita wajib diisi.',
        'title.max' => 'Judul berita maksimal 255 karakter.',
        'content.required' => 'Konten berita wajib diisi.',
        'content.min' => 'Konten berita minimal 10 karakter.',
        'category_id.required' => 'Kategori berita wajib diisi.',
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



    // Menampilkan form untuk mengedit berita
    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('news.edit', compact('news'));
    }

    // Mengupdate data berita
public function update(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'title' => 'required|max:255',
        'content' => 'required|min:10',
        'category_id' => 'required|integer',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'start_date' => 'required|date|after_or_equal:today',
        'end_date' => 'required|date|after:start_date|before_or_equal:'.now()->addDays(30)->format('Y-m-d'),
    ], [
        'title.required' => 'Judul berita wajib diisi.',
        'title.max' => 'Judul berita maksimal 255 karakter.',
        'content.required' => 'Konten berita wajib diisi.',
        'content.min' => 'Konten berita minimal 10 karakter.',
        'category_id.required' => 'Kategori berita wajib diisi.',
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
>>>>>>> Stashed changes
    }
}
