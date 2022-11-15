<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("Location:tampil.php?");
}
$kode=$_GET['id'];
$sql="SELECT * FROM tb_motor where id=$kode";
$query=mysqli_query($koneksi,$sql);
$tb_motor=mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die("Data tidak ditemukan");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit</title>
</head>
<body>
    <h1>Form Edit</h1>
    <form action="proses-edit.php" method="POST">
        <fieldset>
        <input type="hidden" name = "id" value="<?php echo $tb_motor['id']?>"/>
            <p>
                <label for = "nama_pemilik">Nama pemilik : </label>
                <input type = "text" name ="nama_pemilik" value="<?php echo $tb_motor['nama_pemilik']?>"/>
            </p>
            <p>
                <label for = "merk_motor">Merek motor</label>
                <select name = "merk_motor" value="<?php echo $tb_motor['merk_motor']?>">
                <option value = "mio">Mio</option>
                <option value = "jupiter">Jupiter</option>
                <option value = "nmax">Nmax</option>
                <option value = "vixion">Vixion</option>
                </select>
            </p>
            <p>
                <label for = "keluhan">Keluhan : </label>
                <input type = "text" name = "keluhan" value="<?php echo $tb_motor['keluhan']?>"/>
            </p>
            <p>
                <input type = "submit" value = "Kirim" name = "kirim"/>
            </p>
</fieldset>
</form>
</body>
</html>