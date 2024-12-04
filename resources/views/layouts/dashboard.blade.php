<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Tambahkan link ke CSS Bootstrap atau lainnya -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <nav class="bg-dark text-white p-3" style="width: 250px; height: 100vh;">
            <h4>Admin Panel</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link text-white">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/pelanggan" class="nav-link text-white">Pelanggan</a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/materials" class="nav-link text-white">Materials</a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/admin" class="nav-link text-white">Admin</a>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-link text-white nav-link">Logout</button>
                    </form>
                </li>
            </ul>
        </nav>

        <!-- Content -->
        <div class="p-4" style="flex: 1;">
            @yield('content')
        </div>
    </div>
    <!-- Tambahkan link ke JavaScript Bootstrap atau lainnya -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
