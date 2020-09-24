                









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
          <h1>Categories</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">All category</li>
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
                <h3 class="card-title">New Category</h3>
              </div>
       
                 <form name="form" action="admin_categoryadd_process.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="Name">Category Title</label>
                    <input type="text" class="form-control" id="category" placeholder="Enter New Category" name="category">
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



</div>

<!-- Main content -->
<?php include 'admin_footer.php'; ?>