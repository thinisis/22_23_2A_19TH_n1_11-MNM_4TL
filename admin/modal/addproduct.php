<div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Thêm sản phẩm</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
              <form>
              <input type="text" class="form-control" id="productid" style="block;">
                <div class="card-body">
                  <div class="form-group">
                    <label for="productname">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="productname" placeholder="Tên sản phẩm">
                  </div>
                  <div class="row">
                  <div class="form-group col-sm-6">
                    <label for="producttype">Loại sản phẩm</label>
                        <select id="producttype" class="form-control">
                            <?php foreach($types as $tp){?>
                                <option value="<?php echo $tp['p_type_id'] ?>"><?php echo $tp['p_type_name'] ?></option>
                            <?php } ?>
                        </select>
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="productbrand">Hãng sản xuất</label>
                        <select id= "productbrand"class="form-control">
                            <?php foreach($brands as $br){?>
                                <option value="<?php echo $br['brand_id'] ?>"><?php echo $br['brand_name'] ?></option>
                            <?php } ?>
                        </select>
                  </div>
                  </div>
                  <div class="form-group">
                        <label>Mô tả</label>
                        <textarea class="form-control"  id="productdescription" rows="3" placeholder="Enter ..."></textarea>
                      </div>
                      
                  <div class="form-group">
                    <div class="row">
                  <div class="col-sm-4">
                     <div class="form-group">
                            <label for="productprice">Đơn giá</label>
                            <input type="text" class="form-control" id="productprice" placeholder="Đơn giá" min="0" >
                    </div>
                  </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                                <label for="productstock">Số lượng</label>
                                <input type="number" class="form-control" id="productstock" placeholder="Số lượng" min="0">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                                <label for="producttag">Tag</label>
                                <input type="text" class="form-control" id="producttag" placeholder="Tag">
                        </div>
                    </div>
                  </div>
                  </div>
                  <div class="row form-group">
                  <div class="col-sm-6">
                        <div class="form-group">
                                <label for="productyear">Năm SX</label>
                                <input type="number" class="form-control" id="productyear" placeholder="Năm SX" min="2000" max="2024">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                                <label for="productdiscount">Giảm giá (%)</label>
                                <input type="number" class="form-control" id="productdiscount" placeholder="Giảm giá" min="0" max="100">
                        </div>
                    </div>
                  </div>

                    <div class="form-group">
                        <label for="productimage">Hình ảnh?</label>
                        <div class="input-group">
                            <div class="custom-file">
                            <input type="text" style="block; " id="productimagename">
                            <input type="file" class="custom-file-input" id="productimage">
                            <label class="custom-file-label" for="productimage">Chọn file</label>
                            </div>
                            <div class="input-group-append">
                            <button class="btn btn-outline-secondary upload-btn" type="button">Tải lên</button>
                            </div>
                        </div>
                        <div class="mt-3">
                            <img id="img-preview" src="../../img/uploads/642ddd96df8d7.jpg" alt="Preview" style="max-width: 100%; max-height: 200px;">
                        </div>
                        </div>

                  <div class="form-check">
                  <div class="form-group">
                  <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="productactive" checked="">
                          <label for="productactive" class="custom-control-label">Kích hoạt sản phẩm?</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

          
            </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
              <button type="button" class="btn btn-warning updateProduct">Sửa</button>
              <button type="button" class="btn btn-primary addProduct">Thêm</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
</html>

<script>
const form = document.querySelector('form');
const submitBtn = document.querySelector('.addProduct');
submitBtn.addEventListener('click', handleSubmit);

