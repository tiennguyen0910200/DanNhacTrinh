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
				<li class="nav-item">
					<a class="nav-link" href="#">Tư Vấn</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Đám cưới
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Đám hỏi</a>
						<a class="dropdown-item" href="#">Liên hoan</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Nhạc sống</a>
					</div>
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
	<center><h1 style="font-size: 56px;color:#a83250">Hello</h1></center>
	
	<br>
	<?php include 'database.php';?>
	<form method="post" action="">
		
		<div class="container">
			<div class="row">
				<?php for ($i=0; $i < count($result4)  ; $i++) { 
					?>
					<div class="col-sm-3">
						<div class="border" >
							<h5><?php echo $result4[$i][1];  ?></h5>
							<img style="width: 200px; height: 200px" src="../Img/<?php  echo $result4[$i][2]; ?>">
							<p><?php echo $result4[$i][3];  ?></p>
							<p><?php echo $result4[$i][4];  ?></p>
							
						</div>
					</div>
				<?php } ?>
				<div class="modal" id="myModal">
					<div class="modal-dialog">
						<div class="modal-content">
							<?php include 'database.php';?>
							<!-- Modal Header -->
							<div class="modal-header">
								<h4 class="modal-title"><?php echo $get_detail[0][1]; ?></h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<!-- Modal body -->
							<div class="modal-body">

								<p>Mã:<?php echo $get_detail[0][0]; ?></p>
								<p>Tên:<?php echo $get_detail[0][1]; ?></p>
								<p>Ảnh:<br><img src="../Img/<?php  echo $get_detail[0][2]; ?>" style="width: 400px; height: 400px;"  alt=""></p>
								<p>Người chơi:<?php echo $get_detail[0][3]; ?></p>
								<p>Giá:<?php echo $get_detail[0][4]; ?></p>
								<p>Giới thiệu:<?php echo $get_detail[0][5]; ?></p>


							</div>

							<!-- Modal footer -->
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							</div>

						</div>
					</div>
				</div> 
			</div>
		</div>
		

	</form>
</div>

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
						<i class="fas fa-phone"></i>(+84)983 942 707
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
			<center><div style="background-color: #252525;color: white;"> &copy; 2020 - Design by Nguyen Thi Tien. All Rights Reserved.</div></center>


		</body>
		</html>