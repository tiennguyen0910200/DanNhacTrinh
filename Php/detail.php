<!DOCTYPE html>
<html>
<head>
	<title>Xem nhieu hon</title>
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
	<?php session_start(); ?>
	<div  style="background-color: #252525; color:white; width: 100%; height: 40px; font-size: 15.5px;" >
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<i class="fas fa-mobile-alt">&emsp;(+84)983 942 707</i>
				</div>
				<div class="col-sm-4">
					<i class="fas fa-map-marker-alt">&emsp;Xuân Phú - Hòa Sơn - Hòa Vang - TP. Đà Nẵng</i>
				</div>
				<div class="col-sm-4">
					<i class="fab fa-facebook">&emsp;Dàn Nhạc Trịnh</i>
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
					<a class="nav-link" href="User.php">Trang Chủ <span class="sr-only">(current)</span></a>
				</li>
				
				
			</ul>
			
		</div>
	</nav>
	<br>
	
	<form>
		<?php include 'database.php';?>
		<center><h1 style="font-style: 45; color:#a83250;"><?php echo $sv_detail[0][1]; ?></h1></center>
		<br>
		<div class="container">
			<div class="row">


				<div class="col-sm-6">
					<img style="width: 450px;height: 400px;" src="../Img/<?php echo $sv_detail[0][2]; ?>">
				</div>


				<div style="margin-top: 70px;" class="col-sm-6">


					<p>Mã:<?php echo $sv_detail[0][0]; ?></p>
					<p>Tên:<?php echo $sv_detail[0][1]; ?></p>
					<p>Người chơi:<?php echo $sv_detail[0][3]; ?></p>
					<p>Giá:<?php echo number_format( $sv_detail[0][4]);  ?></p>
					<p>Giới thiệu:<?php echo $sv_detail[0][5]; ?></p>


				</div>
			</div>
		</div>
	</form>
	<br>
	<br>
	<footer>
		<center><div style="background-color: #252525;color: white;"> &copy; 2020 - Design by Nguyen Thi Tien</div></center>
	</footer>
	



</body>
</html>