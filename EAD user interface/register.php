<?php
require_once('includes/db.php');

if(isset($_POST['submit'])) {
    $u_id = $_POST['u_id'];
    $u_name = $_POST['u_name'];
    $u_password = $_POST['u_password'];
    $u_telephone = $_POST['u_telephone'];
    
//2. Do a query (select all students)
$query = "INSERT INTO user_information  ( u_name, u_password, u_telephone ) ";
$query .= "VALUES ( '$u_name', '$u_password', '$u_telephone' ) ";

mysqli_query($connection, $query);
header('location: login.php');    
}



?>
<!DOCTYPE HTML>
<html>
<head>
<title>Join Zura</title>
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
			      <a href="login.php"><li>Sign in</li></a>
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
<div class="about">
  <div class="container">
      <div class="register">

				<div class="clearfix"> </div>
				<div class="register-but">
                    
<form action="register.php" method="post">
    
    Username:<br>
    <input type="varchar" name="u_name" style="width:520px" ><br>
    Password:<br>
    <input type="varchar" name="u_password" style="width:520px"><br>
    Telephone Number:<br>
    <input type="varchar" name="u_telephone" style="width:520px"><br>
    
 
    <br><input type="submit" name="submit" value="Submit">
</form>
				</div>
		   </div>
	</div>
</div>
<?php
    require_once('includes/footer.php');
?>
</body>
</html>