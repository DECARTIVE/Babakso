<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$username=$_POST['username'];
$mail=$_POST['mail'];
$password=md5($_POST['username']);
$token=md5($username.$password);


include "../koneksi.php";

$simpan=$koneksi->query("insert into user(username,mail,password,token,last_login) 
                        values ('$username', '$mail', '$password', '$token',now())");

if($simpan==true){

    header("location:tampil-user.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>