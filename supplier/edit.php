<?php
include __DIR__ . '../supplier.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Supplier</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h2 class="mb-4">Edit Supplier</h2>
        </div>
        <div class="card-body">
            <!-- Form Edit Barang (Ditampilkan jika ada barang yang diedit) -->
            <?php if (isset($_GET['edit'])): 
                $id_supplier = $_GET['edit'];
                $sql = "SELECT * FROM supplier WHERE id_supplier=$id_supplier";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
            ?>
            <form action="edit.php" method="POST" class="mt-4">
            <input type="hidden" name="id_supplier" value="<?php echo $row['id_supplier']; ?>">
            <div class="form-group">
                    <label for="nama_supplier">Nama </label>
                    <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" placeholder="Username" value="<?php echo $row['nama_supplier']; ?>">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat </label>
                    <textarea class="form-control" name="alamat" id="alamat" placeholder="isi alamat"><?php echo $row['alamat']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="no_telpon">No Telpon</label>
                    <input type="number" class="form-control" id="no_telpon" name="no_telpon" placeholder="Phone Number" value="<?php echo $row['no_telpon']; ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $row['email']; ?>">
                </div>
                <div class="form-group">
                    <label for="npwp">NPWP</label>
                    <input type="number" class="form-control" id="npwp" name="npwp" placeholder="NPWP" value="<?php echo $row['npwp']; ?>">
                </div>
                <button type="submit" name="update" class="btn btn-primary">Update Barang</button>
            </form>
            <?php endif; ?>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>