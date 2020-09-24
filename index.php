<?php


require_once 'dbconnection.php';
?>
<?php

session_start();
if (isset($_SESSION["uid"])) {
    header("location:index.php");
}
?>

<?php include 'includes.php'; ?>
<?php include 'header_top.php'; ?>
<?php include 'header_middle.php'; ?>
<?php include 'header_bottom.php'; ?>
<?php include 'slider.php'; ?>


  <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
<?php include 'side_bar.php' ?>
                </div>
            </div>
            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <h2 class="title text-center">Features Items</h2>
                    
                    <?php
$query = "SELECT * FROM product limit 0,12";
$result = mysqli_query($connect, $query);
if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_array($result)) {
?>
<div class="col-sm-4">
<form method="post" action="cart2.php?action=add&id=<?php echo $row["id"]; ?>">
<div style="border: 1px solid #eaeaec; margin: -1px 19px 3px -1px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); padding:10px;" align="center">
<img src="<?php echo $row["product_image"]; ?>" class="img-responsive" >
<h5 class="text-info"><?php echo $row["product_name"]; ?></h5>
<h5 class="text-danger">Rs.  <?php echo $row["product_price"]; ?></h5>
<select name="quantity" required>
<?php if ($row["product_qty"] > 0) { ?>
<option value="" disabled selected>Please select Quantity</option>
<?php for ($i = 1; $i <= $row["product_qty"]; $i++) {
?>
<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php }
} else { ?>
<option value="" selected>Out of Stock</option>
<?php } ?>
</select>
<input type="submit" name="add" style="margin-top:5px;" class="btn btn-default" value="Add to Bag">
<li><a href="product_details.php?id=<?php echo $row["id"]; ?>">Product Details</a></li> 
</div>
</form>
</div>
<?php }
}
?> 


<div class="row">
<div class="col-sm-9 pull-right"
<?php
$res1=mysqli_query($connect,"select * from product");
$cou=mysqli_num_rows($res1);
$a=$cou/5;
$a=ceil($a);
echo "<br>"; echo "<br>";
for($b=1;$b<=$a;$b++)
{
?><a href="index_page.php?page=<?php echo $b; ?>" ><button class="btn btn-default"><?php echo $b." "; ?> </button></a><?php
}


?>

</div>
</div>


                      </div>
            </div>
        </div>
        

        <hr/>
<?php include 'footer.php'; ?>