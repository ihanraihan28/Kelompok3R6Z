<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Profil</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">

    <script src="js/jquery.min.js"></script>
</head>
<body style="background-color:#FFE4C4;">
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
<center>
<div class="content">
        <div class="header-index">
            <h1>Masukkan Data Siswa</h1>
</div>
    <br/><br/>
<br>
    <form action="tambah_data.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="Nama"></td>
            </tr>
            <tr> 
                <td>Jenis Kelamin</td>
                <td><input type="text" name="kelamin"></td>
            </tr>
            <tr> 
                <td>Agama</td>
                <td><input type="text" name="Agama"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="Alamat"></td>
            </tr>
            <tr> 
                <td>Jurusan</td>
                <td><input type="text" name="Jurusan"></td>
            </tr>
            <br>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah"></td>
            </tr>
        </table><br><a href="index.php">Kembali Halaman Awal</a>
        </center>
    </form>

    <?php
    include "koneksi.php";
    if(isset($_POST['Submit']))
     {
        $nama = $_POST['Nama'];
        $kelamin = $_POST['Kelamin'];
        $agama = $_POST['Agama'];
        $alamat = $_POST['Alamat'];
        $jurusan = $_POST['Jurusan'];
     
        $insert = mysqli_query($koneksi, "INSERT INTO tb_siswabaru VALUES (
            '$nama','$kelamin','$agama','$alamat','$jurusan'
            )") or die(mysqli_error($koneksi));
        
        echo "<div align='center'><h5> Silahkan Tunggu.... </h5></div>";
        echo "<meta http-equiv='refresh' content='1;url=http://localhost:8080/tugas/index.php'>";
    }
    ?>
</body>
</html>