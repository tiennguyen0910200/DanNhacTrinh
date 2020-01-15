<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">



	<link rel="stylesheet" type="text/css" href="../Css/style.css">
</head>
<body>
	<?php 
	session_start();
	if(!isset($_SESSION['admin'])){
	header("Location:../index.php");
	}
	else{
		if($_SESSION['admin']==true){
		} else if($_SESSION['admin']==false){
			header("Location:user.php");
		}
	}
	 ?>
	<div  style="background-color: #252525; color:white; width: 100%; height: 40px; font-size: 15.5px;" >
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<i class="fas fa-mobile-alt">(+84)983 942 707</i>
				</div>
				<div class="col-sm-3">
					<i class="fas fa-map-marker-alt">Xuân Phú - Hòa Sơn - Hòa Vang - TP. Đà Nẵng</i>
				</div>
				<div class="col-sm-3">
					<i class="fab fa-facebook">Dàn Nhạc Trịnh</i>
				</div>
				<div class="col-sm-3">
					<form method="post">
						<a href="cart.php"><i class="far fa-bell"></i></a>&emsp;
						<button type="submit" name="log-out"><i class="fas fa-sign-out-alt">Đăng xuất</i></button>
					</form>
					<?php
					
					 if(isset($_POST['log-out'])){
					 	session_destroy();
					 	header("refresh:0");
					}
					 ?>
				</div>
				

			</div>
		</div>
	</div>
	<nav  class="navbar navbar-expand-lg navbar-light bg-light">
		<img style="margin-left: 200px;" src="../Img/logo.png" width="110px;" height="110px;" alt="">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="../index.php">Trang Chủ <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="themnv.php">Quản lí nhân viên</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="themdv.php">Quản lí dịch vụ</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Khác</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button style="margin-right: 240px" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>
	<br>

	<center><h1 style="color:#a83250;">NHÂN VIÊN</h1></center>
	<table class="table table-sm table-inverse table-hover">
		
		<tr>
			<th>Id</th>
			<th>Tên</th>
			<th>Ảnh</th>
			<th>Địa chỉ</th>
			<th>Số điện thoại</th>
			<th>Chuyên môn</th>
		
		</tr>
		
		<tbody>
			<?php include 'database.php';?>
			<form method="POST">
				<?php
				for ($i=0; $i < count($result3)  ; $i++) { 
					?>
					<tr>
						<td><?php  echo $result3[$i][0]; ?></td>
						<td><?php  echo $result3[$i][1]; ?></td>
						<td style="width: 300px"><img style="width: 100px; height: 100px" src="../Img/<?php  echo $result3[$i][2]; ?>"></td>

						<td><?php  echo $result3[$i][4]; ?></td>
						<td><?php  echo $result3[$i][5]; ?></td>
						<td><?php  echo $result3[$i][3]; ?></td>
						
						</tr>
					<?php } ?>


				</form>
			</tbody>
		</table>
		<hr>
		<br>
		<center><h1 style="color:#a83250;">DỊCH VỤ</h1></center>
		<table class="table table-hover">
		
		<tr>
			<th>Id</th>
			<th>Tên dịch vụ</th>
			<th>Ảnh</th>
			<th>Tên nhân viên</th>
			<th>Giá</th>
			
		</tr>
		
		<tbody>
			<?php include 'database.php';?>
			<form method="POST">
				<?php
				for ($i=0; $i < count($result4)  ; $i++) { 
					?>
					<tr>
						<td><?php  echo $result4[$i][0]; ?></td>
						<td><?php  echo $result4[$i][1]; ?></td>
						<td style="width: 300px"><img style="width: 100px; height: 100px" src="../Img/<?php  echo $result4[$i][2]; ?>"></td>

						<td><?php  echo $result4[$i][3]; ?></td>
						<td><?php  echo $result4[$i][4]; ?></td>
						</tr>
					<?php } ?>


				</form>
			</tbody>
		</table>
		<br>
				<center><div style="background-color: #252525;color: white;"> &copy; 2020 - Design by Nguyen Thi Tien</div></center>
	</body>
	</html>