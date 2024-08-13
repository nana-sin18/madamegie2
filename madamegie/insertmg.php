<?php
include 'koneksimg.php';

$idkategori = $_POST['idkategori'];
$namaproduk = $_POST['namaproduk'];
$harga = $_POST['harga'];

mysqli_query($koneksimg, "insert into produk values ('', '$namaproduk', '$idkategori', '$harga')");
header("location:indexmg.php");
?>