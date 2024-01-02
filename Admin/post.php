<?php include "header.php";?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="proses-post.php" method="POST">
                <div class="form-group">
                    <label for="judul">JUDUL</label>
                    <input type="text" name="judul" class="form-control">
                </div>

                <div class="form-group">
                    <label for="isi">ISI</label>
                    <textarea name="isi" id="editor" class="form-control" rows="15"></textarea>
                </div>

                <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
            </form>
        </div>
    </div>
</div>

<!-- Sertakan CKEditor -->
<

<script src="ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor', {
        filebrowserUploadUrl: 'gambar.php', // Ganti 'upload.php' dengan skrip penanganan upload Anda
        filebrowserUploadMethod: 'form',
    });
</script>




<?php include "foter.php";?>
