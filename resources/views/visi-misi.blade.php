@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>Visi dan Misi</h1>
        <div class="breadcrumb">
            <a href="{{ url('/ppid') }}">Beranda</a> / <a href="{{ url('/tentang-ppid') }}">Tentang PPID</a> / Visi dan Misi
        </div>
    </div>
    
    <div class="content-section">
        <div class="content-card">
            <h2>Visi PPID BBIA</h2>
            <div class="vision-box">
                <p>Menjadi PPID yang terdepan dalam penyediaan layanan informasi publik yang transparan, akuntabel, dan berkualitas untuk mendukung good governance di lingkungan Balai Besar Industri Agro.</p>
            </div>
            
            <h2>Misi PPID BBIA</h2>
            <div class="mission-grid">
                <div class="mission-item">
                    <div class="mission-number">1</div>
                    <div class="mission-content">
                        <h3>Transparansi</h3>
                        <p>Menyediakan informasi publik yang mudah diakses, cepat, dan terbuka untuk seluruh masyarakat.</p>
                    </div>
                </div>
                
                <div class="mission-item">
                    <div class="mission-number">2</div>
                    <div class="mission-content">
                        <h3>Akuntabilitas</h3>
                        <p>Memastikan setiap informasi yang disediakan akurat, terkini, dan dapat dipertanggungjawabkan.</p>
                    </div>
                </div>
                
                <div class="mission-item">
                    <div class="mission-number">3</div>
                    <div class="mission-content">
                        <h3>Profesionalisme</h3>
                        <p>Menyediakan layanan informasi publik yang profesional, ramah, dan sesuai standar yang berlaku.</p>
                    </div>
                </div>
                
                <div class="mission-item">
                    <div class="mission-number">4</div>
                    <div class="mission-content">
                        <h3>Inovasi</h3>
                        <p>Terus berinovasi dalam penyediaan layanan informasi publik untuk meningkatkan kualitas dan kemudahan akses.</p>
                    </div>
                </div>
            </div>
            
            <h2>Nilai-Nilai</h2>
            <div class="values-grid">
                <div class="value-item">
                    <h3>Integritas</h3>
                    <p>Berintegritas dalam setiap tindakan dan keputusan terkait informasi publik.</p>
                </div>
                
                <div class="value-item">
                    <h3>Komitmen</h3>
                    <p>Berkomitmen untuk memberikan layanan terbaik kepada masyarakat.</p>
                </div>
                
                <div class="value-item">
                    <h3>Kepedulian</h3>
                    <p>Selalu memprioritaskan kebutuhan dan kepentingan masyarakat dalam akses informasi.</p>
                </div>
                
                <div class="value-item">
                    <h3>Kerjasama</h3>
                    <p>Membangun kerjasama yang baik dengan semua stakeholder terkait.</p>
                </div>
            </div>
            
            <h2>Sasaran Strategis</h2>
            <ul>
                <li>Meningkatkan kepuasan masyarakat terhadap layanan informasi publik BBIA</li>
                <li>Mempercepat waktu penyelesaian permohonan informasi</li>
                <li>Meningkatkan kualitas dan kuantitas informasi publik yang tersedia</li>
                <li>Mengembangkan sistem informasi publik yang berbasis teknologi</li>
                <li>Meningkatkan kapasitas dan kompetensi SDM PPID</li>
                <li>Membangun budaya keterbukaan informasi di lingkungan BBIA</li>
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

.vision-box {
    background: #f8f9fa;
    border: 2px solid #1a3a5f;
    border-radius: 10px;
    padding: 30px;
    margin: 20px 0;
    text-align: center;
}

.vision-box p {
    color: #1a3a5f;
    font-size: 18px;
    font-weight: 500;
    line-height: 1.6;
    margin: 0;
}

.mission-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin: 30px 0;
}

.mission-item {
    display: flex;
    gap: 15px;
    background: #f8f9fa;
    border-radius: 10px;
    padding: 20px;
}

.mission-number {
    width: 40px;
    height: 40px;
    background: #1a3a5f;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 18px;
    flex-shrink: 0;
}

.mission-content h3 {
    color: #1a3a5f;
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 8px;
}

.mission-content p {
    color: #333;
    font-size: 14px;
    line-height: 1.5;
    margin: 0;
}

.values-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin: 30px 0;
}

.value-item {
    background: #f8f9fa;
    border-radius: 10px;
    padding: 20px;
    text-align: center;
}

.value-item h3 {
    color: #1a3a5f;
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 10px;
}

.value-item p {
    color: #333;
    font-size: 14px;
    line-height: 1.5;
    margin: 0;
}
</style>

@endsection
