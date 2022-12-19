<?php 

session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>orderlist | FashionBD</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet"> -->
	<!-- 	<link href="css/main.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet"> -->
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
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
		.selected{
			background-attachment: green !important;
		}
	</head>
	</style>
	<body>
		<!--  -->
        <button oneclick="alert('ok')">Update</button>
		<a href="alert.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
		<botton onclick="popUp()" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</botton>
		<!-- <script src="js/jquery.js"></script>
				<script src="js/bootstrap.min.js"></script>
				<script src="js/jquery.scrollUp.min.js"></script>
				<script src="js/main.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.slim.min.js"></script> -->
		<script >
											
											function popUp(){
												swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
});
											}
										</script>
				<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>