

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
            <li class="breadcrumb-item active">Products</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

<section class="content">
    <div class="row">
      <div class="col-12">


   <div class="card">
             <div class="card-header d-flex p-0">
                <h3 class="card-title p-3">
                  <i class="fa fa-pie-chart mr-1"></i>
                 Products
                </h3>
                <ul class="nav nav-pills ml-auto p-2">
                  <li class="nav-item">
                  
                    <a class="btn btn-info float-right" href="admin_productadd.php"><i class="fa fa-plus"></i> Products </a>
                      
                  </li>
                 
                </ul>
              </div><!-- /.card-header -->
          <div class="card-body">

<?php
include'dbconnection.php';

                    $page=$_GET["page"];
  if($page==""|| $page=="1")
  {
    $page1=0;
  
  }
else
{
  $page1=($page*5)-5;
}
                    $query = "SELECT * FROM product ORDER BY id DESC limit $page1,8";
                    $result = mysqli_query($connect, $query);
?>



            <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                  <th>S.N</th>
                  <th>Product Name</th>
                  <th>Product Image</th>
                  <th>Action</th>

                </tr>
              </thead>
                <?php
                if($result)
                {
                    foreach($result as $row)
                    {
            ?>
              <tbody>           
             <tr>
               

                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['product_name']; ?></td>
                   <td> <img src="<?php echo $row["product_image"];?>" height="100" width="100"> </td>
                  <td>Action</td>


                
                </tr>
              </tbody>
 <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>


            </table>
            <!-- paginetion -->
         <div class="row">
            <div class="col-sm-9 pull-right">
                <?php
                include'dbconnection.php';
                    $res1=mysqli_query($connect,"select * from product");
                    $cou=mysqli_num_rows($res1);
                    $a=$cou/5;
                    $a=ceil($a);
                    echo "<br>"; echo "<br>";

                    for($b=1;$b<=$a;$b++)
                    {
                ?>
                       <a href="admin_productdltpage.php?page=<?php echo $b;?>">
                            <button><?php echo $b." ";?></button>
                        </a>
                       
                        <!-- echo "ok"; -->
                <?php
                    }
                ?>
               
            </div>
        </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>

    <!-- /.row -->
  </section>
</div>
<!-- Main content -->
<?php include 'admin_footer.php'; ?>