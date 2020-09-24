<?php 
include('dbconnection.php');
 session_start();
if (isset($_POST['submit1']))
    {   
       $username=$_POST['username'];
        $password=$_POST['password'];    
        $result=mysqli_query($connect,"select *from user where username='$username' and password='$password'");
        // $row=mysqli_fetch_object($result);
    $row=mysqli_num_rows($result);
    
    // if (count($row)>0) 
    // if($row>0)

        

    {     
        $row=mysqli_fetch_object($result);

        $_SESSION['username'] = $_POST['username'];
       $_SESSION['status']='logedin';
        $_SESSION['userid'] = $row->id;
        $_SESSION['usertype'] = $row->usertype;
        $_SESSION['verification_status'] = $row->verification_status;

        if($row->usertype==1 && $row->verification_status==1)
        {
            echo "<script>window.location='admin/admin_dashboard.php';</script>";
        }else if($row->usertype==0&& $row->verification_status==1){
            echo "<script>window.location='payment.php';</script>";
       
        }else{
             echo "<script>alert('invalid username or password');</script>";
           echo "<script>window.location='login_register.php';</script>";
        }
    } 
    
}else if(isset( $_SESSION['status'])){
    if($_SESSION['status']=='logedin'){
        if($_SESSION['usertype']==1)
        {
            $_SESSION["login"] = "login";
            header('location:admin.php');
        }else if($_SESSION['usertype']==0){
            header('location:payment.php');
        }else{
            header('location:index.php');
        }
    }
}
    ?>






















