<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
		<meta name="author" content="Ryan Parks">
    <link rel="icon" href="favicon.ico">

		<title>LIS4381 - Assignment 1</title>		
		<?php include_once("../css/include_css.php"); ?>			
  </head>

  <body>

		<?php include_once("../global/nav.php"); ?>
		
		<div class="container">
			<div class="starter-template">
				<div class="page-header">
					<?php include_once("global/header.php"); ?>	
				</div>
				<p class="text-justify">
					<strong>Description:</strong> Install AMPPS, JDK, and Android Studio. Provide screenshots of installations. Create bitbucket repository. Provide git command descriptions.
				</p>

				<h4>Java Installation</h4>
				<img src="img/jdk_install.png" class="img-responsive center-block" alt="JDK Installation">

				<h4>Android Studio Installation</h4>
				<img src="img/my_first_app.png" class="img-responsive center-block" alt="Android Studio Installation">

				<h4>AMPPS Installation</h4>
				<img src="img/ampps.png" class="img-responsive center-block" alt="AMPPS Installation">
				
				<?php include_once "global/footer.php"; ?>

			</div> <!-- starter-template -->
    </div> <!-- end container -->

		<!-- Bootstrap JavaScript
				 ================================================== -->
		<!-- Placed at end of document so pages load faster -->		
		<?php include_once("../js/include_js.php"); ?>			
  </body>
</html>
