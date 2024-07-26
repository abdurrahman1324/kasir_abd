<?php
include '../koneksi.php';

if (isset($_POST['add'])) {
    $nama_barang = $_POST['nama_barang'];
    $harga_barang = $_POST['harga_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];
    $id_supplier = $_POST['id_supplier'];
    $id_kategori = $_POST['id_kategori']; // Tambahkan ini

    // Proses upload gambar
    $target_dir = "../gambar_barang/";
    $target_file = $target_dir . basename($_FILES["gambar_barang"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["add"])) {
        $check = getimagesize($_FILES["gambar_barang"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["gambar_barang"]["size"] > 9900000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["gambar_barang"]["tmp_name"], $target_file)) {
            $gambar_barang = basename($_FILES["gambar_barang"]["name"]);

            // Use prepared statements to prevent SQL injection
            $stmt = $conn->prepare("INSERT INTO barang (nama_barang, gambar_barang, harga_barang, jumlah_barang, id_supplier, id_kategori) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssdiis", $nama_barang, $gambar_barang, $harga_barang, $jumlah_barang, $id_supplier, $id_kategori);

            if ($stmt->execute()) {
                header("Location: view.php");
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

$conn->close();
?>