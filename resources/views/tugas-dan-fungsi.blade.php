@extends('layouts.app')

@section('content')
<div class="page-header">
    <div class="page-header-content">
        <h1>Tugas dan Fungsi PPID</h1>
        <div class="breadcrumb">
            <a href="{{ url('/ppid') }}">Beranda</a> / <a href="{{ url('/tentang-ppid') }}">Tentang PPID</a> / Tugas dan Fungsi
        </div>
    </div>
</div>

<div class="content-section">
    <div class="content-full">
        @php
            $profils = \App\Models\Profil::where('is_active', true)
                ->where('kategori', 'Tugas dan Fungsi')
                ->orderBy('urutan')
                ->get();
        @endphp
        
        @forelse($profils as $profil)
            <div class="tugas-content">
                <h2>{{ $profil->judul }}</h2>
                <div>{!! $profil->konten !!}</div>
            </div>
        @empty
            <div class="tugas-box">
                <p>Informasi tugas dan fungsi sedang dalam pembaruan.</p>
            </div>
        @endforelse
    </div>
</div>

<style>
.page-header {
    background: linear-gradient(135deg, #0f2338 0%, #2c5282 35%, #1a3a5f 100%);
    color: white;
    padding: 40px 0;
    margin: 0 0 40px 0;
    width: 100%;
    left: 0;
    right: 0;
}

.page-header-content {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 60px;
}

.page-header h1 {
    font-size: 32px;
    font-weight: 700;
}

.breadcrumb {
    font-size: 14px;
    opacity: 0.8;
}

.breadcrumb a {
    color: white;
    text-decoration: none;
}

.breadcrumb a:hover {
    text-decoration: underline;
}

.content-section {
    width: 100%;
    padding: 0 20px;
    min-height: 60vh;
}

.content-full {
    max-width: 1200px;
    margin: 0 auto;
    padding: 60px 40px;
    background: transparent;
}

.content-full h2 {
    color: #1a3a5f;
    font-size: 28px;
    font-weight: 600;
    margin-bottom: 20px;
    margin-top: 40px;
}

.content-full h2:first-child {
    margin-top: 0;
}

.content-full h3 {
    color: #1a3a5f;
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 15px;
    margin-top: 30px;
}

.content-full h3:first-child {
    margin-top: 0;
}

.content-full p {
    color: #333;
    line-height: 1.8;
    margin-bottom: 20px;
    font-size: 16px;
}

.content-full ul {
    color: #333;
    line-height: 1.8;
    margin-bottom: 20px;
    padding-left: 25px;
}

.content-full li {
    margin-bottom: 12px;
    font-size: 16px;
}
</style>

@endsection
