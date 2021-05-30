<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Quản trị hoa xinh</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="style/css/bootstrap.min.css" rel="stylesheet">
	<link href="style/css/k.css" rel="stylesheet">
	<link href="../styles/product.css" rel="stylesheet">
	<script src="style/js/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
	<div class="cs-admin">
		<?php
		if (isset($_SESSION["uid"])) {
			include("include/header.php");
			include("include/side_bar.php");
			echo '
				<div class="container-fluid ">
			<div class="col-md-9 content" style="margin-left:10px">
				<div class="panel panel-default" style="background-color: #36414a !important; color: white;">
					<div class="panel-heading" style="background-color: #36414a; color: white;">
						<h1>Welcome </h1>
					</div><br>
					<div >
  <canvas id="myChart" ></canvas>
</div>
					<div class="panel-body">
						<h3>' ?>
			<?php
			if (isset($_POST['success'])) {
				$success = $_POST["success"];
				echo "<h1 style='color:#0C0'>Your Product was added successfully &nbsp;&nbsp;  <span class='glyphicon glyphicon-ok'></h1></span>";
			}
			?> <?php echo '</h3>
					</div>
				</div>
			</div> </div>' ?>;
		<?php
		} else {
			echo '
				<div class="cs-login">
				<form class="modal-content animate" action="../login.php" method="post">
				<h2>Đăng nhập trang quản trị</h2>
					<div>
						<label for="uname"><b>Username</b></label>
						<input type="email" name="email" placeholder="Email" required>
					</div>
					<div>
						<label for="psw"><b>Password</b></label>
						<input type="password" name="password" placeholder="password" required>
					</div>
					<button type="submit" class="btn btn-primary">Login</button>
				</form>
				</div>
				';
		}
		?>
		<?php //include("include/js.php"); 
		?>
	</div>
	<script>
		const labels = [
			'January',
			'February',
			'March',
			'April',
			'May',
			'June',
		];
		const data = {
			labels: labels,
			datasets: [{
				label: 'Doanh Thu',
				backgroundColor: 'rgb(255, 99, 132)',
				borderColor: 'rgb(255, 99, 132)',
				data: [0, 10, 5, 2, 20, 30, 45],
			},
			{
				label: 'Order',
				backgroundColor: '#94d0cc',
				borderColor: '#94d0cc',
				data: [3, 20, 3, 5, 10, 28, 35],
			},
			{
				label: 'Product',
				backgroundColor: '#511281',
				borderColor: '#511281',
				data: [0, 18, 6, 7, 11, 26, 42],
			}
		]
		};
		const config = {
			type: 'line',
			data,
			options: {
				legend: {
					labels: {
						fontColor: "blue",
						fontSize: 18
					}
				}
			}
		};
		var myChart = new Chart(
			document.getElementById('myChart'),
			config
		);
	</script>
</body>

</html>