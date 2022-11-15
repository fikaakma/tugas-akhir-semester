<?php
include("koneksi.php");

if(isset($_POST['kirim'])){
    $kode = $_POST['id'];
    $nama = $_POST['nama_pemilik'];
    $merk = $_POST['merk_motor'];
    $keluhan = $_POST['keluhan'];

    $sql = "UPDATE tb_motor SET nama_pemilik='$nama', merk_motor='$merk', keluhan='$keluhan' WHERE id=$kode";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header('Location:tampil.php');
    } else {
        die ("gagal mengedit");
    }
}
?>