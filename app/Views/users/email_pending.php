<!DOCTYPE html>
<html  >
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href=<?php echo base_url('/images/filleasy_faviicon.png'); ?> type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Verify your Email</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/Material-Design-Icons/css/material.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/animatecss/animate.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=DM+Sans:400,400i,500,500i,700,700i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans:400,400i,500,500i,700,700i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  

</head>
<body>
  <?php echo view('admin/header'); ?>

<section class="content3 audiom4_content3 cid-sXSnLptbv3" id="content3-6r">

	

	

	<div class="container">
		<div class="row justify-content-center">
			<div class="mbr-black col-md-12 col-lg-10">
				<div class="title-align align-center">
					
				</div>
				<h1 class="mbr-section-title align-center mbr-bold pb-5 mbr-fonts-style display-2">Awaiting Confirmation</h1>
				<h2 class="mbr-section-title align-left mbr-bold pb-3 mbr-fonts-style display-7">Do not close this window until opening the email link.</h2>
				<p class="mbr-text pb-3 align-left mbr-fonts-style display-7">We just sent an email to <a  class="text-black"><?php echo $_SESSION['email']?></a> <br><em>Click on the button in the email to verifiy your email account!<br><br><strong><br></strong><br></p>

				

			</div>
		</div>
	</div>
</section>


  
  
  <input name="animation" type="hidden">
  
</body>
</html>