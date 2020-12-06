<?php 
	include 'pegawai.php';
	include 'koneksi.php';	

	$pegawai = new pegawai();

	$id_peg = $_POST ['Id_Peg'];
	$nama = $_POST ['Nama_Peg'];
	$alamat = $_POST ['Alamat'];
	$id_dept = $_POST ['Id_Dept'];

	$data = array( 
		'Id_Peg' => $id_peg,
		'Nama_Peg' => $nama,
		'Alamat' => $alamat,
		'Id_Dept' => $id_dept
	);

	$query = "UPDATE tbpegawai SET
	Nama_Peg = '$nama',
	Alamat = '$alamat',
	Id_Dept = '$id_dept'
	WHERE Id_Peg = '$id_peg'";
	
	$exec = mysqli_query($con, $query);

	if ($exec) {
		echo "<script>alert('Data berhasil diperbaharui');
		window.location = 'inputpeg.php';
		</script>";
	}
	else {
		echo "<script>alert('Data Gagal diperbaharui');
		window.location = 'inputpeg.php';
		</script>";
	}
?>