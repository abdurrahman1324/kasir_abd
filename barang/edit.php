<?php
include '../koneksi.php';

if (isset($_POST['update'])) {
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $harga_barang = $_POST['harga_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];
    $id_supplier = $_POST['id_supplier'];

    $sql = "UPDATE barang SET nama_barang='$nama_barang', harga_barang='$harga_barang', jumlah_barang='$jumlah_barang', id_supplier='$id_supplier' WHERE id_barang=$id_barang";
    $conn->query($sql);

    header("Location: view.php");
}
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

        <!-- Form Edit Barang (Ditampilkan jika ada barang yang diedit) -->
        <?php if (isset($_GET['edit'])): 
            $id_barang = $_GET['edit'];
            $sql = "SELECT * FROM barang WHERE id_barang=$id_barang";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
        ?>
        <form action="edit.php" method="POST" class="mt-4">
            <input type="hidden" name="id_barang" value="<?php echo $row['id_barang']; ?>">
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo $row['nama_barang']; ?>">
            </div>
            <div class="form-group">
                <label for="gambar_barang">Gambar</label>
                <input type="file" class="form-control" id="gambar_barang" name="gambar_barang" value="<?php echo isset ($row['gambar_barang']) ? date('gamabar_barang', strtotime($row['gambar_barang'])) : ''; ?>">
            </div>
            <div class="form-group">
                <label for="harga_barang">Harga Barang</label>
                <input type="number" class="form-control" id="harga_barang" name="harga_barang" value="<?php echo $row['harga_barang']; ?>">
            </div>
            <div class="form-group">
                <label for="jumlah_barang">Jumlah Barang</label>
                <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" value="<?php echo $row['jumlah_barang']; ?>">
            </div>
            <div class="form-group">
                <label for="id_supplier">ID Supplier</label>
                <input type="number" class="form-control" id="id_supplier" name="id_supplier" value="<?php echo $row['id_supplier']; ?>">
            </div>
            <button type="submit" name="update" class="btn btn-primary">Update Barang</button>
        </form>
        <?php endif; ?>
    </div>
</div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>