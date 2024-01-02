<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $judul = $_POST["judul"];
    $isi = $_POST["isi"];

    $sql = "UPDATE resep SET judul='$judul', isi='$isi' WHERE id=$id";
    mysqli_query($koneksi, $sql);

    header("Location: data.php"); // Redirect kembali ke beranda setelah mengedit resep
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($koneksi, "SELECT * FROM resep WHERE id=$id");
    $row = mysqli_fetch_assoc($result);
}
?>
