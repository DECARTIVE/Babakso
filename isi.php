<div class="panel panel-default" style="background-color: darkgray;"><h3><b>Bingung baksonya mau diapakan ? Lihat bawah yuk !</b></h3></div>  
<?php
include "koneksi.php";

$sql = "SELECT * FROM resep ORDER BY id DESC"; // Menampilkan posting dari yang terbaru
$result = mysqli_query($koneksi, $sql);
?>

<div class="container">

    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <div class="post">
            <h2><a href="artikel.php?id=<?php echo $row['id']; ?>"><?php echo $row['judul']; ?></a></h2>
            <p style="color: gray;">Tanggal Upload: <?php echo date("d-m-Y", strtotime($row['tanggal_upload'])); ?></p>
            <p><?php echo substr($row['isi'], 0, 200); // Menampilkan 200 karakter pertama dari isi ?></p>
            <a href="artikel.php?id=<?php echo $row['id']; ?>">Baca selengkapnya...</a>
        </div>
    <?php endwhile; ?>

</div>

<?php
mysqli_close($koneksi);
?>
