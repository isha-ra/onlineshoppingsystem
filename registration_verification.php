<?php
include('dbconnection.php');
$id=mysqli_real_escape_string($connect,$_GET['id']);
mysqli_query($connect,"update user set verification_status='1' where id='$id' ")

?>

<script>
	window.location.href='login_register.php'
</script>