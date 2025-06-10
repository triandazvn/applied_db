@extends('layouts.adminlte4')


{{-- Judul Halaman --}}
@section('title', 'Dashboard Admin')

{{-- Konten Halaman --}}
@section('content')
<div class="container-fluid">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            {{-- Variabel ini harus dikirim dari Controller --}}
                            {{-- <h3>{{ $totalBukuCount ?? '0' }}</h3> --}}
                            <p>Total Judul Buku</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-book"></i>
                        </div>
                        {{-- <a href="{{ route('admin.buku.index') }}" class="small-box-footer">Info lebih lanjut <i class="fas fa-arrow-circle-right"></i></a> --}}
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            {{-- Variabel ini harus dikirim dari Controller --}}
                            <h3>{{ $bukuDipinjamCount ?? '0' }}</h3>
                            <p>Buku Sedang Dipinjam</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-book-reader"></i>
                        </div>
                        <a href="#" class="small-box-footer">Info lebih lanjut <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            {{-- Variabel ini harus dikirim dari Controller --}}
                            {{-- <h3>{{ $memberAktifCount ?? '0' }}</h3> --}}
                            <p>Total Member Aktif</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        {{-- <a href="{{ route('admin.member.index') }}" class="small-box-footer">Info lebih lanjut <i class="fas fa-arrow-circle-right"></i></a> --}}
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            {{-- Variabel ini harus dikirim dari Controller --}}
                            {{-- <h3>{{ $jatuhTempoCount ?? '0' }}</h3> --}}
                            <p>Jatuh Tempo Minggu Ini</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <a href="#" class="small-box-footer">Info lebih lanjut <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Peminjaman Terbaru</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Member</th>
                                        <th>Judul Buku</th>
                                        <th>Tgl Pinjam</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Loop data peminjaman terbaru dari Controller --}}
                                    {{-- @forelse ($peminjamanTerbaru as $p)
                                        <tr>
                                            <td>{{ $p->member->Nama }}</td>
                                            <td>{{ $p->detailPeminjaman->first()->buku->Judul }}</td>
                                            <td>{{ $p->TanggalPinjam }}</td>
                                            <td><span class="badge bg-success">{{ $p->Status }}</span></td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">Belum ada data peminjaman.</td>
                                        </tr>
                                    @endforelse --}}
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-4">
                     <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Member Baru Terdaftar</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <ul class="products-list product-list-in-card pl-2 pr-2">
                                {{-- Loop data member baru dari Controller --}}
                                {{-- @forelse ($memberBaru as $m)
                                <li class="item">
                                    <div class="product-img">
                                        <i class="far fa-user-circle fa-2x text-muted"></i>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-title">{{ $m->Nama }}</a>
                                        <span class="product-description">
                                            Bergabung pada {{ $m->TanggalDaftar }}
                                        </span>
                                    </div>
                                </li>
                                @empty
                                <li class="item text-center p-4">Belum ada member baru.</li>
                                @endforelse --}}
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
