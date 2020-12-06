<!DOCTYPE html>
<html>
<head>
	<title>Absensi</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
  	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
</head>
<body style="background-image: url('images/imac.jpg'); background-size: cover;">
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
                      <a class="dropdown-item" href="inputdept.php">Input Departemen</a>
                      <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="absensi.php">Absensi</a>
                        <a class="dropdown-item" href="penggajian.php">Penggajian</a>
                  </div>
              </li>
      
          </ul>
          <form class="form-inline my-2 my-lg-0" action="logout.php">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
          </form>
        </div>
    </nav>

    <br>
    <h2 class="display-4" align="center"><font color="yellow">INPUT ABSENSI</font></h2>
    <div class="table-responsive" style="margin-top: 50px;">
        <form method="POST" action="prosesgaji.php">
        <table class="table table-bordered table-striped" style="width: 60%; background-color: white;" align="center">
            <tr>
              <td>ID Absen</td>
              <td><input type="text" name="id_absen" class="form-control"></td>
            </tr>
            <tr>
              <td>ID Pegawai</td>
              <td>
              	<select name="Id_Peg" class="browser-default custom-select">
                    <?php
                          include "koneksi.php";

                          $query = "SELECT * FROM tbpegawai";

                          $exec = mysqli_query($con, $query);

                          while($data = mysqli_fetch_array($exec)) {
                        ?>
                      <option value="<?php echo $data['Id_Peg'];?>">
                        <?php echo $data['Id_Peg'];?>
                      </option>
                        <?php } ?>
                </select></td>
            </tr>
            <tr>
              <td>Kehadiran</td>
              <td><input type="text" name="kehadiran" class="form-control"></td>
            </tr>
            <tr>
              <td>Gaji</td>
              <td><input type="text" name="gaji" class="form-control"></td>
            </tr>
            <tr>
             <td colspan="2" align="right"><a href="penggajian.php"><input type="submit" name="simpan" value="Simpan"></a></td>
            </tr>
       	 </table>
    	</form>
	</div>
    <footer id="sticky-footer" class="py-4 bg-dark text-white-50" style=" position: relative; clear: both; margin-top: 134px; height: 70px; ">
            <div class="container text-center">
              <small>Copyright &copy; NET.SD</small>
            </div>
          </footer>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap2.js"></script>
</body>
</html>