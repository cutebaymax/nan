<?php
	include 'koneksi.php';
	include 'pegawai.php';
	
	$pegawai = new pegawai();

	$id_absen = $_POST['id_absen'];
	$kehadiran = $_POST['kehadiran'];
	$gaji = $_POST['gaji'];
	$peg = $_POST['Id_Peg'];

	$query = "INSERT INTO absen VALUES ('$id_absen', '$kehadiran', '$gaji', '$peg')";

	$exec = mysqli_query($con, $query);


	// Cek apabila berhasil disimpan
	if($exec){	
		echo "<script>alert('Data berhasil disimpan');
		window.location = 'penggajian.php';
		</script>";
}
ELSE {
	echo "<script>alert('Data gagal disimpan');
		window.location = 'absensi.php';
		</script>";
}
?>