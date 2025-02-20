<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Monitoring Baterai Per Cell</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1 class="h1" align="center">MONITORING BATERAI PER CELL</h1>
<p class="ket" align="center">ini adalah website untuk memonitoring inputan volt baterai per cell</p>

<?php 
	include "koneksi.php";

	$query = mysqli_query($koneksi, "SELECT * FROM tbmonitor ORDER BY id DESC LIMIT 1");
	while ($data = mysqli_fetch_array($query)) {

 ?>


	Waktu update terakhir :	(<?php echo $data['waktu'] ?>) Tanggal : (<?php echo $data['tanggal'] ?>)
		
<div class="container">
	<div class=kotak>
		<h2 class="h2">CELL 1</h2>
		<div class="nilai">
		<?php echo $data['cell1'] ?><font size="7">V</font>
		</div>
	</div>
	<div class=kotak>
		<h2 class="h2">CELL 2</h2>
		<div class="nilai">
		<?php echo $data['cell2'] ?><font size="7">V</font>
		</div>
	</div>
	<div class=kotak>
		<h2 class="h2">CELL 3</h2>
		<div class="nilai">
		<?php echo $data['cell3'] ?><font size="7">V</font>
		</div>
	</div>
	<div class=kotak>
		<h2 class="h2">CELL 4</h2>
		<div class="nilai">
		<?php echo $data['cell4'] ?><font size="7">V</font>
		</div>
	</div>
	<div class=kotak>
		<h2 class="h2">CELL 5</h2>
		<div class="nilai">
		<?php echo $data['cell5'] ?><font size="7">V</font>
		</div>
	</div>
	<div class=kotak>
		<h2 class="h2">CELL 6</h2>
		<div class="nilai">
		<?php echo $data['cell6'] ?><font size="7">V</font>
		</div>
	</div>
	<div class=kotak>
		<h2 class="h2">CELL 7</h2>
		<div class="nilai">
		<?php echo $data['cell7'] ?><font size="7">V</font>
		</div>
	</div>
	<div class=kotak>
		<h2 class="h2">CELL 8</h2>
		<div class="nilai">
		<?php echo $data['cell8'] ?><font size="7">V</font>
		</div>
	</div>
	<div class=kotak>
		<h2 class="h2">CELL 9</h2>
		<div class="nilai">
		<?php echo $data['cell9'] ?><font size="7">V</font>
		</div>
	</div>
	<div class=kotak>
		<h2 class="h2">CELL 10</h2>
		<div class="nilai">
		<?php echo $data['cell10'] ?><font size="7">V</font>
		</div>
	</div>
	<div class=kotak>
		<h2 class="h2">CELL 11</h2>
		<div class="nilai">
		<?php echo $data['cell11'] ?><font size="7">V</font>
		</div>
	</div>
	<div class=kotak>
		<h2 class="h2">CELL 12</h2>
		<div class="nilai">
		<?php echo $data['cell12'] ?><font size="7">V</font>
		</div>
	</div>
	<div class=kotak>
		<h2 class="h2">CELL 13</h2>
		<div class="nilai">
		<?php echo $data['cell13'] ?><font size="7">V</font>
		</div>
	</div>
	<div class=kotak>
		<h2 class="h2">CELL 14</h2>
		<div class="nilai">
		<?php echo $data['cell14'] ?><font size="7">V</font>
		</div>
	</div>
	<div class=kotak>
		<h2 class="h2">CELL 15</h2>
		<div class="nilai">
		<?php echo $data['cell15'] ?><font size="7">V</font>
		</div>
	</div>
	<div class=kotak>
		<h2 class="h2">CELL 16</h2>
		<div class="nilai">
		<?php echo $data['cell16'] ?><font size="7">V</font>
		</div>
	</div>
</div>

<?php } ?>

<a href="hapus.php">Reset Data..!</a> <br><br>
</body>
</html>