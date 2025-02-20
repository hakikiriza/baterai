<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Input Data</title>
</head>
<body>

<?php 
	include('koneksi.php');

	date_default_timezone_set('Asia/Jakarta');
	$waktu = date("H:i:s");
	$tanggal = date("d F Y");
	$cell1 = $_GET ['cell1'];
	$cell2 = $_GET ['cell2'];
	$cell3 = $_GET ['cell3'];
	$cell4 = $_GET ['cell4'];
	$cell5 = $_GET ['cell5'];
	$cell6 = $_GET ['cell6'];
	$cell7 = $_GET ['cell7'];
	$cell8 = $_GET ['cell8'];
	$cell9 = $_GET ['cell9'];
	$cell10 = $_GET ['cell10'];
	$cell11 = $_GET ['cell11'];
	$cell12 = $_GET ['cell12'];
	$cell13 = $_GET ['cell13'];
	$cell14 = $_GET ['cell14'];
	$cell15 = $_GET ['cell15'];
	$cell16 = $_GET ['cell16'];

	$kirim = mysqli_query($koneksi, "INSERT INTO tbmonitor (waktu,tanggal,cell1,cell2,cell3,cell4,cell5,cell6,cell7,cell8,cell9,cell10,cell11,cell12,cell13,cell14,cell15,cell16) 
	VALUES ('$waktu','$tanggal','$cell1','$cell2','$cell3','$cell4','$cell5','$cell6','$cell7','$cell8','$cell9','$cell10','$cell11','$cell12','$cell13','$cell14','$cell15','$cell16')");

	if ($kirim) {
		echo "Data berhasil diinputkan...!";
	} else {
		echo "Gagal di inputkan...!";
	}
	

 ?>

</body>
</html>