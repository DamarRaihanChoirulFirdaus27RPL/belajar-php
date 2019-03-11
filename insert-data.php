<?php
include "koneksi.php";
$sql = "INSERT INTO user
(
id, 
nama,
role,
availability,
age,
location,
years_experience,
email
)VALUE
(
'1',
'arkademy',
'frontend dev',
'full time',
'17',
'Malang',
'2',
'adit@gmail.com'
)";

if($koneksi->query($sql)==TRUE){
    echo "Insert data telah Berhasil";
}else{
    echo "Insert data gagal";
}
?>