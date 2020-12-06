<?php
	include 'pegawai.php';
	include 'koneksi.php';

$pegawai =  new pegawai();

	$Id = $_POST['Id_Peg'];
	$Nama = $_POST['Nama_Peg'];
	$Alamat = $_POST['Alamat'];
	$Id_Dept = $_POST['Id_Dept'];


	$query = "INSERT INTO tbpegawai VALUES ('$Id', '$Nama', '$Alamat', '$Id_Dept')";

	$exec = mysqli_query($con, $query);


	// Cek apabila berhasil disimpan
	if($exec){	
		echo "<script>alert('Data berhasil disimpan');
		window.location = 'inputpeg.php';
		</script>";
}
ELSE {
	echo "<script>alert('Data gagal disimpan');
		window.location = 'inputpeg.php';
		</script>";
}
?>