<?php
require "head.php";
require "../api/getitems.php";

$products = get_all_product(1,1024);
$types  = get_type();
$brands = get_brand();
include "./modal/editproduct.php";
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Product Manager</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                <h3 class="card-title col-5">Quản lý sản phẩm</h3>
                  <div class="col"></div>
                    <button type="button" onclick="clear_all()" class="btn btn-success " data-toggle="modal" data-target="#modal-default">
                 Thêm sản phẩm
                </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                  <th></th>

                  <th>Tên</th>
                    <th>Loại</th>
                    <th>Đơn Giá</th>
                    <th>Kích hoạt</th>
                    <th>Cài đặt</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($products as $prd){ ?> 
                  <tr>

                    <td><?php echo $prd['p_id']; ?></td>
                    <td><?php echo $prd['p_name']; ?>
                    </td>
                    <td><?php echo $prd['p_type_name']; ?></td>
                    <td><?php echo $prd['p_price']; ?></td>
                    <td><?php echo $prd['p_active']; ?></td>
                        <td>
                        <button type="button" class="btn btn-danger deleteProduct" data-id="<?php echo $prd['p_id']; ?>">
    Xoá
  </button>
  <button type="button" id="edit-btn" class="btn btn-success editProduct" onclick="document.querySelector('.addProduct').disabled = true;" data-target="#modal-default" data-toggle="modal" data-id="<?php echo $prd['p_id']; ?>">
    Sửa
  </button>
                  </tr>
                  <?php } ?> 
                  </tbody>
                  <tfoot>
                  <tr>
                  <th></th>

                    <th>Tên</th>
                    <th>Loại</th>
                    <th>Đơn Giá</th>
                    <th>Kích hoạt</th>
                    <th>Cài đặt</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

           
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css
" rel="stylesheet">
<script src="./plugins/datatables/jquery.dataTables.min.js"></script>
<script src="./plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="./plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="./plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="./plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="./plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="./plugins/jszip/jszip.min.js"></script>
<script src="./plugins/pdfmake/pdfmake.min.js"></script>
<script src="./plugins/pdfmake/vfs_fonts.js"></script>
<script src="./plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="./plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="./plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  
  function delete_product(p_id) {
    console.log(p_id);
  $.ajax({
    url: '../api/deleteproduct.php',
    type: 'POST',
    data: { p_id: p_id },
    success: function(data) {
      Swal.fire(
      'Đã xoá!',
      'Thao tác thành công',
      'success'
    ).then((result) => {
  if (result.isConfirmed) {
    location.reload();
  }
})
    
    },
    error: function() {
      Swal.fire(
      'Thất bại',
      'Không có gì thay đổi',
      'error'
    )
    }
  });
}
  $('.deleteProduct').click(function() {
    var p_id = $(this).data('id');

    Swal.fire({
    title: "Bạn có muốn xoá sản phẩm #"+p_id,
    text: "Thao tác này không thể khôi phục",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Xoá',
    cancelButtonText: 'Huỷ'
  }).then((result) => {
    if (result.isConfirmed) {
      console.log(p_id);
      delete_product(p_id);
    }
  })
    
});

    
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

$(".editProduct").on("click", function() {
  // Get the data-item-id attribute from the clicked button
  var itemId = $(this).data('id');
  document.querySelector('.updateProduct').disabled = false;
  console.log('clicked id'+ itemId);
  var data = {
        p_id: itemId // Set the item ID as the value of the p_id key
    };
  // Make an AJAX request to the API endpoint with the item id
  $.ajax({
    url: '../api/getitembyid.php?p_id='+itemId, // Replace with your actual API endpoint URL
    type: 'GET',
    dataType: 'json',
    success: function(response) {
            // Populate the modal with the data from the API response
            console.log(response.p_name);
            $('#productid').val(response.p_id);
            $('#productname').val(response.p_name);
            $('#producttype').val(response.p_type_id);
            $('#productbrand').val(response.p_brand_id);
            $('#productdescription').val(response.p_desc);
            $('#productprice').val(response.p_price);
            $('#productstock').val(response.p_stock);
            $('#producttag').val(response.p_tag);
            $('#productyear').val(response.p_yearr);
            $('#productdiscount').val(response.p_sale);
            $('#productimagename').val(response.p_image);
            $('#img-preview').attr('src', '../img/uploads/'+response.p_image);
            if (response.p_active == 1) {
                $('#productactive').prop('checked', true);
            } else {
                $('#productactive').prop('checked', false);
            }
    },
    error: function(jqXHR, textStatus, errorThrown) {
      // Handle error
      console.log(textStatus, errorThrown);
    }
  });
});

</script>
</body>

<?php 
include "./modal/addproduct.php";

?>