<?php
require_once('includes/db.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashionpress Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<link href='https://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
</script>
<script type="text/javascript" src="js/hover_pack.js"></script>
</head>
<body>
<div class="header">
	<div class="header_top">
		<div class="container">
			<div class="logo">
                <li>Zura Women’s Online Store</li>
			</div>
			<ul class="shopping_grid">
			      <a href="register.php"><li>Sign up</li></a>
			      <a href="login.php"><li>Manager Only</li></a>
			      <a href="purchase.php"><li><span class="m_1">Shopping cart</span>&nbsp;&nbsp;(0) &nbsp;<img src="images/bag.png" alt=""/></li></a>
			      <div class="clearfix"> </div>
			</ul>
		    <div class="clearfix"> </div>
		</div>
	</div>
	<div class="h_menu4"><!-- start h_menu4 -->
		<div class="container">
				<a class="toggleMenu" href="index.php">Menu</a>
				<ul class="nav">
					<li><a href="index.php" data-hover="Index">Index</a></li>
					<li><a href="all.php" data-hover="All products">All products</a></li>
					<li><a href="hot.php" data-hover="Hot products">Hot products</a></li>
					<li><a href="special.php" data-hover="Events">Events</a></li>
					<li><a href="contact.php" data-hover="Contact us">Contact us</a></li>
				 </ul>
				 <script type="text/javascript" src="js/nav.js"></script>
	      </div><!-- end h_menu4 -->
     </div>
</div>
</body>
<div class="about">
  <div class="container">
         <div class="register">
			   <div class="col-md-6 login-left">
			  	 <h3>Sign up</h3>
				 <p>By creating an account in our store, you can complete the checkout process faster, store multiple shipping addresses, view and track orders in your account, and more.</p>
				 <a class="acount-btn" href="register.html">Create an account</a>
			   </div>
			   <div class="col-md-6 login-right">
			  	<h3>Sign in</h3>
				<form>
				  <div>
					<span>Email/Username/Verified phone<label>*</label></span>
					<input type="text">
				  </div>
				  <div>
					<span>Password<label>*</label></span>
					<input type="text">
				  </div>
				  <a class="forgot" href="#">Forgot password?</a>
				  <input type="submit" value="Sign in">
			    </form>
			   </div>
			   <div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="footer_bg">
</div>
<div class="footer">
	<div class="container">
		<div class="col-md-3 f_grid1" style="text-align: right;">
			<h3><a href="#">Shopping guide</a></h3>
			<p><a href="#">Beginner's guide</a></p>
      <p><a href="#">Check receipt</a></p>
		</div>
		<div class="col-md-3 f_grid1 f_grid1" style="text-align: center;">
			<h3><a href="#">Delivery Method</a></h3>
			<ul class="social">
				<li><a href="#"><p class="m_3">Shipping instructions</p><div class="clearfix"> </div></a></li>
			    <li><a href="#"><p class="m_3">Postage</p><div class="clearfix"> </div></a></li>
				<li><a href="#"><p class="m_3">Mode of payment</p><div class="clearfix"> </div></a></li>
				<li><a href="#"><p class="m_3">Description of payment method</p><div class="clearfix"> </div></a></li>
			</ul>
		</div>
		<div class="col-md-6 f_grid3">
			<h3><a href="#">After-sales Service</a></h3>
			<ul class="list">
				<li><p><a href="#">Return instructions</a></p></li>
				<li><p><a href="#">Return and Exchange Policy</a></p></li>
			</ul>
            <ul class="list1">
				<li>
                    <img src="images/tu1.png">
                </li>
			</ul>

		</div>
	</div>
</div>
<div class="footer_bottom">
       	<div class="container">
			<div class="copy">
			    <p>Copyright &copy;2017-2027 Zura Women's Clothes Store all righrs reserved</p>
		    </div>
		    <div class="clearfix"> </div>
       	</div>
</div>

</body>
</html>