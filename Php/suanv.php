<!DOCTYPE html>
<html>
<head>
	<title>Thêm</title>
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
					<a class="nav-link" href="../Php/admin.php">Trang Chủ <span class="sr-only">(current)</span></a>
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
				<i class="fas fa-cart-arrow-down"></i>&emsp;
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button style="margin-right: 240px" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>
	<br>
	<?php include 'database.php';?>
	<form action="" method="POST" role="form">
		<legend style="font-size: 46px; color:red; text-align: center;">Sửa Nhân Viên</legend>

		<div class="form-group">
			<label for="">Tên</label>
			<input type="text" name="ten" class="form-control" value="<?php echo $get_edit[0][1] ?>">
			<label for="">Địa chỉ</label>
			<input type="text" name="dc" class="form-control"  value="<?php echo $get_edit[0][4] ?>" >
			<label for="">Số điện thoại</label>
			<input type="text" name="sdt" class="form-control" value="<?php echo $get_edit[0][5] ?>" >
			<label for="">Chọn</label>
			<select name="select" id="input" class="form-control" value="<?php echo $get_edit[0][3] ?>" required="required">
				<option value="">Chỉnh âm</option>
				<option value="">Nhạc công</option>
				<option value="">MC</option>
			</select>
		</div>
		<button type="submit" name="themnv" class="btn btn-primary" >Sửa</button>
	</form>
	<br>
	
	<div>
		<?php if (isset($_POST['themnv'])) {
		$sql_insert = "UPDATE employee SET name = '".$_POST['ten']."', address = '".$_POST['dc']."',phone ='".$_POST['sdt']."', assignment = '".$_POST['select']."' WHERE id = ".$_SESSION['sua'];
		
		$db->query($sql_insert);
	} ?>
	<br>
				<center><div style="background-color: #252525;color: white;"> &copy; 2020 - Design by Nguyen Thi Tien. All Rights Reserved.</div></center>
</div>
</body>
</html>