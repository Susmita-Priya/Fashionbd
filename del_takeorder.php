<?php 
session_start();
 ?>
<?php
include ('insert.php');
error_reporting(0);
$id1=$_GET['idd'];
$tak=$_GET['tak'];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Take order</title>
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
		/*color: white !important;*/
    /*background-color: black !important;*/
    border: 0px !important;
    vertical-align: text-top !important;
    padding-left: 20px;
}
	.form-group input,
	.form-group button,
	.form-group a{
		
		font-size: 16px!important;
	}
	

	</style>
	</head>
	 <?php
         include 'insert.php';

			if(isset($_POST['submit']))
			{

					$idd = $_POST['idd'];
					$name = $_POST['name'];
					$id = $_POST['id'];
					$em = $_POST['em'];
					$cn=$_POST['cn'];
					$st=$_POST['del'];
					$insertquery = "UPDATE payment SET del_name='$name',del_id=$id,taken='Done',del_email='$em',del_contact='$cn',status='$st' WHERE id=$idd ";
						$iquery =mysqli_query ($con, $insertquery);

						if($iquery){
							?>
						<script>
							alert("Done !! ");
							location.replace("delboy_orderlist.php");
						</script>
						<?php
					}else{
						?>
						<script>
							alert("Try again !");
						</script>
						<?php
					}
				}
			
           ?>
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
								
								<li><a href="delboy_orderlist.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Order-List</a></li>
								
							</ul>
						</div>
				</div>
			</div>
		</div><!--/header-top-->
	
		
	</header><!--/header-->
	<section class="bdy">
		<div class="container my-5">
			<div class="row">
				<div class="col-md-7 offset-md-2">
					<!-- ekahane offset mane hocce se 3 ta column ke skip korbe tai from ta middle e ace -->
					<div class="card bg-dark pos">
						<div class="card-header">
							<h2 class="text-danger text-center"> Take Order </h2>
						</div>
						<hr>
						<div class="card-body">
							
							<form action="#" method="POST">
								<div class="form-group text-light font-weight-bold">
									<label for="idd">Order-ID :<span class="text-danger"></span></label>
									<input type="text" name="idd" id="idd"  class="form-controll form-control-lg" value="<?php echo $id1;?>" readonly="">
								</div>
								<div class="form-group">
									<label for="taken">Taken :<span class="text-danger"></span></label>
									<input type="text" name="taken" id="taken"  class="form-controll form-control-lg" value="<?php echo $tak;?>" readonly="">
								</div>
								<div class="form-group">
									<label for="del">Delivery Status :<span class="text-danger"></span></label>
									<input type="text" name="del" id="del"  class="form-controll form-control-lg" value="Package Processing" readonly="">
								</div>
								<div class="form-group">
									<label for="name">Delivery-Boy Name : </label>
									<input type="text" name="name" id="name" class="form-controll" value="<?php echo $_SESSION['namee'];?>">
									
								</div>
								<div class="form-group">
									<label for="id">Delivery-Boy ID :</label>
									<input type="text" name="id" id="id" class="form-controll " value="<?php echo $_SESSION['idd'];?>" readonly="">
									
								</div>
								<div class="form-group">
									<label for="em">Delivery-Boy Email : </label>
									<input type="text" name="em" id="em" class="form-controll " value="<?php echo $_SESSION['emaill'];?>" readonly="">
									
								</div>
								<div class="form-group">
									<label for="cn">Delivery-Boy Contact : </label>
									<input type="text" name="cn" id="cn" class="form-controll " value="<?php echo $_SESSION['nmbrr'];?>" >
									
								</div>	
								
									
								<div class="card-footer text-center">
									<div class="form-group">
										<button type="submit" name="submit" class="btn btn-success mx-3 my-2">Submit</button>
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