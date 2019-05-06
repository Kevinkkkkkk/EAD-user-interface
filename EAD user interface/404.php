<?php
require_once('includes/db.php');
require_once('includes/header.php');
?>
<!DOCTYPE HTML>
<html>
<div class="column_center">
  <div class="container">
	<div class="search1">
	  <div class="stay">Search Product</div>
	  <div class="stay_right">
		  <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
		  <input type="submit" value="">
	  </div>
	  <div class="clearfix"> </div>
	</div>
    <div class="clearfix"> </div>
  </div>
</div>
<div class="main">
  <div class="content_top">
  	<div class="container">
	   <div class="col-md-3 sidebar_box">
	   	 <div class="sidebar">
				<!--initiate accordion-->
       </div>			
	   </div>
	   <div class="col-md-91 content_right">
            <div class="wrap" style="margin-top:20px;"><div id="control_eda1ebfe-e449-4f2c-85c6-50191aca18dd" class="control_goodscondition"><div class="condition">
    Current Position: <a href="index.php">Index</a><span>&gt;</span>
<a href="javascript:;" onclick="return false">404 Error</a></div></div></div>
	    <div class="top_grid2">

	     <div class="clearfix"> </div>
	    </div>
       </div>
	  </div>
	</div>
</div>
<div class="about"> 
 <div class="container">
  	<div class="page-not-found">
		<h1 style="font-size: 100px;">404</h1>
        <h2>You do not have permission to view related content.<br/>
Please contact the manager for relevant content</h2>
		<input name="submit2" type="submit" onclick="location.href='javascript:history.go(-1);'" value="Back"/>
	</div>
 </div>
</div>
<?php
    require_once('includes/footer.php');
?>
</body>
</html>