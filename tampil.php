<?php
include("koneksi.php");?>

<html>
<head>
</head>
<body>
<h1>APLIKASI BENGKEL</h1>
<h4> <a href=proses.php>PT YAHAMA MOTORS</a></h4>
<table border="1">
    <tr>
        <th>Kode</th>
        <th>Nama Pemilik</th>
        <th>Merk Motors</th>
        <th>Keluhan</th>
        <th>Aksi</th>
    </tr>


<?php
    include("koneksi.php");
    $sql='SELECT *FROM tb_motor';
    $query = mysqli_query($koneksi, $sql);

    while($bengkel=mysqli_fetch_array($query)){
    echo "<tr>";
            echo "<td>".$bengkel['id']."</td>";
            echo "<td>".$bengkel['nama_pemilik']."</td>";
            echo "<td>".$bengkel['merk_motor']."</td>";
            echo "<td>".$bengkel['keluhan']."</td>";
            echo "<td>";
            echo "<a href='edit.php?id=".$bengkel['id']."'>Edit</a> |";
            echo "<a href='hapus.php?id=".$bengkel['id']."'>Hapus</a>";
            echo "</td>";
    echo "</tr>";

    }
?>
</table>
</body>
</html>