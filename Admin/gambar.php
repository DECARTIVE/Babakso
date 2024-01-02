<?php
if ($_FILES['upload']['error'] == UPLOAD_ERR_OK) {
    $tempFile = $_FILES['upload']['tmp_name'];
    
    // Ganti path target sesuai dengan struktur folder
    $targetPath = dirname(__FILE__) . '/../gambar/'; // Sesuaikan dengan struktur folder Anda
    $targetFile = $targetPath . $_FILES['upload']['name'];

    // Pindahkan file ke direktori gambar
    move_uploaded_file($tempFile, $targetFile);

    // Generate URL gambar yang diunggah
    $url = 'http://localhost/babakso/gambar/' . $_FILES['upload']['name']; // Sesuaikan dengan URL Anda

    // Simpan path gambar ke basis data
    // Pastikan id_posting disesuaikan dengan id posting yang sesuai
    $id_posting = $_GET['id']; // Anda mungkin perlu mendapatkan id posting dari CKEditor
    $koneksi->query("UPDATE resep SET gambar = '$url' WHERE id = $id");

    // Respon ke CKEditor dengan URL gambar yang diunggah
    echo "<script>window.parent.CKEDITOR.tools.callFunction(1, '$url', 'Gambar berhasil diunggah.');</script>";
} else {
    // Respon ke CKEditor jika terjadi kesalahan upload
    echo "<script>window.parent.CKEDITOR.tools.callFunction(1, '', 'Error uploading image.');</script>";
}
?>
