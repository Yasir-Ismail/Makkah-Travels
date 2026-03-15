<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | MAKKAH TRAVELS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .admin-sidebar {
            min-height: 100vh;
            background-color: var(--primary-green);
        }
        .admin-sidebar a {
            color: var(--secondary-white);
        }
        .admin-sidebar a:hover {
            background-color: rgba(255,255,255,0.1);
            color: var(--primary-gold);
        }
        .stat-card {
            border-left: 5px solid var(--primary-gold);
            background-color: var(--secondary-white);
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            border-radius: 10px;
        }
    </style>
</head>
<body style="background-color: #f8f9fa;">

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 d-none d-md-block admin-sidebar sidebar py-4">
                <div class="position-sticky">
                    <h4 class="text-center text-white mb-4"><span style="color: var(--primary-gold);">MAKKAH</span> TRAVELS</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active px-4 py-3" href="index.php"><i class="fas fa-home me-2"></i> Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 py-3" href="packages.php"><i class="fas fa-box me-2"></i> Packages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 py-3" href="bookings.php"><i class="fas fa-calendar-check me-2"></i> Bookings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 py-3" href="visa_requests.php"><i class="fas fa-passport me-2"></i> Visa Requests</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-10 ms-sm-auto px-md-4 py-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4 border-bottom">
                    <h1 class="h2" style="color: var(--primary-green);">Dashboard Overview</h1>
                </div>

                <!-- Stats -->
                <div class="row g-4 mb-4">
                    <div class="col-md-3">
                        <div class="card stat-card p-3">
                            <h6 class="text-muted">Total Bookings</h6>
                            <h3 style="color: var(--primary-green);">124</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card stat-card p-3">
                            <h6 class="text-muted">Active Packages</h6>
                            <h3 style="color: var(--primary-green);">18</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card stat-card p-3">
                            <h6 class="text-muted">Pending Visas</h6>
                            <h3 style="color: var(--primary-green);">45</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card stat-card p-3">
                            <h6 class="text-muted">Inquiries</h6>
                            <h3 style="color: var(--primary-green);">89</h3>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

</body>
</html>