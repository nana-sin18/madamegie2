<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        button a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    
    <button><a href="indexmg.php">Lihat Semua Data</a></button>
    <h3>Insert Data Produk</h3>
    <form action="insertmg.php" method="POST">
    <table>
        <tr>
            <td>ID Produk</td>
            <td><input type="text" name="idproduk"></td>
        </tr>
        <tr>
            <td>ID Kategori</td>
            <td><input type="text" name="idkategori"></td>
        </tr>
        <tr>
            <td>Nama Produk</td>
            <td><input type="text" name="namaproduk"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="text" name="harga"></td>
        </tr>
    </table>
    <button style="margin-left: 20%;"><input type="submit" value="simpan"></button>
    </form>
</body>
</html>