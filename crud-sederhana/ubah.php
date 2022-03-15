<?php require 'koneksi.php';
$data = array(
	'npm'  => $_POST['txtnpm'],
	'nama' => $_POST['txtnama'],
);
$where = $_POST['txtid'];
$cols = array();

foreach($data as $key=>$val) {
	$cols[] = "$key = '$val'";
}

$sql = "UPDATE mahasiswa SET ". implode(',', $cols). "WHERE id=".$where;
mysqli_query($conn,$sql);
if ($sql) {
   echo 'Data berhasil diubah <br/><a href="index.php">Kembali</a>';
} else {
   echo 'Error cuyy: ' . $sql . '<br>' . mysqli_error($conn);
}

mysqli_close($conn);
?>