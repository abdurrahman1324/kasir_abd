<?php
include '../koneksi.php';
// Create
if (isset($_POST['add'])) {
    $nama_supplier = $_POST['nama_supplier'];
    $alamat = $_POST['alamat'];
    $no_telpon = $_POST['no_telpon'];
    $email = $_POST['email'];
    $npwp = $_POST['npwp'];

    $sql = "INSERT INTO supplier (nama_supplier, alamat, no_telpon, email, npwp) VALUES ('$nama_supplier', '$alamat', '$no_telpon', '$email', '$npwp')";
    $conn->query($sql);

    header("Location: view.php");
}

// Read
$sql = "SELECT * FROM supplier";
$result = $conn->query($sql);

if (isset($_POST['update'])) {
    $id_supplier = $_POST['id_supplier'];
    $nama_supplier = $_POST['nama_supplier'];
    $alamat = $_POST['alamat'];
    $no_telpon = $_POST['no_telpon'];
    $email = $_POST['email'];
    $npwp = $_POST['npwp'];

    $sql = "UPDATE supplier SET nama_supplier='$nama_supplier', alamat='$alamat', no_telpon='$no_telpon', email='$email', npwp='$npwp' WHERE id_supplier=$id_supplier";
    $conn->query($sql);

    header("Location: view.php");
    
}

// Delete
if (isset($_GET['delete'])) {
    $id_supplier = $_GET['delete'];

    $sql = "DELETE FROM supplier WHERE id_supplier=$id_supplier";
    $conn->query($sql);
}

?>
