<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    mysqli_query($koneksi, "DELETE FROM resep WHERE id=$id");

    header("Location: data.php"); // Redirect kembali ke beranda setelah menghapus resep
    exit();
}
?>
