<?php 
session_start();
 ?>
<?php
include ('insert.php');
error_reporting(0);
$id=$_GET['id'];
$name=$_GET['nm'];
$email=$_GET['email']; 
$product=$_GET['product']; 
$delivery=$_GET['delivery']; 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>edit del status</title>
		<link href="css/Bootstraplogin.min.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
	    <link href="css/main.css" rel="stylesheet">
	    <link href="css/responsive.css" rel="stylesheet">
	    <style>
		body{
    background-image: url(projectpic/Wallpaper20160706_022528.jpeg);
    background-repeat: no-repeat;
    background-size: cover; 
    background-attachment: fixed;
    }
   	   .pos{
        opacity: 0.9;
    }
    .tag{
			color:rgb(208,78,9);
		font-family: 'Lobster', cursive;
		font-weight: bold;
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
				<img src="images/home/FashionBD (4).png" alt="" / height="150px">
				<h3 class="tag"><i class="fa fa-star-o" aria-hidden="true"></i> Delivery Boy</h3>
			</div>
		</div>
		<div class="col-md-8 clearfix">
			<div class="shop-menu clearfix pull-right">
				<ul class="nav navbar-nav">
								<li><a href="delboy_dashboard.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
							</ul>
			</div>
		</div>
	</div>
</div>
</div><!--/header-top-->
</header><!--/header-->
	<section class="bdy">
		<div class="container my-5">
			<div class="row">
				<div class="col-md-5 offset-md-3">
					<!-- ekahane offset mane hocce se 3 ta column ke skip korbe tai from ta middle e ace -->
					<div class="card bg-dark pos">
						<div class="card-header">
							<h2 class="text-danger text-center">UPDATE DELIVERY STATUS</h2>
						</div>
						<hr>
						<div class="card-body">
							
							<form action="#" method="POST">
								<div class="form-group text-light font-weight-bold">
									<label for="id">Order Id</label>
									<input type="text" name="id" id="id"  class="form-control form-control-lg" value="<?php echo $id;?>" readonly="">
								</div>
								<div class="form-group text-light font-weight-bold">
									<label for="name">Customer name </label>
									<input type="text" name="name" id="name" class="form-control form-control-lg" required="" value="<?php echo $name;?>" readonly="">
									
								</div>
								<div class="form-group text-light font-weight-bold">
									<label for="product">Product id </label>
									<input type="text" name="product" id="product" class="form-control form-control-lg" required="" value="<?php echo $product;?>" readonly="" >
									
								</div>	
								<div class="form-group">
									<label for="app">Delivery Status <span class="text-danger">*</span></label>
									<select name="app" id="app"  class="form-control" required="">
										<option value="package Processing">Package Processing</option>
										<option value="Pick up in Progress">Pick up in Progress</option>
										<option value="Arrived at our Warehouse">Arrived at our Warehouse</option>
										<option value="Shipped">Shipped</option>
										<option value="delivered to pick-up point">Delivered to pick-up point</option>
										<option value="Handed">Handed</option>
									</select>
								</div>
								
								<div class="card-footer text-center">
									<div class="form-group">
										<button type="submit" name="submit" class="btn btn-success mx-3 my-2">Update</button>
										<button type="reset" class="btn btn-danger mx-3 my-2">Reset</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>
		
		<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/main.js"></script>
	</body>
</html>

<?php
include 'insert.php';
if(isset($_POST['submit']))
{
$id = $_POST['id'];
$name = $_POST['name'];
$product = $_POST['product'];
$del = $_POST['app'];
$insertquery = "INSERT INTO delivery(orderid,name,product,delivery) VALUES ('$id','$name','$product','$del')";
$iquery =mysqli_query($con, $insertquery);
if($iquery){
?>
<script>
	alert("Delivery Status Report is been stored");
	location.replace("delboy_delivery.php");
</script>
<?php
}else{
?>
<script>
	alert("Delivery Status Report is not been stored");
</script>
<?php
}
}
?>




