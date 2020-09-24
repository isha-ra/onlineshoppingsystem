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


	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="login_process.php" method="POST">
							<input type="text" placeholder="username" name="username" />
							<input type="password" placeholder="password" name="password" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" name="submit1" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="registration_process.php" method="post">
							<input type="text" placeholder="First Name" name="firstname">
							<input type="text" placeholder="Last Name" name="lastname">
							<input type="text" placeholder="Username" name="username">
							<input type="tel" placeholder="Contact number" name="contact">
							<input type="email" placeholder="Email Address" name="email">
							<input type="password" placeholder="Password" name="password">
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
  
        <hr/>
<?php include 'footer.php'; ?>