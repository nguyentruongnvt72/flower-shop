<?php
include("../db.php");
error_reporting(0);
if (isset($_GET['action']) && $_GET['action'] != "" && $_GET['action'] == 'delete') {
  $product_id = $_GET['product_id'];
  $result = mysqli_query($con, "select product_image from products where product_id='$product_id'")
    or die("query is incorrect... 1");

  list($picture) = mysqli_fetch_array($result);
  $path = "../product_images/$picture";

  if (file_exists($path) == true) {
    unlink($path);
  } else {
  }
  $kkkk = mysqli_query($con, "DELETE FROM products WHERE product_id='$product_id'") ;
  // die($kkkk);
  echo "<script>console.log('Debug Objects: " . $kkkk . "' );</script>";
}
///pagination
$page = $_GET['page'];

if ($page == "" || $page == "1") {
  $page1 = 0;
} else {
  $page1 = ($page * 10) - 10;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Quản trị hoa xinh</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="style/css/bootstrap.min.css" rel="stylesheet">
  <link href="style/css/k.css" rel="stylesheet">
  <link href="../styles/product.css" rel="stylesheet">
  <script src="style/js/jquery.min.js"></script>
</head>

<body>
  <div class="cs-admin">
    <?php include("include/header.php"); ?>
    <div class="container-fluid ">
      <?php include("include/side_bar.php"); ?>
      <div class="col-md-9 content" style="margin-left:10px">
        <div class="panel-heading" style="background-color:#36414A; color: white;">
          <h1>Cosmetics List / Page <?php echo $page; ?></h1>
        </div><br>
        <div class='table-responsive'>
          <div style="overflow-x:scroll; background-color:#E6EEEE">
            <table class="table  table-hover table-striped" style="font-size:18px">
              <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>
                  <a class=" btn btn-primary" href="add_product.php">Add New</a>
                </th>
              </tr>

              <?php
              $result = mysqli_query($con, "select product_id,product_image, product_title,product_price from products  Limit $page1,10") or die("query 1 incorrect.....");

              while (list($product_id, $image, $product_name, $price) = mysqli_fetch_array($result)) {
                echo "<tr><td><img src='../product_images/$image' style='width:50px; height:50px;border:groove #000'></td><td>$product_name</td><td>$price</td>
<td>

<a class=' btn btn-success' href='product_list.php?product_id=$product_id&action=delete'>Delete</a>
</td></tr>";
              }

              ?>
            </table>
          </div>
        </div>
        <nav align="center">

          <?php
          //counting paging

          $paging = mysqli_query($con, "select product_id,product_image, product_title,product_price from products");
          $count = mysqli_num_rows($paging);

          $a = $count / 5;
          $a = ceil($a);
          echo "<bt>";
          echo "<bt>";
          for ($b = 1; $b <= $a; $b++) {
          ?>
            <ul class="pagination" style="border:groove #666">
              <li><a class="label-info" href="cosmetics_list.php?page=<?php echo $b; ?>"><?php echo $b . " "; ?></a></li>
            </ul>
          <?php
          }
          ?>
        </nav>
      </div>
    </div>
  </div>
  <?php include("include/js.php"); ?>
</body>

</html>