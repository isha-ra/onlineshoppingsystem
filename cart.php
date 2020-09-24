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
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li class="active">Shopping Cart</li>
                </ol>
            </div>


            <div class="table-responsive cart_info">


                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image">Item</td>
                            <td class="description"></td>
                            <td class="price">Price</td>
                            <td class="quantity">Quantity</td>
                            <td class="total">Total</td>
                            <td></td>
                        </tr>
                    </thead>
                    
                    <tbody>
<?php
    if(!empty($_SESSION["cart"]))
    { 
        require_once 'dbconnection.php';
        $total = 0;
        foreach($_SESSION["cart"] as $keys => $values)
        { $id= $values['product_id'];
            $query = "SELECT * FROM product where id='$id'";
                    $result = mysqli_query($connect, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
            
            <tr>
        
              <td class="cart_product">
                                <a href=""><img src="<?php echo $row["product_image"]; ?>" height="100" width="100" alt=""></a>
                            </td>
                <td class="cart_description">
                                <h4><a href=""><?php echo $row["product_name"]; ?></a></h4>
                                <p>Web ID:<?php echo $row["id"]; ?> </p>
                            </td>   
                             <td class="cart_price">
                                <p>Rs. <?php echo $row["product_price"]; ?></p>
                            </td>         
          
           <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_up" href=""> + </a>
                                    <input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $values["item_quantity"] ?>" autocomplete="off" size="2">
                                    <a class="cart_quantity_down" href=""> - </a>
                                </div>
                            </td>

                            

            
            <td>Rs. <?php echo number_format($values["item_quantity"] * $row["product_price"], 2); ?></td>
            <td><a href="cart2.php?action=delete&id=<?php echo $values["product_id"]; ?>"><span class="text-danger">X</span></a></td>
            </tr>
            <?php 
            $total = $total + ($values["item_quantity"] * $row["product_price"]);
                        }
                    }
        }
        ?>
        <tr>
        <td colspan="3" align="right">Total</td>
        <td align="right">Rs. <?php echo number_format($total, 2); ?></td>
        <td></td>
        </tr>
        


        <?php
    }
    ?>
    </table>
                    </tbody>
                </table>
            </div>
        </div>
    </section> <!--/#cart_items-->


  
        <hr/>
<?php include 'footer.php'; ?>