<?php require 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>DATA MAHASISWA</title>
</head>
<body>
	<p><a href="form_tambah.php">TAMBAH</a></p>
	<table border="1" cellpadding="2" cellspacing="2" width="60%">
		<thead>
			<tr>
				<th>No</th>
				<th>NPM</th>
				<th>Nama</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$sql = 'SELECT * FROM mahasiswa';
				$data = mysqli_query($conn, $sql);
				$no=(int)1;
				foreach ($data as $rows): ?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $rows['npm'] ?></td>
					<td><?php echo $rows['nama'] ?></td>
					<td>
						<a href="form_ubah.php?id=<?php echo $rows['id']?>">Ubah</a>
						<a href="hapus.php?id=<?php echo $rows['id']?>">Hapus</a>
					</td>
				</tr>
			<?php endforeach?>
		</tbody>
	</table>
</body>
</html>