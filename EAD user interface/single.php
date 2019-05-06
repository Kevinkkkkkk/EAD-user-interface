<?php
require_once('includes/db.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Zura Women’s Online Store</title>
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
<script type="text/javascript" src="js/hover_pack.js"></script>
<link rel="stylesheet" href="css/etalage.css">
<script src="js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
            </script>	

</head>
<body>
<body>
<div class="header">
	<div class="header_top">
		<div class="container">
			<div class="logo">
                <li>Zura Women’s Online Store</li>
			</div>
			<ul class="shopping_grid">
			      <a href="register.php"><li>Resgister</li></a>
			      <a href="login.php"><li>Login</li></a>
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
			<div class="menu_box">
		    <h3 class="menu_head">Classification of goods</h3>
			  <ul class="menu">
                  <?php
                                    $query = "SELECT (SELECT group_concat(DISTINCT product.p_name) FROM product WHERE product.i_id = inventory.i_id) AS name, inventory.type as type ";
                                    $query .= "FROM product LEFT JOIN inventory ON product.i_id = inventory.i_id GROUP BY inventory.i_id";
                                    $result = mysqli_query($connection, $query);
                                    if (!$result) {
                                        die("query is wrong");
                                            }
                                        while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                <li class="item1"><a href="#"><img class="arrow-img" src="images/f_menu.png" alt=""/><?php echo $row["type"]; ?></a>
                                    <ul class="cute">
						                <li class="subitem1"><a href="product.php"><?php echo $row["name"]; ?></a></li>
					</ul>
                </li>
<?php
                                   }
                  mysqli_free_result($result);
                        ?>
                 
			</ul>
		</div>
				<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });

			});
		</script>
       </div>	
	   </div> 
	   <div class="col-md-9 single_right">
	   	<div class="single_top">
	       <div class="single_grid">
				<div class="grid images_3_of_2">
						<ul id="etalage">
							<li>
								<a href="optionallink.php">
									<img class="etalage_thumb_image" src='images/Long%20skirt.JPG' class="img-responsive" />
									<img class="etalage_source_image" src="images/Long%20skirt.JPG" class="img-responsive" title="" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/Long%20skirt2.JPG" class="img-responsive" />
								<img class="etalage_source_image" src="images/Long%20skirt2.JPG" class="img-responsive" title="" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/Long%20sleeve.JPG" class="img-responsive"  />
								<img class="etalage_source_image" src="images/Long%20sleeve.JPG"class="img-responsive"  />
							</li>
						    <li>
								<img class="etalage_thumb_image" src="images/shirt.JPG" class="img-responsive"  />
								<img class="etalage_source_image" src="images/shirt.JPG"class="img-responsive"  />
							</li>
						</ul>
						 <div class="clearfix"></div>		
				  </div> 
				  <div class="desc1 span_3_of_2">
				  	<p>Long skirt</p>
				
			    <div class="price_single">
				  <span class="reducedfrom">$66.33</span>
				  <span class="actual">$59.00</span><a href="#"></a>
				</div>
                      <br/><br/><br/>
				<form action="" method="get"> Ribbed knit skirt with an elastic waistband and an asymmetric hem.
                    <br/>
                 
                    
                </form> 
                      <br/><form action="" method="get"> MODEL HEIGHT:
<br/>
                    175 CM
                </form> 
                     <br/> <form action="" method="get"> Choose a size: <br/>
                    <label><input name="Fruit" type="radio" value="" />XS (160/62A)</label> 
                    <label><input name="Fruit" type="radio" value="" />S (165/66A)</label> 
                    <label><input name="Fruit" type="radio" value="" />M (170/70A)</label> 
                    <label><input name="Fruit" type="radio" value="" />L (175/78A)</label>
                      <br/>
                    <a href="contact.php" data-hover="All products">Don't have your own size?  Contact us!</a>
                </form> 
				<div class="quantity_box">
					<ul class="product-qty">
					   <span>Amonut:</span>
					   <select>
						 <option>1</option>
						 <option>2</option>
						 <option>3</option>
						 <option>4</option>
						 <option>5</option>
						 <option>6</option>
					   </select>
				    </ul>
				    <ul class="single_social">
						<li><a href="#"><i class="fb1"> </i> </a></li>
						<li><a href="#"><i class="tw1"> </i> </a></li>
						<li><a href="#"><i class="g1"> </i> </a></li>
						<li><a href="#"><i class="linked"> </i> </a></li>
		   		    </ul>
		   		    <div class="clearfix"></div>
	   		    </div>
			    <a href="purchase.php" title="Online Reservation" class="btn bt1 btn-primary btn-normal btn-inline " target="_self">Add to Cart</a>
                <a href="order.php" title="Online Reservation" class="btn bt1 btn-primary btn-normal btn-inline " target="_self">Buy</a>
			</div>
		    <div class="clearfix"> </div>
				</div>
          	    <div class="clearfix"></div>
          </div>
          <div class="sap_tabs">	
				     <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Product Details</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Comment on Commodity</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Monthly Sales</span></li>
							  <div class="clear"></div>
						  </ul>				  	 
							<div class="resp-tabs-container">
							    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
									<div class="facts">
									  <ul class="tab_list">
									  	<li><a href="#"></a></li>
									  	<li><a href="#"><img src="images/skirt1.jpg"></a></li>
									  	<li><a href="#"><img src="images/skirt2.jpg"></a></li>
									  	<li><a href="#"><img src="images/skirt3.jpg"></a></li>
									  </ul>           
							        </div>
							     </div>	
							      <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<div class="facts">
                                        <div class="pingjia">
									  <ul class="tab_list">
									    <table class="pingjia">
                                            <tr>
                                                <td></td>
                                            </tr>
                                            <br/>
                                            <tr>
                                                <td></td>
                                            </tr>
                                        </table>
									  </ul>           
							        </div>
                                      </div>
							     </div>	
							      <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                                      
									<table class="listTable">
                                      <tr class="tableHead">
                                        <th class="text-center">Buyer</th>
                                        <th class="text-center">Style/Model</th>
                                        <th class="text-center">Amount</th>
                                        <th class="text-center">Deal Time</th>  
                                        
                                        </tr>
                                      </table>    
							     </div>	
							 </div>
					      </div>
			  </div>
		<h3 class="single_head">Guess You Like</h3>	
	    <div class="related_products">
	     <div class="col-md-4 top_grid1-box1 top_grid2-box2"><a href="single.php">
