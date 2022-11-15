<?php
include ("koneksi.php");
if(isset($_POST['kirim'])){
    $nama =$_POST['nama'];
    $merk =$_POST['merk'];
    $keluhan =$_POST['keluhan'];

$sql ="INSERT INTO tb_motor(nama_pemilik, merk_motor, keluhan) VALUES ('$nama','$merk','$keluhan')";
$query =mysqli_query($koneksi,$sql);
}
?>