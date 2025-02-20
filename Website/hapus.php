<?php
session_start();
include 'koneksi.php'; // masukan konekasi DB
// ambil variable ID dari URL
//Proses query hapus data
$del=mysqli_query($koneksi,"TRUNCATE TABLE tbmonitor");
$sql =mysqli_query($koneksi,"INSERT INTO tbmonitor (id, waktu, tanggal, cell1, cell2, cell3, cell4, cell5, cell6, cell7, cell8, cell9, cell10, cell11, cell12, cell13, cell14, cell15, cell16)
VALUES ('0', '00:00:00', '00/00/0000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0')");

header("location:index.php"); // kembali ke tampil data
?>