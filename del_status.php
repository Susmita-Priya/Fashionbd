<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Delivery_status</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
		<link href="css/Bootstraplogin.min.css" rel="stylesheet">
		<style type="text/css">
			
			.text-danger{
				font-weight: bold;
				font-size: 30px!important;
				float: right!important;
			}
			body{
				background-image: url(projectpic/Wallpaper20160706_022528.jpeg);
				background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;
			}
			.pos{
				opacity: .8;
			}
			h2{
				color: orange !important;
		        font-size: 3rem;
		/*font-weight: bold;*/
			}
			.textarea{
				font-size: 16px;
			}
			td{
				color:white !important;
				font-size: 20px;
			}
			th{
				color:orange !important;
				font-size: 22px;
			}
			/*.mx-5 {
		margin-left: 6rem!important;
		}*/
		  .pos{
        opacity: 0.9;
    }
    .card{
		background: black!important;
		opacity: 0.8;
		
	}
	.form-group label
	{
		color: orange!important;
		font-size: 18px!important;
		
	}
	.form-controll {
		color: white !important;
    background-color: black !important;
    border: 0px !important;
    vertical-align: text-top !important;
    padding-left: 20px;
}
	.form-group input,
	.form-group button,
	.form-group a{
		
		font-size: 16px!important;
	}
	.form-control{
		color: black !important;
	}

		</style>
	</head>
	<body>
		
		<header id="header"><!--header-->
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
								
								<li><a href="index1.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
								
							</ul>
						</div>
				</div>
			</div>
		</div><!--/header-top-->
	
		
	</header><!--/header-->

<section class="bdy">
	<div class="container my-5 ">
		<div class="row">
			<div class="col-md-7 offset-md-2">
				<div class="card bg-dark pos">
					<div class="card-header">
						<h4><input type="text" name="username" id="name" class="form-controll" required="" value="<?php echo $_SESSION['username'];?>" readonly="" ></h4>
						<h4><div class="form-group"><input type="email" name="email" id="email"  class="form-controll form-control-lg" value="<?php echo $_SESSION['email'];?>" readonly=""></div></h4>
						<h4><div class="form-group">
									<input type="text" name="number" id="number" class="form-controll " required="" value="<?php echo $_SESSION['nmbr'];?>" readonly=""></div></h4>
									<h4><div class="form-group">
									<input type="text" name="loc" id="loc" class="form-controll  " value="<?php echo $_SESSION['address'];?>" readonly="">
									
								</div></h4>
						<h2 class="text text-center"> Delivery status</h2>
					</div>
					<div class="card-body">
							
							<form action="#" method="POST">
								<?php
         include 'insert.php';
         $emi=$_SESSION['email'];
           $query="SELECT * FROM payment where email='$emi' and taken='Done' ORDER BY id ASC";
           $result = mysqli_query($con,$query) or die("Failed");
           $count = mysqli_num_rows($result);

           if($count >0){
           ?>	
           <table class="table table-condensed table-hover">
					<thead>
						<tr class="cart_menu">
							<th class="serial">Order Id</td>						
							<th class="id">Product Id</th>
							<th class="del">status</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$serial = 1;
						while($row = mysqli_fetch_assoc($result))
						{	
						
						?>
						<td class="serial"><?php echo $row['id'] ?></td>
						
							<td class="id"> <?php echo $row['product_id']?></td>
							<td class="del"> <?php echo $row['status']?></td>
									</tr>
						<?php } ?>
					</tbody>
                  <?php   } ?>	
				</table>					
								</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="footer-bottom fixed">
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
<!-- jquery v3.5.1 JS -->
<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>