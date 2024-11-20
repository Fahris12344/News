<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function setAdmin(User $user)
    {
        // Mengubah role pengguna menjadi 'admin'
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengecek apakah pengguna yang login adalah admin
        if (Auth::check() && Auth::user()->role !== 'admin') {
            // Jika bukan admin, redirect ke halaman home
            return redirect('/'); // Atau ke route lain yang Anda inginkan
        }

        // Menampilkan dashboard admin jika pengguna adalah admin
        return view('pages.admin.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
