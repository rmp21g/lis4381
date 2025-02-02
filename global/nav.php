	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container" style="background-color: #800080;">			
			<div class="navbar-header" style="background-color: #800080;">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="../index.php" target="_self" style="color:#FFFFFF" style="background-color:#800080">Home</a>
			</div>

			<div id="navbar" class="collapse navbar-collapse" style="background-color: #800080;">
				<ul class="nav navbar-nav" >
					<li class="active"><a href="../index.php" style="color:#FFFFFF">LIS4381</a></li>
					<li><a href="../a1/index.php" style="color:#FFFFFF">A1</a></li>
					<li><a href="../a2/index.php" style="color:#FFFFFF">A2</a></li>
					<li><a href="../a3/index.php" style="color:#FFFFFF">A3</a></li>
					<li><a href="../a4/index.php" style="color:#FFFFFF">A4</a></li>
					<li><a href="../a5/index.php" style="color:#FFFFFF">A5</a></li>
					<li><a href="../p1/index.php" style="color:#FFFFFF">P1</a></li>
					<li><a href="../p2/index.php" style="color:#FFFFFF">P2</a></li>
					<li><a href="../test/index.php" style="color:#FFFFFF">Test</a></li>					
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>

<?php
date_default_timezone_set('America/New_York');
$today = date("m/d/y g:ia");
echo $today;
 ?>
	
