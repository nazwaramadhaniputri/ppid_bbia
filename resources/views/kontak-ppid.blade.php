@extends('layouts.app')

@section('content')
<div class="page-header">
    <div class="page-header-content">
        <h1>Kontak PPID</h1>
        <div class="breadcrumb">
            <a href="{{ url('/ppid') }}">Beranda</a> / <a href="{{ url('/tentang-ppid') }}">Tentang PPID</a> / Kontak PPID
        </div>
    </div>
</div>

<div class="content-section">
    <div class="content-full">
        @php
            $profils = \App\Models\Profil::where('is_active', true)
                ->where('kategori', 'Kontak PPID')
                ->orderBy('urutan')
                ->get();
        @endphp
        
        @forelse($profils as $profil)
            <div class="kontak-content">
                <h2>{{ $profil->judul }}</h2>
                <div>{!! $profil->konten !!}</div>
            </div>
        @empty
            <div class="contact-card">
                <h3>Informasi Kontak PPID</h3>
                <p>Informasi kontak sedang dalam pembaruan.</p>
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
    margin-bottom: 10px;
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

.content-full p {
    color: #333;
    line-height: 1.8;
    margin-bottom: 20px;
    font-size: 16px;
}

.contact-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-top: 30px;
}

.contact-card {
    background: rgba(26, 82, 130, 0.1);
    border: 1px solid rgba(26, 82, 130, 0.2);
    border-radius: 15px;
    padding: 30px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.contact-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.contact-icon {
    margin-bottom: 20px;
}

.contact-icon img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid #1a3a5f;
}

.contact-info h3 {
    color: #1a3a5f;
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 15px;
}

.contact-info p {
    color: #333;
    font-size: 16px;
    line-height: 1.5;
    margin-bottom: 8px;
}

.form-section {
    background: transparent;
    padding: 0;
    margin: 0;
}

.contact-form {
    display: grid;
    gap: 20px;
}

.form-group {
    display: flex;
    flex-direction: column;
}

.form-group label {
    color: #1a3a5f;
    font-weight: 600;
    margin-bottom: 8px;
}

.form-group input,
.form-group textarea {
    padding: 12px;
    border: 2px solid #e9ecef;
    border-radius: 5px;
    font-size: 14px;
    transition: border-color 0.3s ease;
}

.form-group input:focus,
.form-group textarea:focus {
    outline: none;
    border-color: #1a3a5f;
}

.btn-primary {
    background-color: #1a3a5f;
    color: white;
    border: none;
    padding: 12px 24px;
    border-radius: 5px;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-primary:hover {
    background-color: #102841;
}

.social-links {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
    margin: 20px 0;
}

.social-link {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 10px 20px;
    background: #f8f9fa;
    border: 2px solid #1a3a5f;
    border-radius: 25px;
    text-decoration: none;
    color: #1a3a5f;
    font-weight: 500;
    transition: all 0.3s ease;
}

.social-link:hover {
    background: #1a3a5f;
    color: white;
}

.social-link img {
    width: 20px;
    height: 20px;
    object-fit: contain;
}
</style>

@endsection
