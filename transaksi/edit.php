<?php
include __DIR__ . '../transaksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Transaksi</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h2 class="mb-4">Edit Transaksi</h2>
        </div>
        <div class="card-body">

            <?php if (isset($_GET['edit'])): 
                $id_transaksi = $_GET['edit'];
                $sql = "SELECT * FROM transaksi WHERE id_transaksi=$id_transaksi";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
            ?>
            
            <form action="edit.php" method="POST" class="mt-4">
            <input type="hidden" name="id_transaksi" value="<?php echo $row['id_transaksi']; ?>">
            <div class="form-group">
                    <label for="id_kasir">ID Kasir</label>
                    <input type="number" class="form-control" id="id_kasir" name="id_kasir" value="<?php echo $row['id_kasir']; ?>">
                </div>
                <div class="form-group">
                    <label for="id_barang">ID Barang</label>
                    <input type="number" class="form-control" id="id_barang" name="id_barang" value="<?php echo $row['id_kasir']; ?>">
                </div>
                <div class="form-group">
                    <label for="id_member">ID Member</label>
                    <input type="number" class="form-control" id="id_member" name="id_member" value="<?php echo $row['id_member']; ?>">
                </div>
                <div class="form-group">
                    <label for="ttl_harga_barang">Total harga barang</label>
                    <input type="text" class="form-control" id="ttl_harga_barang" name="ttl_harga_barang" value="<?php echo $row['ttl_harga_barang']; ?>">
                </div>
                <div class="form-group">
                    <label for="tanggal_waktu">Tanggal / Waktu</label>
                    <input type="date" class="form-control" id="tanggal_waktu" name="tanggal_waktu" value="<?php echo isset ($row['tanggal_waktu']) ? date('Y-m-d', strtotime($row['tanggal_waktu'])) : ''; ?>">
                </div>
                <div class="form-group">
                    <label for="total_bayar">Total bayar</label>
                    <input type="number" class="form-control" id="total_bayar" name="total_bayar" value="<?php echo $row['total_bayar']; ?>">
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