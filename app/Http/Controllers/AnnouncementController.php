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
        // Validasi data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048', // Validasi gambar (max 2MB)
            'date' => 'required|date|after_or_equal:today', // Validasi tanggal
        ], [
            'title.required' => 'Judul pengumuman wajib diisi.',
            'description.required' => 'Deskripsi pengumuman wajib diisi.',
            'image.image' => 'File gambar harus berupa gambar.',
            'image.mimes' => 'Format gambar yang diperbolehkan hanya jpg, jpeg, atau png.',
            'image.max' => 'Ukuran gambar maksimal 2MB.',
            'date.required' => 'Tanggal pengumuman wajib diisi.',
            'date.date' => 'Tanggal pengumuman harus tanggal yang valid.',
            'date.after_or_equal' => 'Tanggal pengumuman harus hari ini atau setelahnya.',
        ]);

        // Proses gambar jika ada
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('announcements', 'public');
        }

        // Simpan pengumuman ke database
        Announcement::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath, // Jika ada gambar
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
        // Validasi data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'date' => 'required|date|after_or_equal:today',
        ]);

        // Ambil pengumuman berdasarkan ID
        $announcement = Announcement::findOrFail($id);

        // Proses gambar jika ada
        $imagePath = $announcement->image;
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($imagePath) {
                Storage::disk('public')->delete($imagePath);
            }

            // Simpan gambar baru
            $imagePath = $request->file('image')->store('announcements', 'public');
        }

        // Perbarui pengumuman
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

        // Hapus gambar jika ada
        if ($announcement->image) {
            Storage::disk('public')->delete($announcement->image);
        }

        $announcement->delete();

        return redirect()->route('pages.admin.announcement.index')->with('success', 'Pengumuman berhasil dihapus.');
    }
}
