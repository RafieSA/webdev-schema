<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Admin Toko Elektronik</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url('admin/index'); ?>">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('admin/produk'); ?>">Produk</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        <h1>Welcome to Dashboard</h1>
        <p>Gunakan menu di atas untuk mengelola data produk.</p>
    </div>
</body>
</html>