@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <h1>Informasi Publik</h1>
            <p>Akses informasi publik PPID Balai Besar Industri Agro</p>
        </div>
    </div>
</section>

<!-- Breadcrumb -->
<nav class="breadcrumb">
    <div class="container">
        <a href="{{ url('/ppid') }}">Beranda</a>
        <span>›</span>
        <span>Informasi Publik</span>
    </div>
</nav>

<!-- Main Content -->
<main class="main-content">
    <div class="container">
        <div class="content-section">
            <div class="service-detail">
                <div class="service-icon-large">
                    <img src="{{ asset('images/informasi publik.png') }}" alt="Informasi Publik">
                </div>
                
                <div class="service-content">
                    <h2>Informasi Publik</h2>
                    <p>PPID BBIA menyediakan akses informasi publik yang transparan dan akuntabel sesuai dengan Undang-Undang Keterbukaan Informasi Publik.</p>
                    
                    <div class="info-grid">
                        <div class="info-card">
                            <h3>Informasi Berkala</h3>
                            <p>Informasi yang wajib tersedia dan diumumkan secara berkala setiap periode tertentu.</p>
                            <a href="{{ url('/informasi-berkala') }}" class="btn btn-sm">Lihat Detail</a>
                        </div>
                        
                        <div class="info-card">
                            <h3>Informasi Serta Merta</h3>
                            <p>Informasi yang dapat mengancam hajat hidup orang banyak dan kepentingan umum.</p>
                            <a href="{{ url('/informasi-serta-merta') }}" class="btn btn-sm">Lihat Detail</a>
                        </div>
                        
                        <div class="info-card">
                            <h3>Informasi Setiap Saat</h3>
                            <p>Informasi yang harus tersedia setiap saat dan dapat diakses oleh publik.</p>
                            <a href="{{ url('/informasi-setiap-saat') }}" class="btn btn-sm">Lihat Detail</a>
                        </div>
                        
                        <div class="info-card">
                            <h3>Daftar Informasi Publik</h3>
                            <p>Daftar lengkap informasi publik yang tersedia di PPID BBIA.</p>
                            <a href="{{ url('/daftar-informasi-publik') }}" class="btn btn-sm">Lihat Detail</a>
                        </div>
                    </div>
                    
                    <div class="info-box">
                        <h3>Hak Pemohon Informasi:</h3>
                        <ul>
                            <li>Mengakses informasi publik yang tersedia</li>
                            <li>Meminta informasi publik yang tidak tersedia</li>
                            <li>Mengajukan keberatan atas pelayanan informasi</li>
                            <li>Memperoleh informasi dalam bentuk yang diminta</li>
                            <li>Memperoleh informasi tanpa biaya (untuk informasi dasar)</li>
                        </ul>
                    </div>
                    
                    <div class="info-box">
                        <h3>Kewajiban PPID:</h3>
                        <ul>
                            <li>Menyediakan dan memberikan akses informasi publik</li>
                            <li>Melakukan pemutakhiran informasi secara berkala</li>
                            <li>Memberikan pelayanan prima kepada pemohon</li>
                            <li>Menjaga keamanan dan kerahasiaan informasi tertentu</li>
                        </ul>
                    </div>
                    
                    <div class="action-buttons">
                        <a href="{{ url('/daftar-informasi-publik') }}" class="btn btn-primary">Daftar Informasi Lengkap</a>
                        <a href="{{ url('/prosedur-permohonan') }}" class="btn btn-outline">Prosedur Permohonan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
