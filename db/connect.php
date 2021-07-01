<?php 
$koneksi = mysqli_connect("localhost", "root", "", "poin_a");

if (mysqli_connect_errno()){
	"Koneksi ke database gagal". mysqli_connect_error();
 };
 ?>