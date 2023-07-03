<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/fontawesome/all.css">

    <script src="js/fontawesome/js/all.js"></script>
</head>
<body style="background-color:#FFE4C4;">

    <div class="navbar">
        <div class="logo">
            <span><strong>DATA SISWA BARU</strong> </span>
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
        <div class="header">
            <div class="back">
                <a href="localhost:8080/tugas/index.php"><i class="fa fa-arrow-left"></i></a>
            </div>
            <div class="title">
                <span>Edit Data Siswa</span>
            </div>
        </div>
        
        <form action="edit.php" method="post">
            <div class="form">
                <div class="name-field">
                <?php
                    include "koneksi.php";
                  
                    $data = mysqli_query($koneksi, "SELECT * FROM tb_siswabaru WHERE 1 ");
                    while($d = mysqli_fetch_array($data)) {
                ?>
                   
                    <div class="size">
                        <span>Nama</span>
                        <input type="text" name="Nama" value="<?php echo $d['Nama']; ?>" placeholder="Masukkan Nama...">
                    </div>
                    <div class="size">
                        <span>Jenis Kelamin</span>
                        <input type="text" name="Kelamin" value="<?php echo $d['Kelamin']; ?>" placeholder="Masukkan Jenis Kelamin...">
                    </div>
                    <div class="size">
                        <span>Agama</span>
                        <input type="text" name="Agama" value="<?php echo $d['Agama']; ?>" placeholder="Masukkan Agama...">
                    </div>
                    <div class="size">
                        <span>Alamat</span>
                        <input type="text" name="Alamat" value="<?php echo $d['Alamat']; ?>" placeholder="Masukkan Alamat...">
                    </div>
                    <div class="size">
                        <span>Jurusan</span>
                        <input type="text" name="Jurusan" value="<?php echo $d['Jurusan']; ?>" placeholder="Masukkan Jurusan...">
                    </div>
                    
                <?php } ?>
                </div>
            </div>
            <button type="submit" class="btn-submit">Edit</button>
        </form>
         


    </div>

</body>
</html>