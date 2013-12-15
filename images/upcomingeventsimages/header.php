<?php
error_reporting(E_ALL);
include('welcome-front.php');
$page_url = explode('.',basename(curPageURL()));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link type="text/css" rel="stylesheet" href="css/reset.css" />
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link rel="stylesheet" href="css/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<link type="text/css" rel="stylesheet" href="css/global.css"/>
<script type="text/javascript" src="javascript/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="javascript/jquery.nivo.slider.pack.js"></script>
<script src="javascript/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="javascript/script.js"></script>
<script type="text/javascript">
	$(window).load(function() {
		$('#slider').nivoSlider({
			manualAdvance: true,
			controlNavThumbs:false,
			directionNav:true
		});
	});
	
</script>
<title>Dynamic Web Express</title>
</head>

<body>
<div id="wrapper" class="container">
	<div id="header-wrap">
		<div class="ct-dropdown row">
			<p class="span12"><span><a mailto="info@dynamicwebexpress.com">info@dynamicwebexpress.com</a></span></p>
		</div>
		<!--ct-dropdown-->
		<div class="row hr-lo">
			<div>
				<div class="span3">
					<a class="span3" href="#"><span><img src="images/dynamicwebexpress_v2.png"/></span></a>
				</div>
				
				<div class="span9">
					<p> call us: +61 423 465 437</p>
					<p>
						<span><img src="images/twitter.png"/></span>
						<span><img src="images/facebook.png"/></span>
						<span><img src="images/stumble.png"/></span>
					</p>
				</div>
			</div>
		</div>
		<!-- header logo row -->
			
		<div class="subnav navbar">
			
						
			<div class="navbar-inner">
				<div class="container">
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li class ='<?php $active = ($page_url[0] == "index")?'active':'';echo $active;?>'><a href="index.php">Home</a></li>
							<li><a href="#">Features</a></li>
							<li class ='<?php $active = ($page_url[0] == "portfolio")?'active':'';echo $active;?>'><a href="portfolio.php">Portfolio</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
						<form class="navbar-search pull-right">
							<input placeholder="Search" class="search-query" type="text">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Menu row-->	
		
	
		
    </div><!--header-wrap-->