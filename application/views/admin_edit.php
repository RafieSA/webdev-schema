<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
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
        <h2>Edit Produk</h2>
        <form action="<?php echo site_url('admin/update/'.$product->id); ?>" method="post">
            <div class="form-group">
                <label>Nama Produk</label>
                <input type="text" name="produk" class="form-control" value="<?php echo $product->produk; ?>" required>
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <input type="text" name="kategori" class="form-control" value="<?php echo $product->kategori; ?>" required>
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="number" name="harga" class="form-control" value="<?php echo $product->harga; ?>" required>
            </div>
            <div class="form-group">
                <label>Link Gambar (ID)</label>
                <input type="text" name="link_gambar" class="form-control" value="<?php echo $product->link_gambar; ?>">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
</body>
</html>