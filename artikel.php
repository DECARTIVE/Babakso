<div id="nav"></div>
<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM resep WHERE id = $id";
    $result = mysqli_query($koneksi, $sql);
    $post = mysqli_fetch_assoc($result);

    // Format tanggal upload
    $tanggal_upload = date("d-m-Y", strtotime($post['tanggal_upload']));
} else {
    // Redirect jika tidak ada id yang diberikan
    header("Location: index.php");
    exit();
}
?>

<div class="container">
    <?php include "header.php"; ?>

    <div class="post">
        <h1 style="color: black;"><?php echo $post['judul']; ?></h1>
        <p style="color: gray;">Tanggal Upload: <?php echo $tanggal_upload; ?></p>
        <br>
        <p><?php echo $post['isi']; ?></p>
    </div>

    <?php include "navigasi.php"; ?>

    <?php include "foter.php"; ?>
</div>

<?php
mysqli_close($koneksi);
?>
