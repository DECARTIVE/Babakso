<?php include "header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="update.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from resep where id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="judul">JUDUL</label>
                        <input type="hidden" name="id" value="<?php echo $row['id']?>" class="form-control">
                        <input type="text" name="judul" value="<?php echo $row['judul']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="isi">ISI</label>
                        <textarea name="isi" class="form-control" rows="15" ><?php echo $row['isi']?> </textarea>
                    </div>

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "foter.php";?>