<?php
include __DIR__ . '../transaksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Transaksi</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col">
        <!-- Form Tambah Barang -->
        <form action="add.php" method="POST" class="mb-4" enctype="multipart/form-data">
            <div class="form-group">
                <label for="id_kasir">ID_Kasir</label>
                <input type="text" class="form-control" id="id_kasir" name="id_kasir" required>
            </div>
            <div class="form-group">
                <label for="id_barang">ID Barang</label>
                <input type="text" class="form-control" id="id_barang" name="id_barang" required>
            </div>
            <div class="form-group">
                <label for="id_member">ID Member</label>
                <input type="number" class="form-control" id="id_member" name="id_member" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="ttl_harga_barang">Total harga barang</label>
                <input type="number" class="form-control" id="ttl_harga_barang" name="ttl_harga_barang" required>
            </div>
            <div class="form-group">
                <label for="tanggal_waktu">Tanggal / Waktu</label>
                <input type="date" class="form-control" id="tanggal_waktu" name="tanggal_waktu" required>
            </div>
            <div class="form-group">
                <label for="total_bayar">Total Bayar</label>
                <input type="number" class="form-control" id="total_bayar" name="total_bayar" required>
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
