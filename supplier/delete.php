<?php
include '../koneksi.php';
session_start();

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $sql = "DELETE FROM supplier WHERE id_supplier=$id";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "Supplier berhasil dihapus";
        $_SESSION['msg_type'] = "success";
    } else {
        $_SESSION['message'] = "Gagal menghapus supplier: " . $conn->error;
        $_SESSION['msg_type'] = "danger";
    }

    header("location: view.php");
    exit();
}
?>
