<script>
  const eform = document.querySelector('.edit-form');
  const eBtn = document.querySelector('.editProduct');
  eBtn.addEventListener('click', handleSubmit);

  function handleSubmit(event) {
    event.preventDefault();
    // Call function to send request to API with requestBody
  }
  $('.editProduct').click(function() {
    const formData = new FormData(eform);
    console.log(formData.get('edit-productname'));
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

  function add_product(requestBody) {
    fetch('../api/item.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(requestBody),
    }).then(response => response.json()).then(data => {
      Swal.fire('Đã lưu!', 'Thao tác thành công', 'success').then((result) => {
        if (result.isConfirmed) {
          location.reload();
        }
      })
    }).catch(error => {
      console.error('Error:', error);
      Swal.fire('Thất bại', 'Không có gì thay đổi', 'error')
    });
  }

  function edit_product(requestBody) {
    fetch('../api/updateitem.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(requestBody),
    }).then(response => response.json()).then(data => {
      Swal.fire('Đã lưu!', 'Thao tác thành công', 'success').then((result) => {
        if (result.isConfirmed) {
          location.reload();
        }
      })
    }).catch(error => {
      console.error('Error:', error);
      Swal.fire('Thất bại', 'Không có gì thay đổi', 'error')
    });
  }
</script>