<?php
require_once('includes/db.php');
require_once('includes/header.php');
?>
<!DOCTYPE HTML>
<html>
<div class="column_center">
  <div class="container">
	<div class="search">
	  <div class="stay">Search product</div>
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
 		    Current Position:&nbsp;&nbsp; <a href="index.php"> All Products </a><span>&gt;</span>
 		<a href="javascript:;" onclick="return false">Hot Products</a></div></div></div>
	    <h4 class="head"><span class="m_2">Hot</span> Product</h4>
	    <div class="top_grid2">
	     <div class="col-md-41 top_grid1-box1"><a href="login/single.php">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="images/long-sleeved dress.JPG" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>Long-sleeved Dress</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>$299<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Buy</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	    </a> </div>
	    <div class="col-md-41 top_grid1-box1"><a href="login/single.php">
	     	<div class="grid_1">
	     	 <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="images/long-sleeved dress2.JPG" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>Long-sleeved Dress(White)</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>$399<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Buy</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
	     <div class="col-md-41 top_grid1-box1"><a href="login/single.php">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="images/Long sleeve.JPG" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>Long Sleeve</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>$199<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Buy</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
         <div class="col-md-41 top_grid1-box1"><a href="login/single.php">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="images/T-shirt.JPG" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>T-shirt</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>$99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Buy</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
	     <div class="clearfix"> </div>
	    </div>
    <div class="top_grid2">
	     <div class="col-md-41 top_grid1-box1"><a href="login/single.php">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="images/T-shirt2.JPG" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>T-shirt</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>$99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Buy</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	    </a> </div>
	    <div class="col-md-41 top_grid1-box1"><a href="login/single.php">
	     	<div class="grid_1">
	     	 <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="images/denim jacket.JPG" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>denim jacket</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>$199<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Buy</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
	     <div class="col-md-41 top_grid1-box1"><a href="login/single.php">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="images/denim jacket2.JPG" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>denim jacket 2</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>$199<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Buy</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
         <div class="col-md-41 top_grid1-box1"><a href="login/single.php">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="images/shirt.JPG" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>shirt</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>$99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Buy</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
	     <div class="clearfix"> </div>
	    </div>
	    <div class="top_grid2">
	     <div class="col-md-41 top_grid1-box1"><a href="login/single.php">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="images/shirt2.JPG" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>shirt 2</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>$99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Buy</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
	    <div class="col-md-41 top_grid1-box1"><a href="login/single.php">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="images/Sweatshirt.JPG" width="210px" height="260px"class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>Sweatshirt</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>$99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Buy</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
	     <div class="col-md-41 top_grid1-box1"><a href="login/single.php">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="images/Sweatshirt2.JPG" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>Sweatshirt 2</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>$99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Buy</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
         <div class="col-md-41 top_grid1-box1"><a href="login/single.php">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="images/shirt3.JPG" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>Shirt</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>$99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Buy</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
	     <div class="clearfix"> </div>
	    </div>
       </div>
	  </div>
	</div>
</div>
<?php
    require_once('includes/footer.php');
?>
</body>
</html>
