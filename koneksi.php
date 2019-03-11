<?php
$host = "localhost";//host database
$username = "root";//username database
$password = ""; //pasword database
$db = "profile";
$koneksi = new mysqli($host, $username, $password);//membuat koneksi ke server mysq1

if($koneksi->connect_error){
    die("Koneksi ke Database gagal");   

}

?>
