

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">


<!-- disable iPhone inital scale -->
<meta name="viewport" content="width=device-width; initial-scale=1.0">

<title>Final Project Site: Home</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

<!-- For some styling -->
<link href="css/siteStyle.css" rel="stylesheet" media="screen">

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
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/functions.js"></script>

<div class="container">
	<div class="page-header" style="border-bottom:0px;">
		 <h1 id="siteHeader">ICS 415 Final Project Site</h1>	 
	</div>
	<!-- navbar -->
	<nav class="navbar navbar-default" id="mainnav" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"><font color="black">text</font></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="navbar-collapse">
			 <ul class="nav navbar-nav">
				 <li class="active"><a href="index.html" target="iFrameGT">Home</a></li>
				 <li class="active"><a href="gt_lookup.php" target="iFrameGT">XBOX Live Gamertag Lookup </a></li>
				 <li class="active"><a href="about.html" target="iFrameGT">About</a></li>
			 </ul>
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

<!-- login form box -->
<form method="post" action="index.php" name="loginform">

    <label for="login_input_username">Username</label>
    <input id="login_input_username" class="login_input" type="text" name="user_name" required />

    <label for="login_input_password">Password</label>
    <input id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" required />

    <input type="submit"  name="login" value="Log in" />

</form>

<div><a href="register.php" target="iFrameGT">Register new account</a></div>

						 </form>
						 <!-- End login -->
					 </section>
					<!-- /.widget -->
				 </div>
			 </div>
			 <!-- /#Left sidebar -->
	
			 <div class="col-xs-12 col-sm-12 col-md-6">
				 <div class="container" style="background: white;" id="cont">
					 <article class="post clearfix">
						 <header>
							 <h1 id="content-title">Main Page</h1>
						 </header>
							<p>
						 <iframe name="iFrameGT" id="gtFrame" width="100%" height="100%" src="landing.html" 
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
