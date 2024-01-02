<?php

$nama=$_POST['nama'];
$mail=$_POST['mail'];
$isi=$_POST['isi'];


include "koneksi.php";

$simpan=$koneksi->query("insert into feedback(nama,mail,isi,waktu) 
                        values ('$nama', '$mail', '$isi', now())");

if($simpan==true){

    header("location:umpan.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>