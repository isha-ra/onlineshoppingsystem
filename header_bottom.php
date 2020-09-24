


<div class="header-bottom"><!--header-bottom-->


	


			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
			
			 			</li>


						<div class="mainmenu pull-left">
		
							<ul class="nav navbar-nav collapse navbar-collapse">
															
								<li><a href="index.php" class="active">Home</a>
		
								<li class="dropdown"><a href="#">Category<i class="fa fa-angle-down"></i></a>

					
                                    <ul role="menu" class="sub-menu">
                                    	<?php 
	$query = "SELECT * FROM category";
	$result = mysqli_query($connect, $query);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_array($result)) {
			?>
                           <li><a href="product_by_category.php?sub_id=<?php echo $row['cat_id']; ?>"><?php echo $row['category']; ?>  </a></li>
										 
                                <?php } } ?>
                                    </ul>
                                </li> 




								<!-- <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="404.html">404</a></li>
								<li><a href="contact-us.html">Contact</a></li> -->

							</ul>
							
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>

		</div><!--/header-bottom-->
	</header><!--/header-->