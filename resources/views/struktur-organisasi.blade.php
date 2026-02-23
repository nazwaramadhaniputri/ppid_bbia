@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>Struktur Organisasi</h1>
        <div class="breadcrumb">
            <a href="{{ url('/ppid') }}">Beranda</a> / <a href="{{ url('/tentang-ppid') }}">Tentang PPID</a> / Struktur Organisasi
        </div>
    </div>
    
    <div class="content-section">
        <div class="content-card">
            <h2>Struktur Organisasi PPID BBIA</h2>
            <p>PPID BBIA merupakan bagian dari struktur organisasi Balai Besar Industri Agro yang bertanggung jawab langsung kepada Kepala BBIA.</p>
            
            <h2>Struktur Kepemimpinan</h2>
            <div class="org-structure">
                <div class="org-box">
                    <h3>Kepala BBIA</h3>
                    <p>Menetapkan PPID dan bertanggung jawab atas pelaksanaan tugas PPID</p>
                </div>
                
                <div class="org-box">
                    <h3>Pejabat Pengelola Informasi dan Dokumentasi</h3>
                    <p>Merupakan pejabat yang ditetapkan untuk melaksanakan tugas PPID sehari-hari</p>
                </div>
                
                <div class="org-box">
                    <h3>Koordinator PPID</h3>
                    <p>Membantu PPID dalam koordinasi dan pelaksanaan tugas</p>
                </div>
                
                <div class="org-box">
                    <h3>Staf PPID</h3>
                    <p>Melaksanakan tugas teknis dan administratif layanan informasi</p>
                </div>
            </div>
            
            <h2>Unit Pelaksana PPID</h2>
            <p>Dalam melaksanakan tugasnya, PPID BBIA didukung oleh:</p>
            <ul>
                <li><strong>Unit Pelayanan Informasi:</strong> Melayani permohonan informasi langsung</li>
                <li><strong>Unit Dokumentasi:</strong> Mengelola dokumen dan arsip informasi</li>
                <li><strong>Unit Verifikasi:</strong> Memverifikasi kebenaran informasi</li>
                <li><strong>Unit Publikasi:</strong> Memublikasikan informasi berkala</li>
            </ul>
            
            <h2>Hubungan Kerja</h2>
            <p>PPID BBIA menjalin hubungan kerja dengan:</p>
            <ul>
                <li>Unit kerja lain di lingkungan BBIA</li>
                <li>PPID Kementerian Perindustrian</li>
                <li>PPID Pelaksana UPT di bawah Kemenperin</li>
                <li>Komisi Informasi Pusat</li>
                <li>Lembaga terkait lainnya</li>
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

.content-card h3 {
    color: #1a3a5f;
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 10px;
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

.org-structure {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin: 30px 0;
}

.org-box {
    background: #f8f9fa;
    border: 2px solid #1a3a5f;
    border-radius: 10px;
    padding: 20px;
    text-align: center;
}

.org-box h3 {
    color: #1a3a5f;
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 10px;
}

.org-box p {
    color: #333;
    font-size: 14px;
    line-height: 1.5;
}
</style>

@endsection
