<?php include '../koneksi.php'; ?>
<?php include '../layout/header.php'; ?>
<?php include '../layout/sidebar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Supplier</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2 class="mb-4">Manajemen Supplier</h2>
            </div>
            <div class="card-body">
                <!-- Tabel Supplier -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID</th>
                            <th>Nama Supplier</th>
                            <th>Alamat</th>
                            <th>No Telpon</th>
                            <th>Email</th>
                            <th>NPWP</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $sql = "SELECT * FROM supplier";
                        $result = $conn->query($sql);
                        $no = 1;
                        while ($row = $result->fetch_assoc()): 
                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['id_supplier']; ?></td>
                            <td><?php echo $row['nama_supplier']; ?></td>
                            <td><?php echo $row['alamat']; ?></td>
                            <td><?php echo $row['no_telpon']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['npwp']; ?></td>
                            <td>
                                <a href="edit.php?edit=<?php echo $row['id_supplier']; ?>" class="btn btn-warning">Edit</a>
                                <a href="delete.php?delete=<?php echo $row['id_supplier']; ?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
                <a href="add.php" class="btn btn-primary mb-4">Tambah Supplier</a>
            </div>
        </div>
    </div>
<?php include '../layout/footer.php'; ?>