
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Delivery status | FashionBD</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
		<style>
		img{
			height:90px;
			width: 90px;
		}
		.tag{
			color:rgb(208,78,9);
		font-family: 'Lobster', cursive;
		font-weight: bold;
		}
		.sub-menu{
			border-bottom: none !important;
		}
	</head>
	</style>
	<body>

		<header id="header"><!--header-->
		<div class="header-top"><!--header-top-->
		<div class="container">
			<div class="row">
				<div class="col-md-4 clearfix">  <!-- grid layout, clearfix-clear float -->
				<div class="logo pull-left">  <!-- pull left-float left (bootstrap) -->
				<img src="images/home/FashionBD (4).png" alt="" / height="150px">
				<h3 class="tag"><i class="fa fa-star-o" aria-hidden="true"></i> Admin</h3>
			</div>
		</div>
		<div class="col-md-8 clearfix">
			<div class="shop-menu clearfix pull-right">
				<ul class="nav navbar-nav">
								<li><a href="admin_dashboard.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
							</ul>
			</div>
		</div>
	</div>
</div>
</div><!--/header-top-->
</header><!--/header-->

		<?php
         include 'insert.php';
           $query="SELECT * FROM payment ORDER BY id ASC";
           $result = mysqli_query($con,$query) or die("Failed");
           $count = mysqli_num_rows($result);

           if($count >0){
           ?>
<section id="cart_items"> <!-- cart -->
		<div class="container">
			<div class="breadcrumbs">
				<h1 class="headd">Delivery status</h1>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed table-hover">
					<thead>
						<tr class="cart_menu">
							<th class="serial">Order Id</td>
							<th class="username">Customer name</th>
							<th class="contact">Contact</th>
							<th class="address">Address</th>
							<th class="product">product id</th>
							<th class="taken">Taken ?</th>
							<th class="del-name">Deliveryboy Name</th>
							<th class="del_con">DeliveryBoy Contact</th>
							<th class="Delivery status">Delivery status</th>
							
						</tr>
					</thead>
					<tbody>

						<?php
						$serial = 1;
						while($row = mysqli_fetch_assoc($result))
						{	
						
						?>
						<tr>
							<td class="serial"><?php echo $row['id']?></td>
							<td class="username"><?php echo $row['username']?></td>
							<td class="contact"> <?php echo $row['number']?></td>
							<td class="address"> <?php echo $row['Address']?></td>
							<td class="product"><?php echo $row['product_id']?></td>
							<td class="taken"> <?php echo $row['taken']?></td>
							<td class="del_name"> <?php echo $row['del_name']?></td>
							<td class="del_contact"> <?php echo $row['del_contact']?></td>
							<td class="delivery"><?php echo $row['status']?></td>
						</tr>
						<?php } ?>
					</tbody>
                  <?php   } ?>	
				</table>
			</div>
		</div>
	</section>

	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>