<div class="grid_1">
            <?php
               $query = "SELECT p_name, p_price, photo ";
               $query .= "FROM product WHERE p_id = 'dress001'";
               $result = mysqli_query($connection, $query);
               if (!$result) {
                   die("query is wrong");
                       }
                   while ($row = mysqli_fetch_array($result)) {
               ?>  
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src=" <?php echo $row["photo"] ?>" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p><?php echo $row["p_name"] ?></p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>$<?php echo $row["p_price"] ?></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Buy</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
                         <?php
                                   }
                  mysqli_free_result($result);
                        ?>
	     </a></div>
	    <div class="col-md-4 top_grid1-box1"><a href="single.php">
	     	<div class="grid_1">
            <?php
               $query = "SELECT p_name, p_price, photo ";
               $query .= "FROM product WHERE p_id = 'skirt001'";
               $result = mysqli_query($connection, $query);
               if (!$result) {
                   die("query is wrong");
                       }
                   while ($row = mysqli_fetch_array($result)) {
               ?>  
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src=" <?php echo $row["photo"] ?>" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p><?php echo $row["p_name"] ?></p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>$<?php echo $row["p_price"] ?></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Buy</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
                         <?php
                                   }
                  mysqli_free_result($result);
                        ?>
	     </a></div>
	     <div class="col-md-4 top_grid1-box1"><a href="single.php">
	     	<div class="grid_1">
            <?php
               $query = "SELECT p_name, p_price, photo ";
               $query .= "FROM product WHERE p_id = 'skirt003'";
               $result = mysqli_query($connection, $query);
               if (!$result) {
                   die("query is wrong");
                       }
                   while ($row = mysqli_fetch_array($result)) {
               ?>  
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src=" <?php echo $row["photo"] ?>" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p><?php echo $row["p_name"] ?></p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>$<?php echo $row["p_price"] ?></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Buy</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
                         <?php
                                   }
                  mysqli_free_result($result);
                        ?>
	     </a></div>
	     <div class="clearfix"> </div>
	    </div> 
	    <div class="top_grid2">
	     <div class="col-md-4 top_grid1-box1 top_grid2-box2"><a href="single.php">
	     	<div class="grid_1">
            <?php
               $query = "SELECT p_name, p_price, photo ";
               $query .= "FROM product WHERE p_id = 'shirt001'";
               $result = mysqli_query($connection, $query);
               if (!$result) {
                   die("query is wrong");
                       }
                   while ($row = mysqli_fetch_array($result)) {
               ?>  
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src=" <?php echo $row["photo"] ?>" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p><?php echo $row["p_name"] ?></p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>$<?php echo $row["p_price"] ?></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Buy</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
                         <?php
                                   }
                  mysqli_free_result($result);
                        ?>
	    </a> </div>
	    <div class="col-md-4 top_grid1-box1"><a href="single.php">
	     	<div class="grid_1">
            <?php
               $query = "SELECT p_name, p_price, photo ";
               $query .= "FROM product WHERE p_id = 'longsleev001'";
               $result = mysqli_query($connection, $query);
               if (!$result) {
                   die("query is wrong");
                       }
                   while ($row = mysqli_fetch_array($result)) {
               ?>  
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src=" <?php echo $row["photo"] ?>" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p><?php echo $row["p_name"] ?></p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>$<?php echo $row["p_price"] ?></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Buy</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
                         <?php
                                   }
                  mysqli_free_result($result);
                        ?>
	     </a></div>
	     <div class="col-md-4 top_grid1-box1"><a href="single.php">
	     	<div class="grid_1">
            <?php
               $query = "SELECT p_name, p_price, photo ";
               $query .= "FROM product WHERE p_id = 'coat001'";
               $result = mysqli_query($connection, $query);
               if (!$result) {
                   die("query is wrong");
                       }
                   while ($row = mysqli_fetch_array($result)) {
               ?>  
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src=" <?php echo $row["photo"] ?>" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p><?php echo $row["p_name"] ?></p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>$<?php echo $row["p_price"] ?></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Buy</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
                         <?php
                                   }
                  mysqli_free_result($result);
                        ?>
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