<!DOCTYPE html>
<html>
<head>
  <title>Input Pegawai</title>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
</head>
<body style="background-image: url('images/macbook.jpg'); background-size: cover;">
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
        <form method="POST" action="prosespeg.php">
        <table class="table table-bordered table-striped" style="width: 60%; background-color: white;" align="center">
            <tr>
              <td>ID</td>
              <td><input type="text" name="Id_Peg" class="form-control"></td>
            </tr>
            <tr>
              <td>Nama</td>
              <td><input type="text" name="Nama_Peg" class="form-control"></td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td><input type="text" name="Alamat" class="form-control"></td>
            </tr>
            <tr>
              <td>Department</td>
              <td>
                <select name="Id_Dept" class="browser-default custom-select">
                    <?php
                          include "koneksi.php";

                          $query = "SELECT * FROM tb_departement";

                          $exec = mysqli_query($con, $query);

                          while($data = mysqli_fetch_array($exec)) {
                        ?>
                      <option value="<?php echo $data['Id_Dept'];?>">
                        <?php echo $data['Nama_Dept'];?>
                      </option>
                        <?php } ?>
                </select>
              </td>
            </tr>
            <tr>
             <td colspan="2" align="right"><a href="inputpeg.php"><input type="submit" name="simpan" value="Simpan"></a></td>
            </tr>
        </table>
        <table class="table table-bordered table-striped" style="background-color: white; width: 60%;" align="center">
          <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Department</th>
              <th colspan="2" style="text-align: center;">Action</th>
          </tr>
          <?php
            include "koneksi.php";
            $query = "SELECT * FROM tb_departement
            AS a INNER JOIN tbpegawai AS b ON a.Id_Dept = b.Id_Dept";
              $exec = mysqli_query($con, $query);
                while ($data = mysqli_fetch_array($exec)) {
      ?>
          <tr>
              <td><?php echo $data['Id_Peg']?></td>
              <td><?php echo $data['Nama_Peg']?></td>
              <td><?php echo $data['Alamat']?></td>
              <td><?php echo $data['Nama_Dept']?></td>
              <td><a href="delete.php?id=<?php echo $data['Id_Peg'];?>" class="btn btn-link"><i class="fa fa-trash">Delete</i></a></td></a></td>
              <td><i class="fa fa-pencil"><a href="editpeg.php?id=<?php echo $data['Id_Peg'];?>" class="btn btn-link"><font color="black"> Edit</font></a></i></button></td>
          </tr>
      <?php
        }
      ?>
        </table>
    </form>
        
    </div>
    <footer id="sticky-footer" class="py-4 bg-dark text-white-50" style=" position: relative; clear: both; margin-top: 28px; height: 70px;">
            <div class="container text-center">
              <small>Copyright &copy; NET.SD</small>
            </div>
          </footer>
      

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap2.js"></script>
</body>
</html>