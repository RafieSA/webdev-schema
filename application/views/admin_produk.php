<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kelola Produk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Admin Toko Elektronik</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('admin/index'); ?>">Dashboard</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url('admin/produk'); ?>">Produk</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        <h2>Daftar Produk</h2>
        <a href="<?php echo site_url('admin/tambah'); ?>" class="btn btn-success mb-3">Tambah Produk</a>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Produk</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Link Gambar (ID)</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo $product->id; ?></td>
                    <td><?php echo $product->produk; ?></td>
                    <td><?php echo $product->kategori; ?></td>
                    <td>Rp <?php echo number_format($product->harga, 0, ',', '.'); ?></td>
                    <td><?php echo $product->link_gambar; ?></td>
                    <td>
                        <a href="<?php echo site_url('admin/edit/'.$product->id); ?>" class="btn btn-primary btn-sm">Edit</a>
                        <a href="<?php echo site_url('admin/delete/'.$product->id); ?>" 
                           onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?');" 
                           class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>