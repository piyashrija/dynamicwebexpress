<?php
error_reporting(E_ALL);
include('welcome-front.php');
$page_url = explode('.',basename(curPageURL()));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link type="text/css" rel="stylesheet" href="css/reset.css" />
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/lightbox.css" rel="stylesheet" />
<link rel="stylesheet" href="css/default.css" type="text/css" media="screen" />
<link type="text/css" rel="stylesheet" href="css/global.css"/>
<script src="javascript/jquery-1.10.2.min.js"></script>


<script type="text/javascript" src="javascript/jquery-migrate-1.1.1.js"></script>
<script src="javascript/bootstrap.min.js" type="text/javascript"></script>
<script src="javascript/lightbox-2.6.min.js"></script>

<script type="text/javascript" src="javascript/script.js"></script>


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
					<p> call us: +61 412 026 189</p>
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
							<li class ='<?php $active = ($page_url[0] == "feature")?'active':'';echo $active;?>'><a href="feature.php">Features</a></li>
							<li class ='<?php $active = ($page_url[0] == "portfolio")?'active':'';echo $active;?>'><a href="portfolio.php">Portfolio</a></li>
                                                        <li class='<?php $active  =($page_url[0] == "blog")?'active':'';echo $active;?>'><a href="blog.php">Blog</a></li>
							<li class='<?php $active  =($page_url[0] == "contact")?'active':'';echo $active;?>'><a href="contact.php">Contact</a></li>
						</ul>
						<form class="navbar-search pull-right">
							<input placeholder="Search" class="search-query" type="text">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Menu row-->	
		
	
		
    </div>



<div id="wrap">
    <div class="row bar"></div>
	<div id="main" class="portfolio">
		
		<div class="row">
			<div class="span12">
				<h1>PORTFOLIO</h1>
				<p>sub title</p>
			</div>
		</div>
            
            
		<div class="row bar"></div>
                
                
		<ul class="row enlarge">
                    <li class="py-cr span4">
					
                        <a href="images/g1.jpg" data-lightbox="roadtrip" title="Noob"><img src="images/g1.jpg"  /></a>	
                                                        
                                                        <p><b>T</b>asjbfk  jasbfk ans sds dk fngka  snkfn  sadlknfsajd  lfjsaljlfjs  aljdf lksanld fmnl asndlkf  nsandf nsad fkn sdnfksnd nksf jdkfn skadn
                                                      </p> 
                                                        <div class="like"><img src="images/ht_icon.png"  /></div>
                                                        <div class="rdl"><img src="images/dblue-1.png"  /></div>
                        </li>
			<li class="py-cr span4">
				
						  
                            <a href="images/g2.jpg" data-lightbox="roadtrip" title="My caption"><img src="images/g2.jpg"  /></a>
                                                       
                                                        <p><b>B</b>asjbfk jasbfka nsdk  dsd fngk asnkfnsa   dlknfsaj dlfjsa ljlfjsal   jdflks anldfmn lasndl  kfns andfnsad nfk nsdnfk sndnksf jdkfns kadn
                                                        </p>    
                                                         <div class="like"><img src="images/ht_icon.png"  /></div>
					 <div class="rdl"><img src="images/orange-1.png"  /></div>
					
			</li>
                        <li class="py-cr span4">
				
						  
                            <a href="images/g3.jpg" data-lightbox="roadtrip" title="My caption"><img src="images/g3.jpg"  /></a>
                                                      
                                                        <p><b>L</b>asjbfk jasbfka nsdk fngk  sdas asnkfnsa   dlknfsaj dlfjsa ljlfjsal   jdflks anldfmn lasndl  kfns andfnsad nfk nsdnfk sndnksf jdkfns kadn
                                                        </p>    
                                                         <div class="like"><img src="images/ht_icon.png"  /></div>
					<div class="rdl"><img src="images/lblue-1.png"  /></div>
					
			</li>
                        
                        <li class="py-cr span4">
					
                            <a href="images/g4.jpg" data-lightbox="roadtrip" title="My caption"><img src="images/g4.jpg"  /></a>
                                        
                                                        <p><b>H</b>asjbfk  jasbfk ansdk fng dsadka  snkfn  sadlknfsajd  lfjsaljlfjs  aljdf lksanld fmnl asndlkf  nsandf nsad fkn sdnfksnd nksf jdkfn skadn</p>
                                                         <div class="like"><img src="images/ht_icon.png"  /></div>
                                                        <div class="rdl"><img src="images/blue-1.png"  /></div>
                                                        
			</li>
			<li class="py-cr span4">
				
						
                            <a href="images/g5.jpg" data-lightbox="roadtrip" title="My caption"><img src="images/g5.jpg"  /></a>
                                                     
                                                        <p><b>A</b>asjbfk jasbfka nsdk fngk asnk dsa fnsa   dlknfsaj dlfjsa ljlfjsal   jdflks anldfmn lasndl  kfns andfnsad nfk nsdnfk sndnksf jdkfns kadn
                                                        </p>  <div class="like"><img src="images/ht_icon.png"  /></div>     
                                                       <div class="rdl"><img src="images/green-1.png"  /></div>  
					
					
			</li>
                        <li class="py-cr span4">
				
						  
                            <a href="images/g6.jpg" data-lightbox="roadtrip" title="My caption"><img src="images/g6.jpg"  /></a>
                                                       
                                                        <p><b>K</b>asjbfk jasbfka nsdk fngk asn dsad kfnsa   dlknfsaj dlfjsa ljlfjsal   jdflks anldfmn lasndl  kfns andfnsad nfk nsdnfk sndnksf jdkfns kadn
                                                        </p>   <div class="like"><img src="images/ht_icon.png"  /></div>
					 <div class="rdl"><img src="images/red-1.png"  /></div>
					
			</li>
		</ul>
                
                
	</div>
</div>
<?php include 'footer.php';?>