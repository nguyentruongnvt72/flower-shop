<div class="col-md-2 ">
  <div class="cs-sidebar" style="display: flex; flex-direction: column;">
    <button type="button" class="btn btn-default" onClick="location.href='index.php'" >
      <span class="glyphicon glyphicon-home pull-left"></span> Dashboard
    </button>
    <button type="button" class="btn btn-default btn-success" onClick="location.href='orders.php'" >
      <span class="glyphicon glyphicon-edit pull-left"></span> Đơn Đặt Hàng
    </button>

    <button type="button" class="btn btn-default btn-primary" onClick="location.href='add_product.php'" >
      <span class="glyphicon glyphicon-edit pull-left"></span> Thêm Sản Phẩm
    </button>

    <button type="button" class="btn btn-default btn-primary" onClick="location.href='manage_users.php'" >
      <span class="glyphicon glyphicon-edit pull-left"></span> Quản Lý Người Dùng
    </button>
    <!-- <button type="button" class="btn btn-default btn-primary" onClick="location.href='add_user.php'">
      <span class="glyphicon glyphicon-edit pull-left"></span> Thêm người dùng
    </button> -->
    <!-- <div style="display: flex; flex-direction: column;"> -->
      <button type="button" class="btn btn-default dropdown-toggle btn-primary" onClick="location.href='product_list.php'" >
        <span class="glyphicon glyphicon-edit pull-left"></span> Danh sách sản phẩm
        <!-- <span class="glyphicon glyphicon-triangle-bottom pull-right"></span> -->
      </button>
      <!-- <div style="display: none; flex-direction: column;" id="cs-dmt">
        <a href="clothes_list.php" class="btn  btn-default btn-primary" ><strong>Hoa tươi</strong> </a>
        <a href="cosmetics_list.php" class="btn  btn-default btn-primary" ><strong>Tiểu cảnh</strong></a>
      </div> -->
    <!-- </div> -->
  </div>

</div>
<script>
  document.getElementById("dropdownMenuButton").addEventListener('click', () => {
    var x = document.getElementById('cs-dmt').style.display;
    document.getElementById('cs-dmt').style.display = x === "none" ? 'flex' : 'none'
  })
</script>