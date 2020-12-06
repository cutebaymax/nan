<!DOCTYPE html>
<html>
<head>
	<title>Penggajian</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
  	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
</head>
<body style="background-image: url('images/imac2.jpg'); background-size: cover;">
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
    <div class="table-responsive">
      <h3 class="display-4" align="center" style="margin-top: 20px;"><font color="yellow">Penggajian</font></h3>
        <form method="POST" action="" style="margin-top: 80px;">
        <table class="table table-bordered table-striped" style="background-color: white; width: 60%;" align="center">
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>ID Dept</th>
            <th>Kehadiran</th>
            <th>Gaji</th>
          </tr>
          <?php
            include "koneksi.php";
            $query = "SELECT * FROM absen
            AS a INNER JOIN tbpegawai AS b ON a.Id_Peg = b.Id_Peg";
              $exec = mysqli_query($con, $query);
                while ($data = mysqli_fetch_array($exec)) {
      ?>
          <tr>
              <td><?php echo $data['Id_Peg']?></td>
              <td><?php echo $data['Nama_Peg']?></td>
              <td><?php echo $data['Alamat']?></td>
              <td><?php echo $data['Id_Dept']?></td>
              <td><?php echo $data['kehadiran']?></td>
              <td><?php echo $data['gaji']?></td>
          </tr>
      <?php
        }
      ?>
        </table>
    </form>
    <footer id="sticky-footer" class="py-4 bg-dark text-white-50" style=" position: relative; clear: both; margin-top: 360px; height: 70px; ">
            <div class="container text-center">
              <small>Copyright &copy; NET.SD</small>
            </div>
          </footer>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap2.js"></script>
</body>
</html>