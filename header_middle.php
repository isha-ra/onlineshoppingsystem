<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canada</a></li>
									<li><a href="#">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
							<!-- 	<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li> -->


								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i>Cart[<?php if (isset($_SESSION['cart'])) {
    echo count($_SESSION['cart']);
} else {
    echo "0";
} ?>]</a></li>


								


               <?php
                            if(isset($_SESSION['status'])){
                                
                            if($_SESSION['status']=='logedin'){
                            ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <span class="glyphicon glyphicon-user"></span>Welcome &nbsp;&nbsp;<?php echo $_SESSION['username']; ?> <span class="caret"></span>
                                </a>                            
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="logout.php"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                </ul>
                            </li>
                            <?php } }else{ ?>
                            <li><a href="login_register.php"><i class="fa fa-sign-in"></i>/<i class="fa fa-sign-out"></i> Login/Register</a></li>
                            <?php } ?>


							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->