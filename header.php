<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Hoa xinh</title>
	<link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />


	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<link rel="stylesheet" href="css/font-awesome.min.css">

	<link rel="stylesheet" href="styles/product.css">

	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<link type="text/css" rel="stylesheet" href="css/accountbtn.css" />

</head>

<body>
	<header>
		<div id="top-header" class="cs-top-header">
			<ul class="header-links pull-left">
				<li><a href="#"><i class="fa fa-phone"></i> +91-9535688928</a></li>
				<li><a href="#"><i class="fa fa-envelope-o"></i> puneethreddy951@gmail.com</a></li>
				<li><a href="#"><i class="fa fa-map-marker"></i>Bangalore</a></li>
			</ul>
			<ul class="header-links pull-right">
				<li><?php
					include "db.php";
					if (isset($_SESSION["uid"])) {
						$sql = "SELECT first_name FROM user_info WHERE user_id='$_SESSION[uid]'";
						$query = mysqli_query($con, $sql);
						$row = mysqli_fetch_array($query);

						echo '
                               <div class="dropdownn">
                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> HI ' . $row["first_name"] . '</a>
                                  <div class="dropdownn-content">
                                    <a href="" data-toggle="modal" data-target="#profile"><i class="fa fa-user-circle" aria-hidden="true" ></i>My Profile</a>
                                    <a href="logout.php"  ><i class="fa fa-sign-in" aria-hidden="true"></i>Log out</a>
                                    
                                  </div>
                                </div>';
					} else {
						echo '
                                <div class="dropdownn">
                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> My Account</a>
                                  <div class="dropdownn-content">
                                    <a href="" data-toggle="modal" data-target="#Modal_login"><i class="fa fa-sign-in" aria-hidden="true" ></i>Login</a>
                                    <a href="" data-toggle="modal" data-target="#Modal_register"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a>
                                  </div>
                                </div>';
					}
					?>

				</li>
			</ul>
		</div>
		<div id="header" class="cs-header">
			<div class="col-md-3">
				<div class="header-logo">
					<a href="/flower-shop">
						<h1>Hoa xinh</h1>
					</a>

				</div>
			</div>
			<div class="col-md-6">
				<div class="header-search">
					<form>
						<input id="search" type="text" placeholder="Nhập tên sản phẩm">
						<button type="submit" id="search_btn" class="search-btn">Tìm kiếm</button>
					</form>
				</div>
			</div>
			<div class="col-md-3 clearfix">
				<div class="header-ctn">
					<div class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
							<i class="fa fa-shopping-cart"></i>
							<span>Giỏ hàng</span>
							<div class="badge qty">0</div>
						</a>
						<div class="cart-dropdown">
							<div class="cart-list" id="cart_product">
							</div>
							<div class="cart-btns">
								<a href="cart.php" style="width:100%;"><i class="fa fa-edit"></i>Xem giỏ hàng</a>
							</div>
						</div>

					</div>
					<div class="menu-toggle">
						<a href="#">
							<i class="fa fa-bars"></i>
							<span>Menu</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<nav id='navigation'>
		<div class="container" id="get_category_home">

		</div>
	</nav>

	<div class="modal fade" id="Modal_login" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<?php
					include "login_form.php";
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="Modal_register" role="dialog">
		<div class="modal-dialog" style="">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<?php
					include "register_form.php";
					?>
				</div>
			</div>
		</div>
	</div>