function handleSubmit(event) {
  event.preventDefault();

  // Call function to send request to API with requestBody
}
window.onload = function() {
      document.querySelector('.updateProduct').disabled = true;
      document.querySelector('.addProduct').disabled = true;
};
  function clear_all(){
    document.querySelector('.addProduct').disabled = false;
    document.querySelector('.updateProduct').disabled = true;
    $('#productname').val("");
            $('#producttype').val(1);
            $('#productbrand').val(1);
            $('#productdescription').val("");
            $('#productprice').val("");
            $('#productstock').val("");
            $('#producttag').val("");
            $('#productyear').val("");
            $('#productdiscount').val("");
            $('#productimagename').val("");
            $('#img-preview').attr('src', "../img/uploads/642ddd96df8d7.jpg");
            $('#productactive').prop('checked', true);
  }
 $('.addProduct').click(function() {
    const formData = new FormData(form);
    console.log(formData.get('productname'));
    Swal.fire({
    title: "Xác nhận thêm sản phẩm",
    text: "Bạn có chắc chắn muốn lưu lại không?",
    icon: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Đồng ý',
    cancelButtonText: 'Huỷ'
  }).then((result) => {
    if (result.isConfirmed) {       
        const productName = document.getElementById('productname').value;
        const productType = document.getElementById('producttype').value;
        const productBrand = document.getElementById('productbrand').value;
        const productDescription = document.getElementById('productdescription').value;
        const productPrice = document.getElementById('productprice').value;
        const productStock = document.getElementById('productstock').value;
        const productTag = document.getElementById('producttag').value;
        const productYear = document.getElementById('productyear').value;
        const productDiscount = document.getElementById('productdiscount').value;
        const productImage = document.getElementById('productimagename').value;
        const productActive = document.getElementById('productactive').checked ? 1 : 0;

        const requestBody = {
        p_name: productName,
        p_type_id: productType,
        p_brand_id: productBrand,
        p_desc: productDescription,
        p_price: productPrice,
        p_stock: productStock,
        p_tag: productTag,
        p_yearr: productYear,
        p_sale: productDiscount,
        p_image: productImage,
        p_active: productActive,
        };
      add_product(requestBody);
    }
  })
    });

    $('.updateProduct').click(function() {
    const formData = new FormData(form);
    console.log(formData.get('productname'));
    Swal.fire({
    title: "Xác nhận sửa thông tin",
    text: "Bạn có chắc chắn muốn lưu lại không?",
    icon: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Đồng ý',
    cancelButtonText: 'Huỷ'
  }).then((result) => {
    if (result.isConfirmed) {    
        const productId = document.getElementById('productid').value;
        const productName = document.getElementById('productname').value;
        const productType = document.getElementById('producttype').value;
        const productBrand = document.getElementById('productbrand').value;
        const productDescription = document.getElementById('productdescription').value;
        const productPrice = document.getElementById('productprice').value;
        const productStock = document.getElementById('productstock').value;
        const productTag = document.getElementById('producttag').value;
        const productYear = document.getElementById('productyear').value;
        const productDiscount = document.getElementById('productdiscount').value;
        const productImage = document.getElementById('productimagename').value;
        const productActive = document.getElementById('productactive').checked ? 1 : 0;

        const requestBody = {
        p_id: productId,
        p_name: productName,
        p_type_id: productType,
        p_brand_id: productBrand,
        p_desc: productDescription,
        p_price: productPrice,
        p_stock: productStock,
        p_tag: productTag,
        p_yearr: productYear,
        p_sale: productDiscount,
        p_image: productImage,
        p_active: productActive,
        };
      edit_product(requestBody);
    }
  })
    });

function add_product(requestBody) {
    fetch('../api/additem.php', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json',
  },
  body: JSON.stringify(requestBody),
})
  .then(response => response.json())
  .then(data => {
      Swal.fire(
      'Đã lưu!',
      'Thao tác thành công',
      'success'
    ).then((result) => {
  if (result.isConfirmed) {
    location.reload();
  }
})
  })
  .catch(error => {
    console.error('Error:', error);
    Swal.fire(
      'Thất bại',
      'Không có gì thay đổi',
      'error'
    )
  });
}

function edit_product(requestBody) {
    fetch('../api/updateitem.php', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json',
  },
  body: JSON.stringify(requestBody),
})
  .then(response => response.json())
  .then(data => {
      Swal.fire(
      'Đã lưu!',
      'Thao tác thành công',
      'success'
    ).then((result) => {
  if (result.isConfirmed) {
    location.reload();
  }
})
  })
  .catch(error => {
    console.error('Error:', error);
    Swal.fire(
      'Thất bại',
      'Không có gì thay đổi',
      'error'
    )
  });
}


const uploadInput = document.getElementById('productimage');
const uploadBtn = document.querySelector('.upload-btn');
const fileLabel = document.querySelector('.custom-file-label');
const imgPreview = document.getElementById('img-preview');
let selectedFile = null;

uploadInput.addEventListener('change', (event) => {
  selectedFile = event.target.files[0];
  fileLabel.textContent = selectedFile.name;

  const reader = new FileReader();
  reader.onload = () => {
    imgPreview.src = reader.result;
  };
  reader.readAsDataURL(selectedFile);
});

uploadBtn.addEventListener('click', async () => {
  if (!selectedFile) {
    Swal.fire(
      'Error',
      'Lỗi! Thao tác thất bại, vui lòng chọn file!',
      'warning'
    )
  }

  // Create a new FormData instance
  const formData = new FormData();

  // Add the file to the FormData instance with the name 'image'
  formData.append('image', selectedFile);

  // Send a POST request to the API to upload the file
  const response = await fetch('../api/imgupload.php', {
    method: 'POST',
    body: formData
  });

  // Handle the response
  if (response.ok) {
    const responseData = await response.json();
  const fileName = responseData.img;
  document.getElementById('productimagename').value = fileName;
  Swal.fire(
      'Uploaded!',
      'Đã tải lên thành công.',
      'success'
    )
  fileLabel.textContent = fileName;
  const input = document.querySelector('.custom-file-input');
  const uploadBtn = document.querySelector('.upload-btn');
  uploadBtn.disabled = true;
  input.disabled = true;
  } else {
    Swal.fire(
      'Error',
      'Lỗi! Thao tác thất bại',
      'error'
    )
    
  // Reset the label and selected file variable
  fileLabel.textContent = 'Chọn file';
  selectedFile = null;
  }

});
</script>