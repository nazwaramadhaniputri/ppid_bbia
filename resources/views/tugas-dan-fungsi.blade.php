@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>Tugas dan Fungsi PPID</h1>
        <div class="breadcrumb">
            <a href="{{ url('/ppid') }}">Beranda</a> / <a href="{{ url('/tentang-ppid') }}">Tentang PPID</a> / Tugas dan Fungsi
        </div>
    </div>
    
    <div class="content-section">
        <div class="content-card">
            <h2>Tugas Utama PPID BBIA</h2>
            <p>PPID BBIA memiliki tugas utama dalam penyelenggaraan pemerintahan yang bersih dan transparan melalui layanan informasi publik yang berkualitas.</p>
            
            <h3>1. Penyediaan Layanan Informasi</h3>
            <p>Menyediakan layanan informasi publik yang mudah diakses oleh seluruh lapisan masyarakat, meliputi:</p>
            <ul>
                <li>Informasi berkala (tahunan, semesteran, triwulanan, bulanan)</li>
                <li>Informasi serta merta</li>
                <li>Informasi setiap saat</li>
                <li>Informasi yang wajib tersedia</li>
                <li>Informasi yang dikecualikan</li>
            </ul>
            
            <h3>2. Verifikasi dan Konfirmasi</h3>
            <p>Melakukan verifikasi kebenaran informasi publik yang diminta dan memberikan konfirmasi atas kebenaran informasi tersebut.</p>
            
            <h3>3. Standarisasi Layanan</h3>
            <p>Menetapkan standar layanan informasi publik yang meliputi:</p>
            <ul>
                <li>Waktu pelayanan</li>
                <li>Biaya pelayanan</li>
                <li>Produk pelayanan</li>
                <li>SOP pelayanan</li>
            </ul>
            
            <h3>4. Pemutakhiran Informasi</h3>
            <p>Memutakhirkan informasi publik secara berkala dan menyediakan daftar informasi publik yang dapat diakses secara online.</p>
            
            <h3>5. Penanganan Sengketa</h3>
            <p>Menyediakan mekanisme penanganan sengketa informasi sesuai dengan ketentuan perundang-undangan yang berlaku.</p>
            
            <h2>Fungsi PPID BBIA</h2>
            <p>Dalam melaksanakan tugasnya, PPID BBIA menjalankan fungsi:</p>
            <ul>
                <li><strong>Koordinatif:</strong> Mengkoordinasikan penyediaan informasi publik di lingkungan BBIA</li>
                <li><strong>Konsultatif:</strong> Memberikan konsultasi terkait akses informasi publik</li>
                <li><strong>Evaluatif:</strong> Melakukan evaluasi berkala terhadap kualitas layanan informasi</li>
                <li><strong>Advokasi:</strong> Mengadvokasikan pentingnya keterbukaan informasi publik</li>
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
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 15px;
    margin-top: 25px;
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
