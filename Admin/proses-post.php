<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>

<?php
// Sertakan file koneksi
include "koneksi.php";

// Tangkap data dari formulir
$judul = $_POST['judul'];
$isi = $_POST['isi'];

// Dapatkan waktu saat ini dalam format "Y-m-d H:i:s"
$tanggal_upload = date("Y-m-d H:i:s");

// Persiapkan pernyataan SQL menggunakan prepared statement
$sql = "INSERT INTO resep (judul, isi, tanggal_upload) VALUES (?, ?, ?)";

// Persiapkan pernyataan
$stmt = mysqli_prepare($koneksi, $sql);

// Periksa apakah persiapan pernyataan berhasil
if ($stmt) {
    // Ikat parameter ke pernyataan
    mysqli_stmt_bind_param($stmt, "sss", $judul, $isi, $tanggal_upload);

    // Eksekusi pernyataan
    if (mysqli_stmt_execute($stmt)) {
        header("location:data.php?pesan=inputBerhasil");
    } else {
        echo "Error: " . mysqli_stmt_error($stmt);
    }

    // Tutup pernyataan
    mysqli_stmt_close($stmt);
} else {
    echo "Error: " . mysqli_error($koneksi);
}

// Tutup koneksi (opsional, karena PHP akan menutupnya secara otomatis pada akhir skrip)
mysqli_close($koneksi);
?>


