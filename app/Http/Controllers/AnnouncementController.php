<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use Illuminate\Support\Facades\Storage;

class AnnouncementController extends Controller
{
    // Tampilkan daftar pengumuman
    public function index()
    {
        $announcements = Announcement::latest()->paginate(10);
        return view('pages.admin.announcement.index', compact('announcements'));
    }

    // Tampilkan form untuk menambahkan pengumuman baru
    public function create()
    {
        return view('pages.admin.announcement.create');
    }

    // Simpan pengumuman baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'date' => 'required|date|after_or_equal:today',
        ], [
            'title.required' => 'Judul pengumuman wajib diisi.',
            'title.string' => 'Judul pengumuman harus berupa teks.',
            'title.max' => 'Judul pengumuman maksimal 255 karakter.',
            'description.required' => 'Deskripsi pengumuman wajib diisi.',
            'image.image' => 'File gambar harus berupa gambar.',
            'image.mimes' => 'Format gambar yang diperbolehkan hanya jpg, jpeg, atau png.',
            'image.max' => 'Ukuran gambar maksimal 2MB.',
            'date.required' => 'Tanggal pengumuman wajib diisi.',
            'date.date' => 'Tanggal pengumuman harus berupa tanggal yang valid.',
            'date.after_or_equal' => 'Tanggal pengumuman harus hari ini atau setelahnya, tidak bisa memilih tanggal sebelumnya.',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('announcements', 'public');
        }

        Announcement::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'date' => $request->date,
        ]);

        return redirect()->route('pages.admin.announcement.index')->with('success', 'Pengumuman berhasil ditambahkan.');
    }

    // Tampilkan detail pengumuman
    public function show($id)
    {
        $announcement = Announcement::findOrFail($id);
        return view('pages.admin.announcement.show', compact('announcement'));
    }

    // Tampilkan form edit pengumuman
    public function edit($id)
    {
        $announcement = Announcement::findOrFail($id);
        return view('pages.admin.announcement.edit', compact('announcement'));
    }

    // Update pengumuman di database
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'date' => 'required|date|after_or_equal:today',
        ]);

        $announcement = Announcement::findOrFail($id);

        $imagePath = $announcement->image;
        if ($request->hasFile('image')) {
            if ($imagePath) {
                Storage::disk('public')->delete($imagePath);
            }
            $imagePath = $request->file('image')->store('announcements', 'public');
        }

        $announcement->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'date' => $request->date,
        ]);

        return redirect()->route('pages.admin.announcement.index')->with('success', 'Pengumuman berhasil diperbarui.');
    }

    // Hapus pengumuman
    public function destroy($id)
    {
        $announcement = Announcement::findOrFail($id);

        if ($announcement->image) {
            Storage::disk('public')->delete($announcement->image);
        }

        $announcement->delete();

        return redirect()->route('pages.announcement.announcement.index')->with('success', 'Pengumuman berhasil dihapus.');
    }
}
