 <?php
        $link = mysqli_connect("localhost", "root", "");
        mysqli_select_db($link, "Click2Shop");

        if (isset($_POST["submit1"])) {
            require_once 'dbconnection.php';
            $v1 = rand(1111, 9999);
            $v2 = rand(1111, 9999);

            $v3 = $v1 . $v2;

            $v3 = md5($v3);


            $fnm = $_FILES["slider_image"]["name"];
            $dst = "./slider_image/" . $v3 . $fnm;
            $dst1 = "slider_image/" . $v3 . $fnm;
            move_uploaded_file($_FILES["slider_image"]["tmp_name"], $dst);

           


           if (mysqli_query($link, "insert into slider values('','$_POST[slider_title]','$dst1','$_POST[slider_desc]','')") == true)
            {
                echo"<script>alert('New image Successfully Added');</script>";
                echo"<script>window.location='admin_slider.php'</script>";
            }else{
                echo"<script>alert('image coulden't added');</script>";
    echo"<script>window.location='admin_slideradd.php'</script>";
            }
        }
        ?>  