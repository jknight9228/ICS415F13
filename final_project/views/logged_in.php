<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">

<!-- disable iPhone inital scale -->
<meta name="viewport" content="width=device-width; initial-scale=1.0">

<title>Final Project Site</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

<!-- CSS -->
<link href="css/siteStyle.css" rel="stylesheet" media="screen">

<!-- Javascript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/functions.js"></script>

<!-- Favicon -->
<link rel="icon" 
      type="image/png" 
      href="zeldawwhd-fbprofile-3.jpg" />
	  	  
<!-- html5.js for IE less than 9 -->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- css3-mediaqueries.js for IE less than 9 -->
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

</head>

<body>
<div class="container">
	<div class="page-header" style="border-bottom:0px;">
		 <h1 id="siteHeader">ICS 415 Final Project Site</h1>	 
	</div>
	<!-- navbar -->
	<nav class="navbar navbar-default" id="mainnav" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<span class="navbar-brand" style="color:#fff"> Navigation </span> 
		</div>
		
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="navbar-collapse">
			 <ul class="nav navbar-nav">
				 <li class="active"><a href="landing.html" target="iFrameContent" onclick="changeHeader(1)">Home</a></li>
				 <li class="active"><a href="gt_lookup.php" target="iFrameContent" onclick="changeHeader(2)">XBOX Live Gamertag Lookup </a></li>
				 <li class="active"><a href="about.html" target="iFrameContent" onclick="changeHeader(3)">About</a></li>
			 </ul>
			 <span class="nav navbar-right" id="time">
				<?php echo "Today's date is: " . date("D M d, Y");?>
			 </span>
		</div>
	 <!-- /#main-nav --> 
	 </nav>

     <!-- Main Content -->
	 <div class="row-fluid">
		 <div class="span12">
	 
			 <!-- /#header -->
			 <!-- Left sidebar -->
			 <div class="col-xs-12 col-sm-12 col-md-3">
				 <div class="container" style="background: white;" id="cont">
					 <!-- /.widget -->
					 <section class="widget clearfix">
						 <!-- Login -->
						 <h4 class="widgettitle">Login</h4>

							 
						<!-- errors & messages --->
						<?php
							// show negative messages
							if ($login->errors) {
								foreach ($login->errors as $error) {
									echo $error;    
								}
							}

							// show positive messages
							if ($login->messages) {
								foreach ($login->messages as $message) {
									echo $message;
								}
							}

						?>
						<!-- errors & messages --->

						<!-- logged in -->
						<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
						Hey, <?php echo $_SESSION['user_name']; ?>.
						You are logged in.
						Try to close this browser tab and open it again. Still logged in! ;)</br>
						<form method="post" action="index.php?logout">
							<!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" -->
							<input type="submit" class="btn btn-default" value="Logout">
						</form>
						<!-- End logged in info -->
					 </section>
					<!-- /.widget -->
				 </div>
			 </div>
			 <!-- /#Left sidebar -->
	
			 <div class="col-xs-12 col-sm-12 col-md-9">
				 <div class="container" id="cont">
					 <article class="post clearfix">
						 <header>
							 <h1 id="content-title">Main Page</h1>
						 </header>
							<p>
						 <iframe name="iFrameContent" id="contentFrame" onload="adjustIframe()" width="100%" height="100%" src="landing.html" 
								 marginwidth="1" marginheight="1" frameborder="0" vspace="1" hspace="1">
								<p>If you see this, your browser doesn't support frames.</p>
						 </iframe>
							</p>
					 </article>
				 <!-- /.post -->
				 </div>
			 </div>
	<!-- /#content --> 
		 </div>
	 </div>
	<!-- end main content -->
	
	<footer id="footer">
		<p>Site By James Knight and Marek Lopez</p>
	</footer>
	<!-- /#footer --> 
</div>
<!-- /#pagewrap -->

</body>
</html>