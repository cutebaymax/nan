<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" type="text/css" href="assets/css/style.css">
	 <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  	 <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
</head>
<body style="background-image: url('images/mac2.png'); background-position: center; background-size: cover;">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  			<a class="navbar-brand" href="#">
  				<img src="images/icons/images.png" height="50">
  			</a>
  				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    				<span class="navbar-toggler-icon"></span>
  				</button>

  			<div class="collapse navbar-collapse" id="navbarSupportedContent">
    			<ul class="navbar-nav mr-auto">
      				<li class="nav-item active">
        				<a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      				</li>
      				<li class="nav-item dropdown">
        				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          					Kepegawaian
        				</a>
       						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          						<a class="dropdown-item" href="inputpeg.php">Input Pegawai</a>
          						<a class="dropdown-item" href="inputdept.php">Input Department</a>
          						<div class="dropdown-divider"></div>
          							<a class="dropdown-item" href="absensi.php">Absensi</a>
          							<a class="dropdown-item" href="gaji.php">Penggajian</a>
        					</div>
      				</li>
      
    			</ul>
    			<form class="form-inline my-2 my-lg-0" action="logout.php">
      				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
    			</form>
  			</div>
		</nav>
			<br><br><br><br><br><br>

	<?php
          include 'koneksi.php';
          include 'pegawai.php';
          $id = $_GET['id'];
          $query = "SELECT * FROM tb_departement WHERE Id_Dept = '$id'";
          $exec = mysqli_query($con, $query);
          $raw = mysqli_fetch_array($exec);
        ?>
	<div class="table-responsive">
        	<form method="POST" action="proses_edit_dept.php">
        		<font color="white"><h3 align="center" class="display-4">Edit Department</h3></font>
        		<table class="table table-bordered table-striped" style="width: 60%; background-color: white;" align="center">
        			<tr>
              			<td>Id Dept</td>
              			<td><input type="text" name="Id_Dept" class="form-control" value="<?php echo $raw['Id_Dept'];?>"></td>
            		</tr>
            		<tr>
            			<td>Nama</td>
              			<td><input type="text" name="Nama_Dept" class="form-control" value="<?php echo $raw['Nama_Dept'];?>"></td>
            		</tr>
            		<tr>
            			 <td colspan="2" align="right"><a href="inputdept.php"><input type="submit" name="simpan" value="Simpan"></a></td>
            		</tr>
        		</table>
        	</form>
        </div>
        <script src="assets/js/jquery.js"></script>
		<script src="assets/js/bootstrap2.js"></script>
</body>
</html>