<?php
include '../koneksi.php';
session_start();

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $sql = "DELETE FROM barang WHERE id_barang=$id";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "Barang berhasil dihapus";
        $_SESSION['msg_type'] = "success";
    } else {
        $_SESSION['message'] = "Gagal menghapus barang: " . $conn->error;
        $_SESSION['msg_type'] = "danger";
    }

    header("location: view.php");
    exit();
}
?>
