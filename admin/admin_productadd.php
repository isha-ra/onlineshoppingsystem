









<?php include 'admin_header.php'; ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
    style="opacity: .8">
    <span class="brand-text font-weight-light">Click2Shop</span>
  </a>

  <!-- Sidebar -->
  <?php include 'admin_sidebar.php'; ?>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Products</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">All Product</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- form -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6" >
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">New Product</h3>
              </div>
       
                 <form name="form" action="admin_productadd_process.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
 <div class="form-group">
                  <label>Category Title</label>
                  <select class="form-control select2"  id="catid" name="catg" required onchange="subcategory_fetch()"style="width: 100%;">
                     <option value="" disabled selected>Please Select</option>

                   <?php
require_once 'dbconnection.php';
$query = "SELECT * FROM category ORDER BY cat_id ASC";
$result = mysqli_query($connect, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        ?>
                                        <option value="<?php echo $row['cat_id']; ?>"><?php echo $row['category']; ?></option>
                                    <?php }
                                } ?>
                            </select>
                </div>
                   <div class="form-group">
                    <label for="Name" >Sub-Category Title</label>
                    <select class="form-control select2" id="subcat" name="subcatg" style="width: 100%;"></select>
                   
                  </div>

                  <div class="form-group">
                    <label for="Name">Product Title</label>
                    <input type="text" class="form-control" id="product_name" placeholder="Enter Product title" name="product_name">
                  </div>
                  
             
                <div class="form-group">
                  <label for="productprice">Product Price</label>
                    <input type="number" class="form-control" id="product_price" placeholder="Enter Price" name="product_price">
                </div>
                 <div class="form-group">
                  <label for="Name">Product Quantity</label>
                    <input type="number" class="form-control" id="product_qty" placeholder="Enter Quantity" name="product_qty">
                </div>
                 <div class="form-group">
                  <label for="Name">Image</label>
                    <input type="file" class="form-control" id="product_image" name="product_image">
                </div>
                  <div class="form-group">
                  <label for="Name">Product Description</label>
                    <textarea class="form-control" id="pproduct_desc" placeholder="Enter New Category" name="pproduct_desc"></textarea>
                </div>
            
                  
                <div class="card-footer">
                  <button type="submit"  name="submit1" class="btn btn-primary">Submit</button>
                </div>
              </div>
              </form>

       </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    </section>


    <!-- Main content -->
<?php include 'admin_footer.php'; ?>































 <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>



</div>

<script>
  function subcategory_fetch()
  {
    var Cont = document.getElementById('subcat');
    var sb = document.getElementById('subcatid');
    var cid = document.getElementById('catid').value;
    if (sb != null)
    {
      sb.remove();
    }
    $.ajax({
      url: "admin_subcatfetch.php",
      type: "POST",
      datatype: "json",
      data: {id: cid},
      success: function (res)
      {

        p = JSON.parse(res);
        var data = "<select name='subcatg' id='subcatid' required><option value='' disbaled>Please Select</option>";
        for (i = 0; i < p.length; i++) {
          data += "<option value=" + p[i][0] + ">" + p[i][2] + "</option>";
        }
        data += "</select>";
        $('#subcat').html(data);
      }
    });

  }
</script>



<!-- Main content -->
<?php include 'admin_footer.php'; ?>