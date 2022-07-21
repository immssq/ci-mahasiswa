<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Data Mahasiswa</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Data Mahasiswa</h1>

	<a href="<?php echo base_url('/home/halaman_tambah') ?>">Tambah Data Mahasiswa</a>
	<br>
	<br>
	<table border="1">
		<tr>
			<td>NIM</td>
			<td>Nama Mahasiswa</td>
			<td>Foto Mahasiswa</td>
			<td>Foto KTP</td>
			<td>Aksi</td>
		</tr>

		<?php
			$count = 0;
			foreach ($queryAllMhs as $row) {
				$count = $count + 1;
		?>
		<tr>
			<td><?php echo $count ?></td>
			<td><?php echo $row->nama_mahasiswa ?></td>
			<td><?php echo $row->foto_diri_mahasiswa ?></td>
			<td><?php echo $row->foto_ktp_mahasiswa ?></td>
			<td><a href="<?php echo base_url('/home/halaman_edit') ?>">Edit</a> | <a href="">Delete</a></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
