<?php 
require 'koneksi.php'; 
$id_mhs = $_REQUEST['id'];
$sql = "SELECT * FROM mahasiswa WHERE id='$id_mhs'";
$result = mysqli_query($conn,$sql);
foreach ($result as $rows) {
	$id   = $rows['id'];
	$npm  = $rows['npm'];
	$nama = $rows['nama'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>UBAH DATA MAHASISWA</title>
</head>
<body>
	<form action="ubah.php" method="POST">
		<input type="hidden" name="txtid" value="<?php echo $id ?>">
		<label for="">NPM:</label>
		<input type="text" name="txtnpm" value="<?php echo $npm ?>">
		<label for="">NAMA:</label>
		<input type="text" name="txtnama" value="<?php echo $nama ?>">
		<button type="submit">UBAH</button>
	</form>
</body>
</html>