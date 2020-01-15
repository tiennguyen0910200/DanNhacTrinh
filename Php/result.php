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
					<a class="nav-link" href="../index.php">Trang Chủ <span class="sr-only">(current)</span></a>
				</li>
				
				
			</ul>
			
		</div>
	</nav>
	<br>
	
	<form>
		<?php include 'database.php';?>
		<div class="container">
			<div class="container">
				<div class="row">

					<?php for ($i=0; $i < count($searchh); $i++) { ?>

						<div class = "col-sm-3">
							<center><h5>	<?php echo $searchh[$i][1];  ?></h5></center>
							<center><img style="width: 200px; height: 200px" src="../Img/<?php   echo $searchh[$i][2]; ?>"></center>
							<br>
							<center><h5 style="color:red">	<?php echo $searchh[$i][3];   ?></h5></center>
							<center><p>	<?php echo $searchh[$i][4];  ?></p></center>
						</div>

					<?php } ?>
				</div>
			</div>
		</div>
	</form>
	<div style="background: #f6f9f9">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<center>
						<img src="../Img/logo.png" width="280px; height=280px;" alt="">
					</center></div>
					<div class="col-sm-4">
						<center><h3>Dàn nhạc Trịnh</h3>
							<br>
							<i class="fab fa-facebook"></i>Dàn nhạc Trịnh<br>
							<i class="fas fa-phone"></i>(+84)983 942 707<br>
							<i class="fas fa-envelope"></i>trinh.nguyen1968@gmail.com<br>
							<i class="fas fa-map-marker-alt"></i>Xuân Phú-Hòa Sơn-Hòa Vang-Đà Nẵng

						</center></div>


						<div class="col-sm-4">
							<center><h3>Dàn nhạc Trịnh</h3>
								<br>
								<p>Chúng tôi rất vui khi được phục vụ các bạn, luôn mong các bạn có được sự trải nghiệm tốt nhất.Hãy liên lạc với chúng tôi nhé các bạn!!!</p>
								<i>Chúng các bạn ngày vui vẻ!</i>


							</center></div>
						</div>

					</div>
				</div>
				<br>
				<br>
				<center><div style="background-color: #252525;color: white;"> &copy; 2020 - Design by Nguyen Thi Tien</div></center>



			</body>
			</html>