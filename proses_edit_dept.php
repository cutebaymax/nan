<?php 
	include 'koneksi.php';
	include 'pegawai.php';

	$pegawai = new pegawai();

	$id_dept = $_POST ['Id_Dept'];
	$nama = $_POST ['Nama_Dept'];

	$data = array( 
		'Nama_Dept' => $nama,
		'Id_Dept' => $id_dept
	);

	$query = "UPDATE tb_departement SET
	Nama_Dept = '$nama',
	WHERE Id_Dept = '$id_dept'";
	
	$exec = mysqli_query($con, $query);

	if ($exec) {
		echo "<script>alert('Data berhasil diperbaharui');
		window.location = 'inputdept.php';
		</script>";
	}
	else {
		echo "<script>alert('Data Gagal diperbaharui');
		window.location = 'inputdept.php';
		</script>";
	}
?>