<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* Styling for the sidebar */
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #343a40;
            color: white;
            padding-top: 30px;
            transition: all 0.3s ease;
        }
        .sidebar h4 {
            text-align: center;
            margin-bottom: 30px;
        }
        .sidebar .nav-item .nav-link {
            color: white;
            padding: 12px 20px;
            font-size: 1.1rem;
            text-transform: uppercase;
            transition: background-color 0.3s ease;
        }
        .sidebar .nav-item .nav-link:hover {
            background-color: #495057;
            border-radius: 5px;
        }

        /* Styling for the main content */
        .main-content {
            flex-grow: 1;
            background-color: #f8f9fa;
            padding: 30px;
        }

        /* Navbar styling */
        .navbar-custom {
            background-color: #007bff;
        }
        .navbar-custom .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }

        /* Table styling */
        .table thead {
            background-color: #007bff;
            color: white;
        }
        .table th, .table td {
            padding: 15px;
            text-align: center;
        }
        .table-bordered {
            border: 1px solid #ddd;
        }
        .table tbody tr:hover {
            background-color: #f1f1f1;
        }

        /* Custom buttons */
        .btn-custom {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="d-flex">
    <!-- Sidebar -->
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar">
            <h4>Menu</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="/admin/pendidikan">Pendidikan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/pelatihan">Pelatihan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/projek">Projek</a>
                </li>
            </ul>
        </div>
</div>
<div class="main-content">
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="{{ route('admin.admin') }}">Admin Dashboard</a>
        </div>
    </nav>

    @yield('content')
    @yield('content2')
</div>

</body>
</html>
