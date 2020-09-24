 <?php
        $link = mysqli_connect("localhost", "root", "");
        mysqli_select_db($link, "Click2Shop");

        if (isset($_POST["submit1"])) {
            require_once 'dbconnection.php';
           


            if (mysqli_query($link, "insert into subcategory values('','$_POST[cat_id]','$_POST[subcatg]')") == true)
            {
                echo"<script>alert('New Sub-Category Successfully Added');</script>";
                echo"<script>window.location='admin_subcategory.php'</script>";
            }else{
                echo"<script>alert('sub-category coulden't added');</script>";
    echo"<script>window.location='admin_subcategoryadd.php'</script>";
            }
        }
        ?>  