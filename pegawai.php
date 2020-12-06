<?php
	include 'koneksi.php';
	class pegawai 
	{
		
		function simpan_pegawai($data)
		{
			include 'koneksi.php';
			$query = "INSERT INTO tbpegawai SET 
			('".$data['Id']."',
			'".$data['Nama']."',
			'".$data['Alamat']."',
			'".$data['Id_Dept']."')";		
		
			$exec = mysqli_query($con, $query);
		return $exec;
		}

		function edit_pegawai ($data, $Id_Peg)
		{
			include 'koneksi.php';
			$query = "UPDATE tbpegawai VALUES 
			Nama_Peg = '".$data['Nama']."',
			Alamat 	  =	'".$data['Alamat']."',
			Id_Dept   =	'".$data['Id_Dept']."'
			WHERE Id_Peg = '".$id_peg."'";	
		
			$exec = mysqli_query($con, $query);
		return $exec;
		}
		
		function delete_pegawai($id)
		{

			include 'koneksi.php';
			$query = "DELETE FROM tbpegawai WHERE Id_Peg = '$id'";
			
			$exec = mysqli_query($con, $query);
				return $exec;

		}

		function simpan_dept($id)
		{
			include 'koneksi.php';
			$query = "INSERT INTO tb_departement VALUES 
			Nama_Dept = '".$data['Nama_Dept']."',
			gaji = '".$data['gaji']."',
			WHERE Id_Dept = '".$Id."'";
			$exec = mysqli_query($con, $query);
			return $exec;
		}
		
		function simpan_absen($id_absen)
		{
			include 'koneksi.php';
			$query = "INSERT INTO absen VALUES 
			kehadiran = '".$data['kehadiran']."',
			gaji = '".$data['gaji']."',
			Id_Peg = '".$data['peg']."',
			WHERE id_absen = '".$id_absen."'";
			$exec = mysqli_query($con, $query);
			return $exec;
		}	
	}

	
	/**
	 * 
	 */
		
		
	
?>
