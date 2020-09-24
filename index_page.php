<?php


require_once 'dbconnection.php';
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
                 <!--    <input type="range" min="100" max="5000" step="500" value="100" id="min_price" name="min_price" />  -->
                    <!-- <input type="range" min="5" max="10" step="0.01"> -->
                    <!-- <span id="price_range"></span>   -->
                </div>  
                <br /><br /><br />  
                <div id="product_loading">  
                <?php  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-4">  
                     <div style="border:1px solid #ccc; padding:12px; margin-bottom:16px; height:375px;" align="center">  
                          <img src="<?php echo $row["product_image"];?>" class="img-responsive" />  
                          <h3><?php echo $row["product_name"]; ?></h3>  
                          <h4>Price - <?php echo $row["product_price"]; ?></h4>  
                     </div>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
                </div> 
                </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#min_price').change(function(){  
           var price = $(this).val();  
           $("#price_range").text("Product under Price Rs." + price);  
           $.ajax({  
                url:"range1.php",  
                method:"POST",  
                data:{price:price},  
                success:function(data){  
                     $("#product_loading").fadeIn(500).html(data);  
                }  
           });  
      });  
 });  
 </script>   
                    
                    <?php
                    $page=$_GET["page"];
  if($page==""|| $page=="1")
  {
    $page1=0;
  
  }
else
{
  $page1=($page*5)-5;
}
                    $query = "SELECT * FROM product O limit $page1,12";
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
?>                </div>
            </div>
        </div>
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
        

        <hr/>
<?php include 'footer.php'; ?>