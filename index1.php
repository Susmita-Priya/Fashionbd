<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Home | FashionBD</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
		<link href="css/responsive.css" rel="stylesheet">
<style>
	.pagination {
    display: inline !important;
    margin: 20px 0;
    border-radius: 4px;
    font-family: cursive;
    color: black !important;
    font-size: initial;
}
.container {
    padding-top: 30px !important;
    }
    h4,h5{
    	text-align: center !important;
    	font:cursive !important;
    }
    .show_data h4{
    	margin-top: 10px !important;
    	color:#fe980f !important ;
    	font-weight:bold !important;
    }
    h5{
    	color : gray !important;
    }
    h5 a{
    	color : orange !important;
    }
    .pagination a {
    color: #fe980f !important;
    text-decoration: solid;
    text-align: center !important;
    margin-left: 10px;
</style>
		

		</head><!--/head-->
		<body>
			<header id="header shadow-lg"><!--header-->
			<div class="header-top"><!--header-top-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">  <!-- grid layout, clearfix-clear float -->
					<div class="logo pull-left">  <!-- pull left-float left (bootstrap) -->
					<img src="images/home/FashionBD (4).png" alt="" height="150px">
				</div>
			</div>
			<div class="col-md-8 clearfix">
				<div class="shop-menu clearfix pull-right">
					<ul class="nav navbar-nav">
						<li><a href="account.php"><i class="fa fa-user"></i> Account</a></li>
						

						<li> <a class="nav-link text-white" href="cart.php" ><i class="fa fa-shopping-cart"></i>Cart<span id="cart" class="badge badge-warning "></span></a></li>
              <li><a href="logout.php"><i class="fa fa-sign-out-alt" aria-hidden="true"></i> Log out</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
</div><!--/header-top-->
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
			<div class="mainmenu pull-left">
				<ul class="nav navbar-nav collapse navbar-collapse">
					<li><a href="about1.php">About</a></li>
					<li><a href="del_status.php">Trace package</a></li>
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



<script type="text/javascript">
    $(document).ready(function(){
            
            show_mycart();
           function show_mycart(){
              $.ajax({
              url: "ajax/show_mycart.php",
              method:"POST",
              dataType:"JSON",
              success:function(data){
                $(".get_cart").html(data.out);
                $("#cart").text(data.da);
              }
           });
           }

           setInterval(show_mycart,1000);

    });
   </script>




<!--  -->


</header><!--/header-->

<section id="slider"><!--slider-->
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div id="slider-carousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
					<li data-target="#slider-carousel" data-slide-to="1"></li>
					<li data-target="#slider-carousel" data-slide-to="2"></li>
					<li data-target="#slider-carousel" data-slide-to="3"></li>
					<li data-target="#slider-carousel" data-slide-to="4"></li>
					<li data-target="#slider-carousel" data-slide-to="5"></li>
				</ol>
				
				<div class="carousel-inner">
					<div class="item active">
						
						<div class="col-sm-6">
							<img src="slider/gettyimages-1152092333-612x612.jpg" class="girl img-responsive" alt="" />
						</div>
						<div class="col-sm-6">
							<img src="slider/pexels-artem-beliaikin-994523.jpg" class="girl img-responsive" alt="" />
						</div>
					</div>
					<div class="item">
						<div class="col-sm-6">
							<img src="slider/gsqgmsy.jpeg" class="girl img-responsive" alt="" />
						</div>
						<div class="col-sm-6">
							<img src="slider/custom-ink-header.jpg" class="girl img-responsive" alt="" />
						</div>
					</div>
					
					<div class="item">
						<div class="col-sm-6">
							<img src="slider/baby-dress-pink-komnata-birthday-600w-631209230.jpg" class="girl img-responsive" alt="" />
						</div>
						<div class="col-sm-6">
							<img src="slider/baby-clothes-newborn-on-white-600w-432182875.jpg" class="girl img-responsive" alt="" />
						</div>
					</div>
					<div class="item">
						<div class="col-sm-6">
							<img src="slider/luxury-watches-260nw-518569825.jpg" class="girl img-responsive" alt="" />
						</div>
						<div class="col-sm-6">
							<img src="slider/luxury-watches-600w-518569816.jpg" class="girl img-responsive" alt="" />
						</div>
					</div>
					<div class="item">
						<div class="col-sm-6">
							<img src="slider/shoes-on-wooden-shelf-store-600w-235079299.jpg" class="girl img-responsive" alt="" />
						</div>
						<div class="col-sm-6">
							<img src="slider/22851347-background-with-shoes-on-shelves-of-shop.jpg" class="girl img-responsive" alt="" />
						</div>
					</div>
					<div class="item">
						<div class="col-sm-6">
							<img src="slider/electronic_devices-daily-sun.jpg" class="girl img-responsive" alt="" />
						</div>
						<div class="col-sm-6">
							<img src="slider/7104113_orig.jpg" class="girl img-responsive" alt="" />
						</div>
					</div>
				</div>
				
				<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
			
		</div>
	</div>
</div>
</section><!--/slider-->
<section>
	<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-products-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
											Electronic Devices
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">SmartPhones </a></li>
											<li><a href="#">Laptops </a></li>
											<li><a href="#">Desktops </a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
											Men's Fashion
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">T-Shirts</a></li>
											<li><a href="#">Shirts</a></li>
											<li><a href="#">Jeans</a></li>
											<li><a href="#">Panjabi & Fatua</a></li>
											<li><a href="#">Jackets & Coats</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
											Women's Fashion
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Saree </a></li>
											<li><a href="#">Shalwar kameez </a></li>
											<li><a href="#">Kurtis </a></li>
											<li><a href="#">Ladies jeans </a></li>
											<li><a href="#">Jackets & Coats </a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Kids</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Watches</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Shoes</a></h4>
								</div>
							</div>
						</div><!--/category-products-->
						
						<div class="brands_products"><!--brands_products-->
						<h2>Popular Brands</h2>
						<div class="brands-name">
							<ul class="nav nav-pills nav-stacked">
								<li> <span class="pull-right">(Kurti)</span>Ladies Mart</li>
								<li> <span class="pull-right">(Shirt)</span>One Point</li>
								<li> <span class="pull-right">(jeans)</span>Trendz</li>
								<li> <span class="pull-right">(Shoe)</span>Bata</li>
								<li> <span class="pull-right">(Watch)</span>Casio</li>
							</ul>
						</div>
						</div><!--/brands_products-->
					</div>
				</div>
				
				<div class="col-sm-9 padding-right"><!--features_items-->
				
					<h2 class="title text-center">Top Selling Items</h2>
					





<!--  -->

				<div class="" id="pagination">
      
    </div>
		<div class="col-md-16">
			<div class="row show_data">
				
			</div>
		</div>
	</div>


	<script type="text/javascript">
		
       $(document).ready(function(){
           
             load_data();
           function load_data(page){


           	$.ajax({
               url: "ajax/load_data.php",
               method: "POST",
               data:{page:page},
               dataType:"JSON",
               success:function(data){
                $(".show_data").html(data.output);
                $("#pagination").html(data.pagination);
               }
           	});
           }

        $(document).on("click", ".pagination a",function(event){
        event.preventDefault();
          var id  = $(this).attr("id");
          load_data(id);
       });




           function show_mycart(){
              $.ajax({
              url: "ajax/show_mycart.php",
              method:"POST",
              dataType:"JSON",
              success:function(data){
                $("#cart").text(data.da);
              }
           });
           }

       });






       $(document).on("click",".add_cart", function(event){
       	event.preventDefault();
           var id = $(this).attr("id");
           var name = $("#name"+id+"").val();
           var price = $("#price"+id+"").val();
           var quantity = $("#quantity"+id+"").val();
           var action = "add";


           $.ajax({
              url: "ajax/cart_action.php",
              method:"POST",
              dataType:"JSON",
              data: {id:id,name:name,price:price,quantity:quantity,action:action},
              success:function(data){
                 
              }
           });


       });


	</script>
				</div>
					</div>

					<!--features_items-->
													
								<div class="recommended_items"><!--recommended_items-->
								<h2 class="title text-center">flash items</h2>
								
								<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
										<div class="item active">
											<div class="col-sm-4">
												<div class="product-image-wrapper">
													<div class="single-products">
														<div class="productinfo text-center">
															<img src="images/phn/almeria-spain-26-january-2021-600w-1902814801.jpg" alt="" />
															<h2>৳ 22,000</h2>
															<p>New exclusive Poco x3 smartphone</p>
															<!-- <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
														</div>
														
													</div>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="product-image-wrapper">
													<div class="single-products">
														<div class="productinfo text-center">
															<img src="images/laptop/jakarta-indonesia-saturday-21-july-600w-1652062426.jpg" alt="" />
															<h2>৳ 105,000</h2>
															<p>Apple macbook core i5 </p>
															<!-- <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
														</div>
														
													</div>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="product-image-wrapper">
													<div class="single-products">
														<div class="productinfo text-center">
															<img src="images/Watch/businessman-checking-time-watch-600w-381472021.jpg" alt="" />
															<h2>৳ 3500</h2>
															<p>New exclusive black steel watch</p>
															<!-- <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
														</div>
														
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="col-sm-4">
												<div class="product-image-wrapper">
													<div class="single-products">
														<div class="productinfo text-center">
															<img src="images/Shirt/handsome-man-model-studio-portrait-600w-629201018.jpg" alt="" />
															<h2>৳ 1500</h2>
															<p>Alif one chake shirt</p>
															<!-- <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
														</div>
														
													</div>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="product-image-wrapper">
													<div class="single-products">
														<div class="productinfo text-center">
															<img src="images/Saree/indian-lady-saree-600w-646509859.jpg" alt="" />
															<h2>৳ 5600</h2>
															<p>Indian Embroidery Jorget Saree</p>
															<!-- <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
														</div>
														
													</div>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="product-image-wrapper">
													<div class="single-products">
														<div class="productinfo text-center">
															<img src="images/Kameez/karachi-pakistan-april-02-2021-600w-1949184769.jpg" alt="" />
															<h2>৳ 2600</h2>
															<p>Jorjet kameez,Butterfly shalwer</p>
															<!-- <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
														</div>
														
													</div>
												</div>
											</div>
										</div>
									</div>
									<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
										<i class="fa fa-angle-left"></i>
									</a>
									<a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
										<i class="fa fa-angle-right"></i>
									</a>
								</div>
								</div><!--/recommended_items-->
								
							</div>
						</div>
					</div>
				</section>
				
				<footer id="footer"><!--Footer-->
				<div class="footer-top">
					<div class="container">
						<div class="row">
							<div class="col-sm-2">
								<div class="companyinfo">
									<h2><span>FashionBD</span></h2>
									<p>Online Shopping BD has never been easier. FashionBD.com is best online shopping store in Bangladesh that features 10+ million products at affordable prices. As bangaldesh's online shopping landscape is expanding every year, online shopping in dhaka, chittagong, khulna, sylhet and other big cities are also gaining momentum. FashionBD is among best websites for online shopping in bangladesh that promises fast, reliable and convenient delivery of products to your doorstep. FashionBD being the trusted online shop in Bangladesh aims to provide a trouble-free shopping experience for the people of Bangladesh but is also providing ample opportunity for international online shopping from Bangladesh. FashionBD aims to make online shopping accessible to all parts of the country.</p>
								</div>
							</div>
							
							<div class="col-sm-3">
								<div class="address">
									<img src="images/home/bd-04.png" alt="" />
									<p>Lokkhibazar,Dhaka,<br>Bangladesh</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="footer-widget">
					<div class="container">
						<div class="row">
							<div class="single-widget">
								<div class="col-12 col-md-6">
									<h1 class="text-center"><i class="fa fa-phone" aria-hidden="true"></i></h1>
									<p class="text-center">
										01723850180 <br>
										01736061330 <br>
									</p>
								</div>
								<div class="col-12 col-md-6">
									<h1 class="text-center"><i class="fa fa-envelope" aria-hidden="true"></i></h1>
									<p class="text-left">
										Susmita47@gmail.com<br>
										tanvir20@gmail.com<br>
									</p>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				
				<div class="footer-bottom">
					<div class="header_top"><!--footer bottom-->
					<div class="container">
						<div class="row">
							<div class="col-sm-6 ">
								<div class="contactinfo">
									<ul class="nav nav-pills">
										<li><a href="">&copy; fashionBD.com 2021 All Rights Reserved.</a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="social-icons pull-right">
									<ul class="nav navbar-nav">
										<li><a href=""><i class="fa fa-facebook"></i></a></li>
										<li><a href=""><i class="fa fa-twitter"></i></a></li>
										<li><a href=""><i class="fa fa-linkedin"></i></a></li>
										<li><a href=""><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					</div><!--/footer bottom-->
				</div>
				
				
				</footer><!--/Footer-->
				
				
				<script src="js/jquery.js"></script>
				<script src="js/bootstrap.min.js"></script>
				<script src="js/jquery.scrollUp.min.js"></script>
				<script src="js/main.js"></script>
			</body>
		</html>