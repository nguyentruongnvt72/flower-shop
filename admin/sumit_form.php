<?php
$link = $_REQUEST['success'];
?>
<html>

<head>
	<script>
		function myfunction() {
			document.getElementById("success").click();
		}
	</script>
</head>

<body onLoad="myfunction()">
	<form action="index.php" method="post" id="myform" accept-charset="utf-8">
		<input hidden="" type="text" name="success" value="<?php echo "$link"; ?>">
		<button hidden="" type="submit" id="success" data-modal="success" name="success" value="success"></button>
	</form>

	<h1 style="padding-left:400px; padding-top:200px;"><img src="../images/loading-x.gif" /></h1>
</body>

</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Quản trị hoa xinh</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="style/css/bootstrap.min.css" rel="stylesheet">
	<link href="style/css/k.css" rel="stylesheet">
	<link href="../styles/product.css" rel="stylesheet">
	<script src="style/js/jquery.min.js"></script>

<body>
</body>

</html>