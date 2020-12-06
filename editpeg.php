<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
</head>
<body style="background-image: url('images/mac3.jpg'); background-size: cover;">
        <!--Navbar-->
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
    <br><br>
    <font color="white"> <h3 class="display-4" align="center">Input Pegawai</h3></font>
    <br>
    <div class="table-responsive">
      <?php
          include 'koneksi.php';
          include 'pegawai.php';
          $id = $_GET['id'];
          $query = "SELECT * FROM tbpegawai WHERE Id_Peg = '$id'";
          $exec = mysqli_query($con, $query);
          $raw = mysqli_fetch_array($exec);
        ?>
        <form method="POST" action="proses_edit_peg.php">
        <table class="table table-bordered table-striped" style="width: 60%; background-color: white;" align="center">
            <tr>
              <td>No.</td>
              <td><input type="text" name="Id_Peg" class="form-control" value="<?php echo $raw['Id_Peg'];?>"></td>
            </tr>
            <tr>
              <td>Nama</td>
              <td><input type="text" name="Nama_Peg" class="form-control" value="<?php echo $raw ['Nama_Peg']; ?>"></td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td><input type="text" name="Alamat" class="form-control" value="<?php echo $raw['Alamat']; ?>"></td>
            </tr>
            <tr>
              <td>Department</td>
              <td>
                <select name="Id_Dept" class="browser-default custom-select">
                    <?php
                          include "koneksi.php";

                          $query = "SELECT * FROM tb_departement";

                          $exec = mysqli_query($con, $query);

                          while($data = mysqli_fetch_array($exec))if ($data['Id_Dept'] == $raw['Id_Dept']) {
                        ?>
                      <option value="<?php echo $data['Id_Dept']; ?>">
                        <?php echo $data['Nama_Dept'];?>
                      </option>
                        <?php 
                      } else {
                   ?>
                        <option value="<?php echo $data ['Id_Dept']; ?>">
                        <?php echo $data['Nama_Dept']; ?> 
                        </option>
                        
                        <?php

                          }
                           
                      ?>
                </select>
              </td>
            </tr>
            <tr>
              <td colspan="2" align="right"><a href="inputpeg.php"><input type="submit" name="simpan" value="Simpan"></a></td>
            </tr>
        </table>
    </form>
        
    </div>
      

      <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap2.js"></script>
</body>
</html>