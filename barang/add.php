<?php
include __DIR__ . '../barang.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col">
        <!-- Form Tambah Barang -->
        <form action="add.php" method="POST" class="mb-4" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
            </div>
            <div class="form-group">
                <label for="gambar_barang">Gambar</label>
                <input type="file" class="form-control" id="gambar_barang" name="gambar_barang" required>
            </div>
            <div class="form-group">
                <label for="harga_barang">Harga Barang</label>
                <input type="number" class="form-control" id="harga_barang" name="harga_barang" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="jumlah_barang">Jumlah Barang</label>
                <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" required>
            </div>
            <div class="form-group">
                <label for="id_supplier">ID Supplier</label>
                <input type="number" class="form-control" id="id_supplier" name="id_supplier" required>
            </div>
            <div class="form-group">
                <label for="id_kategori">ID Kategori</label>
                <input type="number" class="form-control" id="id_kategori" name="id_kategori" required>
            </div>
            <button type="submit" name="add" class="btn btn-primary">Tambah Barang</button>
        </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
