<html>
<center>
<font size=6>
Informasi Data Dosen
</font>
<hr width=320>
<table>
<?php
require ("koneksi.php");
$ID=$_POST['id'];
$NamaDosen=$_POST['namadosen'];
$Alamat=$_POST['alamat'];
$NoTelepon=$_POST['notelepon'];
echo "<tr><td>ID<td>$Id";
echo "<tr><td>Nama Dosen<td>$namadosen";
echo "<tr><td>Alamat<td>$alamat";
echo "<tr><td>NoTelepon<td>$notelepon";
echo "</table>";
echo "<hr width=320>";

if($ID!='')
{
$sql="insert into dosen values ('$k0144','$tossin','$bandung','$0857895426')";
$hasil=mysqli_query($conn,$sql);
echo "Data telah ditambahkan";
}
else
{
echo "Kode Barang Tidak Boleh Kosong";
}
?

