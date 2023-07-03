<?php

include "koneksi.php";
 
$nama = $_POST['Nama'];
$kelamin = $_POST['Kelamin'];
$agama = $_POST['Agama'];
$alamat = $_POST['Alamat'];
$jurusan = $_POST['Jurusan'];

mysqli_query($koneksi, "UPDATE tb_siswabaru SET Nama='$nama', Kelamin='$kelamin', Agama='$agama', Alamat='$alamat', Jurusan='$jurusan' WHERE Nama='$nama'");

header("location:index.php?data=berhasil_diedit");

?>
