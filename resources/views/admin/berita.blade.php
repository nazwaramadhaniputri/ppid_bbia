<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Berita - PPID BBIA</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        
        .admin-layout {
            display: flex;
            min-height: 100vh;
        }
        
        .sidebar {
            width: 250px;
            background: #2c3e50;
            color: white;
            padding: 0;
        }
        
        .sidebar-header {
            padding: 1.5rem;
            background: #34495e;
            border-bottom: 1px solid #4a5f7a;
        }
        
        .sidebar-header h2 {
            margin: 0;
            font-size: 1.2rem;
        }
        
        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .sidebar-menu li {
            border-bottom: 1px solid #4a5f7a;
        }
        
        .sidebar-menu a {
            display: block;
            padding: 1rem 1.5rem;
            color: white;
            text-decoration: none;
            transition: background 0.3s;
        }
        
        .sidebar-menu a:hover,
        .sidebar-menu a.active {
            background: #3498db;
        }
        
        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        
        .top-bar {
            background: white;
            padding: 1rem 2rem;
            border-bottom: 1px solid #ddd;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .top-bar h1 {
            margin: 0;
            font-size: 1.5rem;
            color: #333;
        }
        
        .user-menu {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .user-info {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .btn-logout {
            background: #e74c3c;
            color: white;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s;
        }
        
        .btn-logout:hover {
            background: #c0392b;
        }
        
        .content {
            padding: 2rem;
        }
        
        .content-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }
        
        .btn-primary {
            background: #3498db;
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s;
        }
        
        .btn-primary:hover {
            background: #2980b9;
        }
        
        .berita-table {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .table th,
        .table td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #eee;
        }
        
        .table th {
            background: #f8f9fa;
            font-weight: 600;
            color: #333;
        }
        
        .table tr:hover {
            background: #f8f9fa;
        }
        
        .status-badge {
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }
        
        .status-published {
            background: #d4edda;
            color: #155724;
        }
        
        .status-draft {
            background: #fff3cd;
            color: #856404;
        }
        
        .action-buttons {
            display: flex;
            gap: 0.5rem;
        }
        
        .btn-sm {
            padding: 0.25rem 0.75rem;
            font-size: 0.85rem;
            border: none;
            border-radius: 3px;
            text-decoration: none;
            cursor: pointer;
            transition: background 0.3s;
        }
        
        .btn-edit {
            background: #ffc107;
            color: #212529;
        }
        
        .btn-edit:hover {
            background: #e0a800;
        }
        
        .btn-delete {
            background: #dc3545;
            color: white;
        }
        
        .btn-delete:hover {
            background: #c82333;
        }
        
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }
        
        .modal-content {
            background: white;
            margin: 5% auto;
            padding: 2rem;
            border-radius: 10px;
            width: 90%;
            max-width: 600px;
        }
        
        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        
        .close {
            font-size: 1.5rem;
            cursor: pointer;
            color: #666;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #333;
            font-weight: 500;
        }
        
        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }
        
        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: #3498db;
        }
        
        .form-group textarea {
            min-height: 200px;
            resize: vertical;
        }
        
        .form-actions {
            display: flex;
            gap: 1rem;
            justify-content: flex-end;
        }
        
        .btn-secondary {
            background: #6c757d;
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s;
        }
        
        .btn-secondary:hover {
            background: #5a6268;
        }
    </style>
</head>
<body>
    <div class="admin-layout">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <h2>PPID BBIA Admin</h2>
            </div>
            <ul class="sidebar-menu">
                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        📊 Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.berita.index') }}" class="active">
                        📰 Kelola Berita
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.permohonan') }}">
                        📄 Permohonan Informasi
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.keberatan') }}">
                        ⚠️ Pengajuan Keberatan
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.users') }}">
                        👥 Pengguna
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.reports') }}">
                        📈 Laporan
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.settings') }}">
                        ⚙️ Pengaturan
                    </a>
                </li>
            </ul>
        </div>
        
        <!-- Main Content -->
        <div class="main-content">
            <!-- Top Bar -->
            <div class="top-bar">
                <h1>Kelola Berita</h1>
                <div class="user-menu">
                    <div class="user-info">
                        <span>👤 {{ Auth::guard('admin')->user()->name }}</span>
                    </div>
                    <a href="{{ route('admin.logout') }}" class="btn-logout">Logout</a>
                </div>
            </div>
            
            <!-- Content -->
            <div class="content">
                <div class="content-header">
                    <h2>Daftar Berita</h2>
                    <a href="{{ route('admin.berita.create') }}" class="btn-primary">+ Tambah Berita</a>
                </div>
                
                <div class="berita-table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Status</th>
                                <th>Tanggal Publikasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($beritas as $berita)
                            <tr>
                                <td>{{ $berita->judul }}</td>
                                <td>
                                    <span class="status-badge status-{{ $berita->status }}">
                                        {{ ucfirst($berita->status) }}
                                    </span>
                                </td>
                                <td>{{ $berita->tanggal_publikasi ? $berita->tanggal_publikasi->format('d F Y') : '-' }}</td>
                                <td>
                                    <div class="action-buttons">
                                        <a href="{{ route('admin.berita.edit', $berita->id) }}" class="btn-sm btn-edit">Edit</a>
                                        <form action="{{ route('admin.berita.destroy', $berita->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-sm btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" style="text-align: center; padding: 2rem;">Belum ada berita</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Add/Edit Modal -->
    <div id="beritaModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Tambah Berita Baru</h2>
                <span class="close" onclick="hideModal()">&times;</span>
            </div>
            <form>
                <div class="form-group">
                    <label for="judul">Judul Berita</label>
                    <input type="text" id="judul" name="judul" required>
                </div>
                
                <div class="form-group">
                    <label for="slug">Slug (URL)</label>
                    <input type="text" id="slug" name="slug" required>
                </div>
                
                <div class="form-group">
                    <label for="konten">Konten Berita</label>
                    <textarea id="konten" name="konten" required></textarea>
                </div>
                
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" id="gambar" name="gambar" accept="image/*">
                </div>
                
                <div class="form-group">
                    <label for="status">Status</label>
                    <select id="status" name="status">
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="tanggal_publikasi">Tanggal Publikasi</label>
                    <input type="date" id="tanggal_publikasi" name="tanggal_publikasi">
                </div>
                
                <div class="form-actions">
                    <button type="button" class="btn-secondary" onclick="hideModal()">Batal</button>
                    <button type="submit" class="btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    
    <script>
        function showAddModal() {
            document.getElementById('beritaModal').style.display = 'block';
        }
        
        function hideModal() {
            document.getElementById('beritaModal').style.display = 'none';
        }
        
        window.onclick = function(event) {
            const modal = document.getElementById('beritaModal');
            if (event.target == modal) {
                hideModal();
            }
        }
        
        // Auto-generate slug from title
        document.getElementById('judul').addEventListener('input', function() {
            const judul = this.value;
            const slug = judul.toLowerCase()
                .replace(/[^a-z0-9\s-]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-')
                .trim('-');
            document.getElementById('slug').value = slug;
        });
    </script>
</body>
</html>
