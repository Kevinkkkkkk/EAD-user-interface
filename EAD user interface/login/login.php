<?php
require_once('includes/db.php');

if (isset($_POST['submit'])) {
    if (empty($_POST['s_id']) || empty($_POST['s_password'])) {
        $error = "usename or password is empty";
    } else {
        $username = $_POST['s_id'];
        $password = $_POST['s_password'];
        
        $query  = "SELECT s_id, s_f_name, s_l_name, s_password, s_level ";
        $query .= "FROM staff_information ";
        $query .= "WHERE s_id = '$username' AND s_password = '$password' ";
        echo $query;
        
        $result = mysqli_query($connection, $query);
        
        if (!$result) {
            die("query is wrong");
        }
        
        //save data to $row
        $row = mysqli_fetch_array($result);
        
        $numrows=mysqli_num_rows($result);
        if ($numrows == 1) {
            session_start();
            $_SESSION['login_id'] = $row['s_id'];
            $_SESSION['login_user'] = $username;
            $_SESSION['login_level'] = $row['s_id'];
            header('Location: ../../../EAD-Management system/index.php ');
            
        } else {
            echo "Login failed";
        }
        
        mysqli_free_result($result);
    }
}

?>

<?php
if (isset($error)) {
    echo "<span>" . $error ."</span>";
}

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
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<link href='https://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/responsiveslides.min.js"></script>
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
<script type="text/javascript" src="../js/hover_pack.js"></script>
</head>
<body>
<div class="header">
	<div class="header_top">
		<div class="container">
			<div class="logo">
                <li>Zura Women’s Online Store</li>
			</div>
			<ul class="shopping_grid">
                <a onclick="location.href='javascript:history.go(-1);'" value="Back"><li>Back</li></a>
			      <div class="clearfix"> </div>
			</ul>
		    <div class="clearfix"> </div>
		</div>
	</div>
</div>
</body>
<div class="about">
  <div class="container">
         <div class="register">
			   <div class="col-md-6 login-left">
			  	 <h3>Sign up</h3>
				 <p>By creating an account in our store, you can complete the checkout process faster, store multiple shipping addresses, view and track orders in your account, and more.</p>
				 <a class="acount-btn" href="register.php">Create an account</a>
			   </div>
			   <div class="col-md-6 login-right">
			  	<h3>Sign in</h3>
				<form action="" method="POST">
				  <div>
					<span>Email/Username/Verified phone<label>
                        </label></span><input type="text" name="s_id">
					
				  </div>
				  <div>
					<span>Password<label>*</label></span><input type="password" name="s_password">
					
				  </div>
				  <input type="submit" name="submit" value="Sign In">
			    </form>
			   </div>
			   <div class="clearfix"> </div>
		</div>
	</div>
</div>
<?php
    require_once('includes/footer.php');
?>

</html>