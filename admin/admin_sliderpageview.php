

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
          <h1>Slider</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">slider</li>
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
                  <i class="fa fa-photo mr-1"></i>
                 slider
                </h3>
                <ul class="nav nav-pills ml-auto p-2">
                  <li class="nav-item">
                  
                    <a class="btn btn-info float-right" href="admin_slideradd.php"><i class="fa fa-plus"></i> slider </a>
                      
                  </li>
                 
                </ul>
              </div><!-- /.card-header -->
          <div class="card-body">

<?php
include'dbconnection.php';
$query ="SELECT * FROM slider ORDER BY id DESC limit 0 ,5";
$query_run=mysqli_query($connect,$query);
?>


            <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                  <th>S.N</th>
                  <th>Slider Name</th>
                  <th>Slider Image</th>
                  <th>Action</th>

                </tr>
              </thead>
                <?php
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
            ?>
              <tbody>           
             <tr>
               

                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['slider_title']; ?></td>
                  <td> <img src="<?php echo $row["slider_image"];?>" height="100" width="250"> </td>
                  <td>
                    <a class="btn btn-primary float-right" href=""><i class="fa fa-edit"></i></a>
                  
                    <a class="btn btn-danger float-right" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-trash"></i></a>

                  </td>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Alert</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Are you sure you wanna delete this slider?<br/>
     <p>Product Title: <?php echo $row['slider_title']; ?></p>
     <p><img src="<?php echo $row["slider_image"];?>" height="100" width="250"></p>
      </div>
      <div class="modal-footer">
        <a class="btn btn-danger"   href="admin_sliderdelete.php?id= <?php echo $row["id"]; ?>"><i class="fa fa-trash"></i></a>

      
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

                
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
                    $res1=mysqli_query($connect,"select * from slider");
                    $cou=mysqli_num_rows($res1);
                    $a=$cou/5;
                    $a=ceil($a);
                    echo "<br>"; echo "<br>";

                    for($b=1;$b<=$a;$b++)
                    {
                ?>
                       <a href="admin_sliderdltpage.php?page=<?php echo $b;?>">
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