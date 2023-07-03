<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Siswa</title>
</head>
<body>
        <?php
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=Data Siswa.xls");
        ?>

        <h1>Data Siswa</h1>
    
        <table border="1">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>Jurusan</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php
                    include "koneksi.php";
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM tb_siswabaru");
                    while($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                     
                    <td><?php echo $d["Nama"]; ?></td>
                    <td><?php echo $d["Kelamin"]; ?></td>
                    <td><?php echo $d["Agama"]; ?></td>
                    <td><?php echo $d["Alamat"]; ?></td>
                    <td><?php echo $d["Jurusan"]; ?></td>
                  
                </tr>
                <?php } ?>
            </tbody>
        </table>

</body>
</html>