<?php include '../koneksi.php'; ?>
<?php include '../layout/header.php'; ?>
<?php include '../layout/sidebar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Transaksi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2 class="mb-4">Manajemen Transaksi</h2>
            </div>
            <div class="card-body">
                <!-- Tabel Supplier -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Kasir</th>
                            <th>ID Barang</th>
                            <th>ID Member</th>
                            <th>Total Harga Barang</th>
                            <th>Tanggal Waktu</th>
                            <th>Total Bayar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $sql = "SELECT * FROM transaksi";
                        $result = $conn->query($sql);
                        $no = 1;
                        while ($row = $result->fetch_assoc()): 
                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['id_kasir']; ?></td>
                            <td><?php echo $row['id_barang']; ?></td>
                            <td><?php echo $row['id_member']; ?></td>
                            <td><?php echo $row['ttl_harga_barang']; ?></td>
                            <td><?php echo $row['tanggal_waktu']; ?></td>
                            <td><?php echo $row['total_bayar']; ?></td>
                            <td>
                                <a href="edit.php?edit=<?php echo $row['id_transaksi']; ?>" class="btn btn-success">Edit</a>
                                <a href="delete.php?delete=<?php echo $row['id_transaksi']; ?>" class="btn btn-danger">Hapus</a>
                                <a href="cetak.php" target="_blank" class="btn btn-warning">CETAK</a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
                <a href="add.php" class="btn
                 btn-primary mb-4">Tambah Transaksi</a>
            </div>
        </div>
    </div>
<?php include '../layout/footer.php'; ?>