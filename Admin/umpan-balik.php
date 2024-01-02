<?php include "header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Data User</h1>
        
        <table id="dataTables" class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th><th>Email</th><th>Waktu</th>
                <th>Isi</th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from feedback order by id DESC");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['nama']?></td>
                <td><?php echo $row['mail']?></td>
                <td><?php echo $row['waktu']?></td>
                <td>

                <a href="feedback.php?id=<?php echo $row['id']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                </a>

                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>


<?php include "foter.php";?>