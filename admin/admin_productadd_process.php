 <?php
        $link = mysqli_connect("localhost", "root", "");
        mysqli_select_db($link, "Click2Shop");

        if (isset($_POST["submit1"])) {
            require_once 'dbconnection.php';
            $v1 = rand(1111, 9999);
            $v2 = rand(1111, 9999);

            $v3 = $v1 . $v2;

            $v3 = md5($v3);


            $fnm = $_FILES["product_image"]["name"];
            $dst = "./product_image/" . $v3 . $fnm;
            $dst1 = "product_image/" . $v3 . $fnm;
            move_uploaded_file($_FILES["product_image"]["tmp_name"], $dst);

           


           if (mysqli_query($link, "insert into product values('', '$_POST[catg]','$_POST[subcatg]','$_POST[product_name]','$_POST[product_price]','$_POST[product_qty]','$dst1','$_POST[pproduct_desc]')") == true)
            {
                echo"<script>alert('New Product Successfully Added');</script>";
                echo"<script>window.location='admin_product.php'</script>";
            }else{
                echo"<script>alert('product coulden't added');</script>";
    echo"<script>window.location='admin_productadd.php'</script>";
            }
        }
        ?>  