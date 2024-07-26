<?php
include '../koneksi.php';

// Create
if (isset($_POST['add'])) {
    $id_kasir = $_POST['id_kasir'];
    $id_barang = $_POST['id_barang'];
    $id_member = $_POST['id_member'];
    $ttl_harga_barang = $_POST['ttl_harga_barang'];
    $tanggal_waktu = $_POST['tanggal_waktu'];
    $total_bayar = $_POST['total_bayar'];

    $sql = "INSERT INTO transaksi (id_kasir, id_barang, id_member, ttl_harga_barang, tanggal_waktu, total_bayar) VALUES ('$id_kasir', '$id_barang', '$id_member', '$ttl_harga_barang', '$tanggal_waktu', '$total_bayar')";
    if ($conn->query($sql) === TRUE) {
        header("Location: view.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Read
$sql = "SELECT * FROM transaksi";
$result = $conn->query($sql);

// Update
if (isset($_POST['update'])) {
    $id_transaksi = $_POST['id_transaksi'];
    $id_kasir = $_POST['id_kasir'];
    $id_barang = $_POST['id_barang'];
    $id_member = $_POST['id_member'];
    $ttl_harga_barang = $_POST['ttl_harga_barang'];
    $tanggal_waktu = $_POST['tanggal_waktu'];
    $total_bayar = $_POST['total_bayar'];

    $sql = "UPDATE transaksi SET id_kasir='$id_kasir', id_barang='$id_barang', id_member='$id_member', ttl_harga_barang='$ttl_harga_barang', tanggal_waktu='$tanggal_waktu', total_bayar='$total_bayar' WHERE id_transaksi=$id_transaksi";
    if ($conn->query($sql) === TRUE) {
        header("Location: view.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Delete
if (isset($_GET['delete'])) {
    $id_transaksi = $_GET['delete'];

    $sql = "DELETE FROM transaksi WHERE id_transaksi=$id_transaksi";
    if ($conn->query($sql) === TRUE) {
        header("Location: view.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>