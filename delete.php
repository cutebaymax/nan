<?php
	include 'koneksi.php';
	include 'pegawai.php';
	$pegawai = new pegawai();
	$id = $_GET ['id'];

	$query = mysqli_query($con, "DELETE FROM tbpegawai WHERE Id_Peg = '$id'");

	echo "<script>alert('Data berhasil dihapus');
		  window.location = 'inputpeg.php'; 
		  </script>";
  ?>