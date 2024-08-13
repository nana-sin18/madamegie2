<?php

// koneksi dengan database nya
$koneksimg = mysqli_connect("localhost", "root","","skincare_madamegie");

// perintah apa yang mau ditampilkan
mysqli_query($koneksimg, "select idproduk, namaproduk, idkategori, harga from produk");

// perintah sql
$perintah = mysqli_query($koneksimg, "select * from produk");

// // ambil data
// while($data = mysqli_fetch_array($query)){
//     echo $data["idproduk"] . "<br/>";
//     echo $data["namaproduk"] . "<br/>";
//     // echo $data["idkategori"] . "<br/>";
//     // echo $data["harga"];
// }
?>