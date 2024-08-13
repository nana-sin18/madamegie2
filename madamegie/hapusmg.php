<?php
$id = $_GET['id'];
// buat koneksi
$koneksimg = mysqli_connect("localhost", "root", "", "skincare_madamegie");

// perintah sql
$perintah = mysqli_query($koneksimg, "delete from produk where idproduk=$id");

header("Location:indexmg.php");

?>