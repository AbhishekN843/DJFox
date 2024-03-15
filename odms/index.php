
<!DOCTYPE html>
<html>
<head>
<title>Online DJ Management System||Home Page</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-VKq3nxhgbs06s9mHZYXkZZO2m/2pDjrxxD10LrwuLbZGM4WQ0pK7U7li0wT9pNL+AtC6/00F2yNlTVCEoD/8Lw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<!---->
<?php include_once('includes/header.php');?>
<!---->
<script src="js/responsiveslides.min.js"></script>
  <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
        manualControls: '#slider3-pager',
      });
    });
  </script> 
<div class="content">
	 <div class="container">  
		  <div class="slider">
			<!-- Slideshow 3 -->
			<ul class="rslides" id="slider">
			<li><img src="images/a.jpg" alt=""></li>
			  </li>
			  <li><img src="images/b.jpg" alt="">
			  </li>	      
			  <li><img src="images/i.jpg" alt=""> 
			  <li><img src="images/g.jpg" alt="">
			  </li>
			  <li><img src="images/d.jpg" alt="">	
			  </li>	      
			  <li><img src="images/c.jpg" alt="">
			  </li>
			  <li><img src="images/h.jpg" alt="">
			  </li>	      
			  <li><img src="images/e.jpg" alt="">
			  </li>
			</ul>
			<!-- Slideshow 3 Pager --></br></br>
			<ul id="slider3-pager">
			  <li><a href="#"><img src="images/aa.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images/bb.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images/ii.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images/gg.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images/dd.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images/cc.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images/hh.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images/ee.jpg" alt=""></a></li>
			</ul>   
				<div class="clearfix"></div>
		  </div>
	 </div>
	 
	<?php include_once('includes/footer.php');?>
</div>
<!---->

<!---->
</body>
</html>
