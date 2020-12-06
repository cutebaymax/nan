<?php
	include 'pegawai.php';
	include 'koneksi.php';

$pegawai =  new pegawai();

	$Id = $_POST['Id_Dept'];
	$Nama = $_POST['Nama_Dept'];
	$gaji = $_POST['gaji'];

	$query = "INSERT INTO tb_departement VALUES ('$Id', '$Nama','$gaji')";

	$exec=mysqli_query($con, $query);


	// Cek apabila berhasil disimpan
	if($exec){	
		echo "<script>alert('Data berhasil disimpan');
		window.location = 'inputdept.php';
		</script>";
}
ELSE {
	echo "<script>alert('Data gagal disimpan');
		window.location = 'inputdept.php';
		</script>";
}
?>