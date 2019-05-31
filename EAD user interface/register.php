<?php
require_once('includes/db.php');
if(isset($_POST['submit'])) {
    $u_name = $_POST['u_name'];
    $u_password = $_POST['u_password'];
    $u_telephone = $_POST['u_telephone'];

//2. Do a query

$query = "INSERT INTO user_information  ( u_name, u_telephone, u_password ) ";
$query .= "VALUES ( '$u_name', '$u_telephone', '$u_password' ) ";
mysqli_query($connection, $query);
header('Location:login.php ');
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
			      <a href="login/login.php"><li>Manager Only</li></a>
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
		  	  <form id="form1" name="form1" method="POST" onsubmit="return checkForm()">
				 <div class="register-top-grid">
					 <div>
						<span>Email/Username<label>*</label></span>
						<input type="text" name="u_name">
					 </div>
					 <div>
						 <span>Mobile number<label>*</label></span>
						 <input type="text" name="u_telephone" oninput="value=value.replace(/[^\d]/g,'')">
					 </div>
					 </div>
<script language="javascript" type="text/javascript">
function checkForm(){
var u_password = document.getElementById("u_password");
var u_password2 = document.getElementById("u_password2");
checkInput(u_password,"Password");
checkInput(u_passwprd2,"Confirm password");
return false;
}
function checkInput(obj,title){
var msgDiv = document.getElementById(obj.id+"msg");
var msg = title+" cannot be empty";
if(obj.value==null||obj.value==""){
if(msgDiv){
msgDiv.innerHTML = msg;
msgDiv.style.display ="";
}else{
showMsg(obj,msg);
}
}else{
if(msgDiv){
msgDiv.style.display ="none";
}
if(obj.id=="u_password2"){
checkPwdSame(obj);
}
}
}
function checkPwdSame(obj){
var msgDiv = document.getElementById(obj.id+"msg");
var u_password = document.getElementById("u_password");
var msg = "The passwords entered twice do not match, please re-enter";
if(obj.value!=u_password.value){
if(msgDiv){
msgDiv.innerHTML = msg;
msgDiv.style.display ="";
}else{
showMsg(obj,msg);
}
}else{
msgDiv.style.display ="none";
}
}
function showMsg(obj,msg){
var oDiv=document.createElement("DIV");
oDiv.id = obj.id + "msg";
oDiv.style.color = "red";
oDiv.innerHTML = msg;
obj.parentElement.appendChild(oDiv)
}
    $(document).ready(function(){
$("#groups .input_txt").each(function(){
var thisVal=$(this).val();
//Determines whether the value of the text box is empty, hides the prompt if there is a value, and displays if there is no value
if(thisVal!=""){
$(this).siblings("span").hide();
}else{
$(this).siblings("span").show();
}
//Focused input box verification
$(this).focus(function(){
$(this).siblings("span").hide();
}).blur(function(){
var val=$(this).val();
if(val!=""){
$(this).siblings("span").hide();
}else{
$(this).siblings("span").show();
}
});
})

})
</script>

                  		<div class="clearfix"> </div>
				<div>
                    <input type="checkbox" name="checkbox" checked="">
                    <i></i>
                    <label >I have read and agree to</label>
                    <a class="news-letter" href="#"> Zura's Conditions of Use and Privacy Policy.</a>
                </div>
				</form>
				<div class="clearfix"> </div>
				<div class="register-but">
				</div>
          				<div class="register-but">
				   <form method="POST">
					   <input name="submit" type="submit" value="Sign up">
					   <div class="clearfix"> </div>
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
