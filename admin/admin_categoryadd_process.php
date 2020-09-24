 <?php
        $link = mysqli_connect("localhost", "root", "");
        mysqli_select_db($link, "Click2Shop");

        if (isset($_POST["submit1"])) {
            require_once 'dbconnection.php';
           


            if (mysqli_query($link, "insert into category values('','$_POST[category]')") == true)
            {
                echo"<script>alert('New Category Successfully Added');</script>";
                echo"<script>window.location='admin_category.php'</script>";
            }else{
                echo"<script>alert('category coulden't added');</script>";
    echo"<script>window.location='admin_categoryadd.php'</script>";
            }
        }
        ?>  