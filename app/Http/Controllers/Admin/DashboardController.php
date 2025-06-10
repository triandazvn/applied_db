<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Member;
use App\Models\Peminjaman;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         // --- Mengambil data untuk Info Boxes ---

        // 1. Menghitung total judul buku yang ada
        $totalBukuCount = Buku::count();

        // 2. Menghitung jumlah buku yang statusnya sedang 'dipinjam'
        $bukuDipinjamCount = Peminjaman::where('Status', 'dipinjam')->count();

        // 3. Menghitung jumlah member yang tidak sedang di-blacklist
        $memberAktifCount = Member::where('StatusBlacklist', false)->count();

        // 4. Menghitung peminjaman yang akan jatuh tempo dalam 7 hari ke depan
        $jatuhTempoCount = Peminjaman::where('Status', 'dipinjam')
                            ->where('TanggalJatuhTempo', '<=', Carbon::now()->addDays(7))
                            ->count();

        // --- Mengambil data untuk tabel dan list ---

        // 5. Mengambil 5 data peminjaman terbaru beserta relasinya
        $peminjamanTerbaru = Peminjaman::with(['member', 'detailPeminjaman.buku'])
                            ->latest('TanggalPinjam') // urutkan berdasarkan tanggal pinjam
                            ->limit(5)
                            ->get();

        // 6. Mengambil 5 member yang baru terdaftar
        $memberBaru = Member::latest('TanggalDaftar') // urutkan berdasarkan tanggal daftar
                        ->limit(5)
                        ->get();

        // --- Mengirim semua data ke view ---
        return view('admin.dashboard', [
            'totalBukuCount' => $totalBukuCount,
            'bukuDipinjamCount' => $bukuDipinjamCount,
            'memberAktifCount' => $memberAktifCount,
            'jatuhTempoCount' => $jatuhTempoCount,
            'peminjamanTerbaru' => $peminjamanTerbaru,
            'memberBaru' => $memberBaru,
        ]);
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
