<?php include "header.php";?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="proses-umpan.php" method="POST">
            <?php 

if(@$_GET['pesan']=="inputBerhasil"){

?>
        <div class="alert alert-success">
        Feedback Diterima!
        </div>
<?php

}

?>
                <div class="form-group">
                    <label for="judul">Nama</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="judul">Email</label>
                    <input type="text" name="mail" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="isi">ISI</label>
                    <textarea name="isi" class="form-control" rows="15" required></textarea>
                </div>

                <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
            </form>
        </div>
    </div>
</div>

<br>
<br>




<?php include "foter.php";?>
