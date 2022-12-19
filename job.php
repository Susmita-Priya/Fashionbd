<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Application</title>
		<link href="css/bootstrapreg.min.css" rel="stylesheet">
         <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
	    <link href="css/main.css" rel="stylesheet">
	    <link href="css/responsive.css" rel="stylesheet">
		<style type="text/css">
			.btn-danger {
   					 float: none !important;
   					margin-right: 76px!important;
                    margin-left: 76px!important;
            }

			body{
				background-image: url(projectpic/Wallpaper20160706_022528.jpeg);
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;
			}
			.pos{
				opacity: 0.8;
				font-weight: bold;
			}
			.already{
				color: white;
				font-size: 17px;
			}
			.al{
				color: orange;
			}
		</style>
	</head>
	<body>
		<?php 
        include 'insert.php';

		if(isset($_POST['submit'])){
		 $email= $_POST['email'];
		// $msg=$_POST['bio'];
		 $pos=$_POST['app'];
         $to = 'piu679506@gmail.com';
         $subject = "Application for a Job as ";
         $subject.= $pos;
         $file="pdf/Presentation1.pdf";
         $message1 = "Dear sir, \r\n";
         //$message1 .= $msg;
         
         $header = "From:";
         $header.=$email;
         
         // Boundary  
$semi_rand = md5(time());  
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";  
 
// Headers for attachment  
$header .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
 
// Multipart boundary  
$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . 
"Content-Transfer-Encoding: 7bit\n\n" . $message1 . "\n\n";  

         if(!empty($file) > 0){ 
           if(is_file($file)){ 
        $message .= "--{$mime_boundary}\n"; 
        $fp =    @fopen($file,"rb"); 
        $data =  @fread($fp,filesize($file)); 
 
        @fclose($fp); 
        $data = chunk_split(base64_encode($data)); 
        $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" .  
        "Content-Description: ".basename($file)."\n" . 
        "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" .  
        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n"; 
    } 
} 
$message .= "--{$mime_boundary}--"; 
$returnpath = "-f" . $from; 
 
         $mail = @mail($to, $subject, $message, $header, $returnpath);  
       // $retval = mail ($to,$subject,$message,$header);
         
         	if( $mail == true ) {
           ?>
         <script>
         alert("Mail sent successfully...");
         location.replace("index.php");
         </script>
         <?php
         }else {
            ?>
         <script>
         alert("Message could not be sent...");
         </script>
         <?php
         }
     
 }
      ?>
         	
		<header id="header"><!--header-->
		<div class="header-top"><!--header-top-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">  <!-- grid layout, clearfix-clear float -->
						<div class="logo pull-left">  <!-- pull left-float left (bootstrap) -->
						<img src="images/home/FashionBD (4).png" alt="" / height="150px">
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
								<li><a href="index.php" class="active">Home</a></li> 
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	<section class="bdy">
		<div class="container my-5">
			<div class="row">
				<div class="col-md-5 offset-md-3">
					<div class="card bg-info pos">
						<div class="card-header">
							<h2 class="text-danger text-center"> Apply for Job </h2>
						</div>
						<div class="card-body ">
							
							<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
								<div class="form-group">
									<label for="email">E-mail address <span class="text-danger">*</span></label>
									<input type="text" name="email" id="email"  class="form-control "required="" placeholder="Please enter your email">
								</div>
								<!-- <div class="form-group">
									<label for="dob">Biodata <span class="text-danger">*</span></label>
									<textarea name="bio" id="bio" cols="30" rows="10"   class="text" required=""placeholder="Please enter your Biodata : (name,address,contact number,mail)"></textarea><br>
								</div> -->
								<div class="form-group">
									<select name="app" id="app"  class="form-control" required="">
										<option value="shopper">Shopper</option>
										<option value="delivery-boy">Delivery-Boy</option>
									</select>
									
									
								</div>
								</div>
								<div class="card-footer text-center">
									<div class="form-group">
										<button onclick="popUp()" type="submit" name="submit" class="btn btn-success mx-3">Apply</button>
										<button type="reset" class="btn btn-danger mx-3">Reset</button>
										
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>
		<footer id="footer"><!--Footer-->
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

						<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	</body>
</html>
