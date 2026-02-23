<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - PPID BBIA</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
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
        
        .dashboard-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        
        .stat-card {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .stat-card h3 {
            margin: 0 0 0.5rem 0;
            color: #666;
            font-size: 0.9rem;
        }
        
        .stat-card .number {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
        }
        
        .recent-activity {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .recent-activity h2 {
            margin: 0 0 1rem 0;
            color: #333;
        }
        
        .activity-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .activity-list li {
            padding: 0.75rem 0;
            border-bottom: 1px solid #eee;
        }
        
        .activity-list li:last-child {
            border-bottom: none;
        }
        
        .activity-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .activity-title {
            font-weight: 500;
            color: #333;
        }
        
        .activity-date {
            color: #666;
            font-size: 0.9rem;
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
                    <a href="{{ route('admin.dashboard') }}" class="active">
                        📊 Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.berita.index') }}">
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
                <h1>Dashboard</h1>
                <div class="user-menu">
                    <div class="user-info">
                        <span>👤 {{ Auth::guard('admin')->user()->name }}</span>
                    </div>
                    <a href="{{ route('admin.logout') }}" class="btn-logout">Logout</a>
                </div>
            </div>
            
            <!-- Content -->
            <div class="content">
                <!-- Dashboard Stats -->
                <div class="dashboard-stats">
                    <div class="stat-card">
                        <h3>Total Berita</h3>
                        <div class="number">12</div>
                    </div>
                    <div class="stat-card">
                        <h3>Permohonan Baru</h3>
                        <div class="number">5</div>
                    </div>
                    <div class="stat-card">
                        <h3>Keberatan Diproses</h3>
                        <div class="number">3</div>
                    </div>
                    <div class="stat-card">
                        <h3>Total Pengunjung</h3>
                        <div class="number">1,234</div>
                    </div>
                </div>
                
                <!-- Recent Activity -->
                <div class="recent-activity">
                    <h2>Aktivitas Terkini</h2>
                    <ul class="activity-list">
                        <li>
                            <div class="activity-item">
                                <span class="activity-title">Permohonan informasi baru dari Budi Santoso</span>
                                <span class="activity-date">2 jam lalu</span>
                            </div>
                        </li>
                        <li>
                            <div class="activity-item">
                                <span class="activity-title">Berita "Peningkatan Layanan PPID" dipublikasikan</span>
                                <span class="activity-date">5 jam lalu</span>
                            </div>
                        </li>
                        <li>
                            <div class="activity-item">
                                <span class="activity-title">Pengajuan keberatan dari Ahmad Fauzi diproses</span>
                                <span class="activity-date">1 hari lalu</span>
                            </div>
                        </li>
                        <li>
                            <div class="activity-item">
                                <span class="activity-title">Sistem backup database berhasil</span>
                                <span class="activity-date">2 hari lalu</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
