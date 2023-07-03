<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penerimaan Siswa Baru</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">

    <script src="js/jquery.min.js"></script>
</head>
<body style="background-color:#FFF8DC;">

    <div class="navbar">
        <div class="logo">
            <span><strong>PENERIMAAN SISWA BARU PADA SMA XYZ</strong> </span>
        </div>
        <div class="menu">
            <ul>
                <li>
                    <a href="#">KELOMPOK 3</a>
                </li>
            </ul>
        </div>
    </div>
    <style type="text/css">
    .navbar {
    background-color: #DC143C;
    font-size:18px;
    }
</style>
    <div class="content">
        <div class="header-index">
            <h1>Data Siswa</h1>
            <a href="tambah_data.php" class="btn-tambah">Tambah Data</a>
            <a href="ekspor.php" class="btn-ekspor">Ekspor Data</a>
            <a href="edit_data.php" class="btn-edit">Edit Data</a>
        </div>

    
        <table class="fl-table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="tampil">
                <?php
                    include "koneksi.php";
                   
                    $data = mysqli_query($koneksi, "SELECT * FROM tb_siswabaru");
                    while($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $d["Nama"]; ?></td>
                    <td><?php echo $d["Kelamin"]; ?></td>
                    <td><?php echo $d["Agama"]; ?></td>
                    <td><?php echo $d["Alamat"]; ?></td>
                    <td><?php echo $d["Jurusan"]; ?></td>
                    <?php 
                    echo "<td><a href='?kode=$d[Nama]'> HAPUS </a></td>";
                    ?> 
                    
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

     

<?php 
    if(isset($_GET['kode']))
    {
        mysqli_query($koneksi, "DELETE FROM tb_siswabaru WHERE Nama='$_GET[kode]'");
        echo "Data telah terhapus";
        echo "<meta http-equiv=refresh content=2;URL='index.php'>";
    }
     ?>
   


</body>
</html>