<?php include '../koneksi.php'; ?>
<?php include '../layout/header.php'; ?>
<?php include '../layout/sidebar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <table><title>Manajemen Supplier</title></table>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Manajemen Barang</h2>
        <a href="add.php" class="btn btn-primary mb-4">Tambah Barang</a>
        <!-- Tabel Barang -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama Barang</th>
                    <th>Gambar</th>
                    <th>Harga Barang</th>
                    <th>Jumlah Barang</th>
                    <th>ID Supplier</th>
                    <th>Id Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $sql = "SELECT * FROM barang";
                $result = $conn->query($sql);
                $no = 1; 
                while ($row = $result->fetch_assoc()): 
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row['id_barang']; ?></td>
                    <td><?php echo $row['nama_barang']; ?></td>
                    <td><img src="../gambar_barang/<?php echo htmlspecialchars($row['gambar_barang']); ?>" alt="image" style="width: 100px; height: auto;"></td>
                    <td><?php echo $row['harga_barang']; ?></td>
                    <td><?php echo $row['jumlah_barang']; ?></td>
                    <td><?php echo $row['id_supplier']; ?></td>
                    <td><?php echo $row['id_kategori']; ?></td>
                    <td>
                        <a href="edit.php?edit=<?php echo $row['id_barang']; ?>" class="btn btn-warning">Edit</a>
                        <a href="delete.php?delete=<?php echo $row['id_barang']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php include '../layout/footer.php'; ?>
