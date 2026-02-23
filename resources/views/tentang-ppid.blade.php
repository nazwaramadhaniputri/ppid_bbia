@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>Tentang PPID</h1>
        <div class="breadcrumb">
            <a href="{{ url('/ppid') }}">Beranda</a> / Tentang PPID
        </div>
    </div>
    
    <div class="content-section">
        <div class="content-card">
            <h2>Apa itu PPID?</h2>
            <p>Pejabat Pengelola Informasi dan Dokumentasi (PPID) adalah pejabat yang bertanggung jawab atas penyediaan layanan dan informasi publik di lingkungan Balai Besar Industri Agro (BBIA). PPID BBIA berfungsi sebagai jembatan antara institusi dengan masyarakat dalam hal akses informasi publik.</p>
            
            <h2>Tugas dan Fungsi</h2>
            <p>Berdasarkan Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik, PPID BBIA memiliki tugas dan fungsi:</p>
            <ul>
                <li>Menyediakan akses informasi publik secara cepat, tepat, dan akuntabel</li>
                <li>Melakukan verifikasi dan konfirmasi informasi publik</li>
                <li>Menetapkan standar layanan informasi publik</li>
                <li>Melakukan pemutakhiran informasi publik secara berkala</li>
                <li>Menyediakan mekanisme penanganan sengketa informasi</li>
            </ul>
            
            <h2>Dasar Hukum</h2>
            <p>Pelaksanaan tugas PPID BBIA didasarkan pada:</p>
            <ul>
                <li>Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik</li>
                <li>Peraturan Pemerintah Nomor 61 Tahun 2010 tentang Pelaksanaan UU Keterbukaan Informasi Publik</li>
                <li>Peraturan Komisi Informasi Nomor 1 Tahun 2010 tentang Standar Layanan Informasi Publik</li>
                <li>Peraturan internal Kementerian Perindustrian terkait PPID</li>
            </ul>
        </div>
    </div>
</div>

<style>
.page-header {
    background: linear-gradient(135deg, #1a3a5f, #2c5282);
    color: white;
    padding: 40px 0;
    margin-bottom: 40px;
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
    max-width: 800px;
    margin: 0 auto;
}

.content-card {
    background: white;
    border-radius: 10px;
    padding: 40px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.content-card h2 {
    color: #1a3a5f;
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 15px;
    margin-top: 30px;
}

.content-card h2:first-child {
    margin-top: 0;
}

.content-card p {
    color: #333;
    line-height: 1.6;
    margin-bottom: 15px;
}

.content-card ul {
    color: #333;
    line-height: 1.6;
    margin-bottom: 15px;
    padding-left: 20px;
}

.content-card li {
    margin-bottom: 8px;
}
</style>

@endsection
