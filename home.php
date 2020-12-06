<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<body style="background-image: url('bg2.jpg');">

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

		<!--Carousel-->
		
			<br>
			<br>
			
			<table width="95%" align="center">
				
				<tr>
					<td>
						<div class="card" style="width: 18rem;" align="center">
							<div class="col-4-lg">
							</div>
  							<img class="card-img-top" src="images/pegawai.jpg" alt="Card image cap" height="250">
  							<div class="card-body">
    								<h5 class="card-title">Input Pegawai</h5>
    								<p class="card-text">Form penambahan pegawai</p>
    								<br>
    							<form method="post" action="inputpeg.php">
  									<button type="submit" class="btn btn-outline-primary">Input Sekarang</button>
  								</form>
  							</div>
  							
  							
						</div>
					</td>
					<td>
						<div class="card" style="width: 18rem;" align="center">
							<div class="col-4-lg">
							</div>
  							<img class="card-img-top" src="images/money.jpg" alt="Card image cap" height="250">
  							<div class="card-body">
  									<br>
    								<h5 class="card-title">Penggajian</h5>
    								<p class="card-text">Form Penggajian</p>
  									<form method="post" action="">
										<a href="penggajian.php">
											<button type="button" class="btn btn-outline-primary">
												Lihat Sekarang</button></a>				
											</form>
  							</div>
						</div>
					</td>
					<td>
						<div class="card" style="width: 18rem;">
							<div class="col-4-lg-ml-3">
							</div>
									<img class="card-img-top" src="images/Department.jpg" alt="Card image cap" height="250">
										<div class="card-body" align="center">
												<br>
												<h5 class="card-title">Input Department</h5>
												<p class="card-text">Form Departement </p>
											<form method="post" action="prosesdept.php">
												<a href="inputdept.php">
												<button type="button" class="btn btn-outline-primary">
												Input Sekarang</button></a>				
											</form>
										</div>
						</div>	
					</td>
					<td>
						<div class="card" style="width: 18rem;">
							<div class="col-4-lg-ml-3">
							</div>
									<img class="card-img-top" src="images/absen.jpg" alt="Card image cap" height="250">
										<div class="card-body" align="center">
												<br>
												<h5 class="card-title">Input Absensi</h5>
												<p class="card-text">Form Absensi </p>
													<form method="post" action="">
												<a href="absensi.php">
												<button type="button" class="btn btn-outline-primary">
												Input Sekarang</button></a>				
											</form>
										</div>
						</div>	
					</td>
				</tr>		
			</table>	
				
			
				<!-- Footer -->
				<footer id="sticky-footer" class="py-4 bg-dark text-white-50" style=" position: relative; clear: both; margin-top: 28px; height: 70px;">
    				<div class="container text-center">
 	 				    <small>Copyright &copy; NET.SD</small>
    				</div>
  				</footer>
					<!-- Footer -->
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/bootstrap2.js"></script>

	</body>
</html>