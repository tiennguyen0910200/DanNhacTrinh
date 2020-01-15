<?php 
$db = new mysqli("localhost", "root", "", "DanNhac");
$sql = "SELECT * from introduce";
$result = $db->query($sql)->fetch_all();

$sql1 = "SELECT * from service";
$result1 = $db->query($sql1)->fetch_all();


$sqlw = "SELECT * from why";
$resultw = $db->query($sqlw)->fetch_all();


$sql3 = "SELECT * from employee";
$result3 = $db->query($sql3)->fetch_all();

if(isset($_POST['detail'])){
$sql_detail = "SELECT * from service1 WHERE id = ".$_POST['detail'];
$get_detail= $db->query($sql_detail)->fetch_all();

}

$sql_cart_all = "SELECT carts.cartId, Users.fullName, service1.names, carts.quantity , carts.price 
	FROM Users, carts, service1 WHERE carts.cusId = users.id and carts.serviceId = service1.id";
	$get_all_cart= $db->query($sql_cart_all)->fetch_all();


if (isset($_POST["booking"])) {
	$sql_update = "UPDATE carts
SET dayStart = '".$_POST["date"]."'
WHERE userId = ".$_SESSION["id"];
$db->query($sql_update);
}

if(isset($_SESSION['id'])){
$sql_cart_by_id = "SELECT carts.cartId, Users.fullName, service1.names, carts.quantity , carts.price 
	FROM Users, carts, service1 WHERE carts.cusId = users.id and carts.serviceId = service1.id and carts.cusId = ".$_SESSION['id'];
	$get_cart_by_id = $db->query($sql_cart_by_id)->fetch_all();

}

if(isset($_POST['cart'])){

	$sql_detail = "SELECT * from service1 WHERE id = ".$_POST['cart'];
	$get_detail= $db->query($sql_detail)->fetch_all();
	$sql_cart = "INSERT INTO Carts(cusId,serviceId,quantity,price) VALUES ('".$_SESSION['id']."','".$get_detail[0][0]."',1,'".$get_detail[0][4]."')";
	$db->query($sql_cart);
}

if (isset($_POST['them'])) {
	$db->query("INSERT INTO employee(name,image,address,phone,assignment) values('".$_POST['ten']."','".$_POST['anh']."','".$_POST['dc']."','".$_POST['sdt']."','".$_POST['select']."')"); 
}
//header("Refresh: 0");
if (isset($_POST['xoa'])) {
	$db->query("delete from employee where id = ".$_POST['xoa']);
	// header("Refresh:0; url=themnv.php");
}

if(isset($_POST['capnhat']))
$db->query("UPDATE employee SET name='".$_POST['ten']."',image='".$_POST['anh']."',address='".$_POST['diachi']."',phone='".$_POST['sdt']."',assignment='".$_POST['select']."' WHERE id='".$_POST['sua']."'");
   ?>

<?php 

   $sql2 = "SELECT * from service";
    $result2 = $db->query($sql2)->fetch_all();

$sql4 = "SELECT * from service1";
$result4 = $db->query($sql4)->fetch_all();

if (isset($_POST['themdv'])) {{
	$db->query("INSERT INTO service1(names,images,emp,price) values('".$_POST['select']."','".$_POST['anhdv']."','".$_POST['tennv']."','".$_POST['giadv']."')");
	//header("Refresh:0");

}
}


 if (isset($_POST['suadv'])) {
		$sql_insert = "UPDATE service1 SET names = '".$_POST['ten']."', images = '".$_POST['anhdv']."',emp ='".$_POST['tennv']."', price = '".$_POST['giadv']."' WHERE id = ".$_POST['suadv'];
		
		$db->query($sql_insert);

	} 


if(isset($_POST["detail"])){
$_SESSION["detail"] = $_POST["detail"];
				
			}

if(isset($_SESSION["detail"])){
					$sv_detail_sql = "SELECT * from service1 where id = ".$_SESSION["detail"];
					$sv_detail = $db->query($sv_detail_sql)->fetch_all();
				}


if (isset($_POST['xoa'])) {
	$db->query("delete from service1 where id = ".$_POST['xoa']);
	// header("Refresh:0; url=themdv.php");
}
$sql5 = "SELECT * from emp";
$result5 = $db->query($sql5)->fetch_all();



$sql6 = "SELECT * from Users";
$result6 = $db->query($sql6)->fetch_all();

$sql7 = "SELECT * from manager";
$result7 = $db->query($sql7)->fetch_all();

if(isset($_POST['sua'])){
	$get_employee_to_edit = "SELECT * from employee where id = ".$_POST['sua'];
	$get_edit = $db->query($get_employee_to_edit)->fetch_all();
}



								if(isset($_POST["sua1"])){
									$sql = "SELECT * FROM service1 WHERE id = ".$_POST["sua1"];
									$sql22 = $db->query($sql)->fetch_all();
								}

								if (isset($_POST['search'])) {
					if (isset($_POST['inputSearch'])) {
						$_SESSION['search'] = $_POST['inputSearch'];
					}
				} 
				if (isset($_SESSION['search'])) {
					$sql_search = "SELECT * from service1 WHERE names LIKE '%".$_SESSION['search']."%'";
					$searchh = $db->query($sql_search)->fetch_all();;
				}
?>