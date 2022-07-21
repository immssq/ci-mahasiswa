<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Data</title>
</head>
<body>
    <h3>Halaman Tambah Data Mahasiswa</h3>
    <form action="<?php echo base_url('home/fungsiTambah') ?>" method="post">
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="Nama"></td>
        </tr>
        <tr>
            <td>Foto Mahasiswa</td>
            <td>:</td>
            <td><input type="jpg" name="Foto Mahasiswa"></td>
        </tr>
        <tr>
            <td>Foto KTM</td>
            <td>:</td>
            <td><input type="jpg" name="Foto KTM "></td>
        </tr>
        <tr>
            <td colspan="3"><button type="submit">Tambah Mahasiswa</button></td>
        </tr>
    </table>
    </form>
</body>
</html>