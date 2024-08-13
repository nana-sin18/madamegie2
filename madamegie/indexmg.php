<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>MadameGie</title>
    <style>
        .container{
            width: 100%;
            height: 100%; 
            background-color: #B0578D;
        }
        img{
            width: 100%;
            height: 100%; 
            object-fit: cover; 
        }
        button a{
            text-decoration: none;
            background-color: pink;
            color: black;
        }
        h2{
            color: white;
        }
        
       

    </style>
</head>
<body>
<div class="container">
    <!-- logo madamegie -->
  <img src="https://madamegie.com/resources/local-assets/images/mg-logo-footer.png" alt="">
  <h2>Data Produk</h2>
  <!-- tabelnyaa -->
  <table class="table" style="width: 100%; background-color: red">
  <thead >
    <tr style="width: 100%; background-color: red">
      <th scope="col" style="background-color: #FACBEA; color:#3E001F;">ID Produk</th>
      <th scope="col" style="background-color: #FACBEA; color:#3E001F;">ID Kategori</th>
      <th scope="col" style="background-color: #FACBEA; color:#3E001F;">Nama Produk</th>
      <th scope="col" style="background-color: #FACBEA; color:#3E001F;">Harga</th>
      <th scope="col" style="background-color: #FACBEA; color:#3E001F;">Aksi<th>
        
    </tr>
  </thead>
  <?php

  include 'koneksimg.php';
  $datamg = mysqli_query($koneksimg, "select * from produk");
  while($mg = mysqli_fetch_array($datamg)){
    ?>
  <tbody>
    <tr>
      
      <td style="background-color: #D988B9;"><?php  echo $mg['idproduk']; ?></td>
      <td style="background-color: #D988B9;"><?php echo $mg['idkategori']; ?></td>
      <td style="background-color: #D988B9;"><?php echo $mg['namaproduk']; ?></td>
      <td style="background-color: #D988B9;"><?php echo $mg['harga']; ?></td>
      <td><a href="hapusmg.php?id=<?= $mg['idproduk'] ?>">Hapus</td>
      
    </tr>
    <?php
  }
  ?>
    
  </tbody>
</table>
<h2>Data Pemain</h2>
  <button><a href="tambahmg.php">Tambah Data</a></button>
</div>
</body>
</html>