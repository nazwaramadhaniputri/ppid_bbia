@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>Kontak PPID</h1>
        <div class="breadcrumb">
            <a href="{{ url('/ppid') }}">Beranda</a> / <a href="{{ url('/tentang-ppid') }}">Tentang PPID</a> / Kontak PPID
        </div>
    </div>
    
    <div class="content-section">
        <div class="content-card">
            <h2>Hubungi PPID BBIA</h2>
            <p>PPID BBIA siap melayani kebutuhan informasi publik Anda. Silakan hubungi kami melalui berbagai kanal yang tersedia.</p>
            
            <div class="contact-grid">
                <div class="contact-card">
                    <div class="contact-icon">
                        <img src="{{ asset('images/phone.jpg') }}" alt="Phone">
                    </div>
                    <h3>Telepon</h3>
                    <p>(0251) 8324068</p>
                    <p>Senin - Jumat, 08:00 - 16:00 WIB</p>
                </div>
                
                <div class="contact-card">
                    <div class="contact-icon">
                        <img src="{{ asset('images/email.jpg') }}" alt="Email">
                    </div>
                    <h3>Email</h3>
                    <p>cabi@bbia.go.id</p>
                    <p>ppid@bbia.go.id</p>
                </div>
                
                <div class="contact-card">
                    <div class="contact-icon">
                        <img src="{{ asset('images/location.jpg') }}" alt="Location">
                    </div>
                    <h3>Alamat</h3>
                    <p>Jl. Ir. H. Juanda No. 11</p>
                    <p>Bogor 16122</p>
                    <p>Jawa Barat, Indonesia</p>
                </div>
            </div>
            
            <h2>Formulir Permohonan Informasi</h2>
            <p>Untuk permohonan informasi publik, Anda dapat mengisi formulir online atau datang langsung ke kantor PPID BBIA.</p>
            
            <div class="form-section">
                <form class="contact-form">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap *</label>
                        <input type="text" id="nama" name="nama" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="tel" id="telepon" name="telepon">
                    </div>
                    
                    <div class="form-group">
                        <label for="subjek">Subjek *</label>
                        <input type="text" id="subjek" name="subjek" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="pesan">Pesan *</label>
                        <textarea id="pesan" name="pesan" rows="5" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                </form>
            </div>
            
            <h2>Media Sosial</h2>
            <p>Ikuti kami di media sosial untuk update terkini informasi PPID BBIA:</p>
            
            <div class="social-links">
                <a href="https://www.facebook.com/bbia.kemenperin" target="_blank" class="social-link">
                    <img src="{{ asset('images/facebook.jpg') }}" alt="Facebook"> Facebook
                </a>
                <a href="https://twitter.com/bbia_kemenperin" target="_blank" class="social-link">
                    <img src="{{ asset('images/twitter.jpg') }}" alt="Twitter"> Twitter
                </a>
                <a href="https://www.instagram.com/bbia.kemenperin" target="_blank" class="social-link">
                    <img src="{{ asset('images/instagram.jpg') }}" alt="Instagram"> Instagram
                </a>
                <a href="https://www.youtube.com/c/BalaiBesarIndustriAgro" target="_blank" class="social-link">
                    <img src="{{ asset('images/youtube.jpg') }}" alt="YouTube"> YouTube
                </a>
            </div>
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

.contact-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin: 30px 0;
}

.contact-card {
    background: #f8f9fa;
    border: 2px solid #1a3a5f;
    border-radius: 10px;
    padding: 30px;
    text-align: center;
}

.contact-icon {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    overflow: hidden;
    margin: 0 auto 20px;
}

.contact-icon img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.contact-card h3 {
    color: #1a3a5f;
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 10px;
}

.contact-card p {
    color: #333;
    font-size: 14px;
    margin-bottom: 5px;
}

.form-section {
    background: #f8f9fa;
    border-radius: 10px;
    padding: 30px;
    margin: 20px 0;
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
