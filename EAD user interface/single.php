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
		    <h3 class="menu_head">Product Categories</h3>
			  <ul class="menu">
				<li class="item1"><a href="#"><img class="arrow-img" src="images/f_menu.png" alt=""/> Hats</a>
                    <ul class="cute">
						<li class="subitem1"><a href="product.html">瑞士糕点</a></li>
						<li class="subitem2"><a href="product.html">派</a></li>
						<li class="subitem3"><a href="product.html">蛋糕</a></li>
                        <li class="subitem3"><a href="product.html">面包</a></li>
                        <li class="subitem3"><a href="product.html">沙琪玛</a></li>
					</ul>
				</li>
				<li class="item2"><a href="#"><img class="arrow-img" src="images/f_menu.png" alt=""/>Coat</a>
                    <ul class="cute">
						<li class="subitem1"><a href="product.html">瑞士糕点</a></li>
						<li class="subitem2"><a href="product.html">派</a></li>
						<li class="subitem3"><a href="product.html">蛋糕</a></li>
                        <li class="subitem3"><a href="product.html">面包</a></li>
                        <li class="subitem3"><a href="product.html">沙琪玛</a></li>
					</ul>
                  </li>
				<li class="item3"><a href="#"><img class="arrow-img" src="images/f_menu.png" alt=""/>Skirt</a>
				</li>
				<li class="item4"><a href="#"><img class="arrow-img" src="images/f_menu.png" alt=""/>Jeans</a>
				</li>
				<li class="item5"><a href="#"><img class="arrow-img" src="images/f_menu.png" alt=""/>T-shirt</a>
				</li>
				<li class="item6"><a href="#"><img class="arrow-img" src="images/f_menu.png" alt=""/>Shirt</a>
				</li>
				<li class="item7"><a href="#"><img class="arrow-img" src="images/f_menu.png" alt=""/>Skirt</a>
				</li>
                  <li class="item7"><a href="#"><img class="arrow-img" src="images/f_menu.png" alt=""/>Jeans</a>
				</li>
                  <li class="item7"><a href="#"><img class="arrow-img" src="images/f_menu.png" alt=""/>Casual pants</a>
				</li>

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
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src='images/photo2.png' class="img-responsive" />
									<img class="etalage_source_image" src="images/photo2.png" class="img-responsive" title="" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/photo2.png" class="img-responsive" />
								<img class="etalage_source_image" src="images/photo2.png" class="img-responsive" title="" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/photo2.png" class="img-responsive"  />
								<img class="etalage_source_image" src="images/photo2.png"class="img-responsive"  />
							</li>
						    <li>
								<img class="etalage_thumb_image" src="images/photo2.png" class="img-responsive"  />
								<img class="etalage_source_image" src="images/photo2.png"class="img-responsive"  />
							</li>
						</ul>
						 <div class="clearfix"></div>		
				  </div> 
				  <div class="desc1 span_3_of_2">
				  	<p>可比克薯片60g原味番茄味办公室休闲膨化食品批发小零食</p>
				
			    <div class="price_single">
				  <span class="reducedfrom">￥99.33</span>
				  <span class="actual">￥66.33</span><a href="#"></a>
				</div>
                      <br/><br/><br/>
				<form action="" method="get"> 包装规格:
                    <br/><label><input name="Fruit" type="radio" value="" />60g x 48 </label> 
                 
                    
                </form> 
                      <br/><form action="" method="get"> 商品规格:<br/>
                    <label><input name="Fruit" type="radio" value="" />件 </label> 
                    <label><input name="Fruit" type="radio" value="" />托</label> 
                    
                </form> 
                     <br/> <form action="" method="get"> 味道: <br/>
                    <label><input name="Fruit" type="radio" value="" />番茄味 </label> 
                    <label><input name="Fruit" type="radio" value="" />原味 </label> 
                    <label><input name="Fruit" type="radio" value="" />烧烤味</label> 
                    <label><input name="Fruit" type="radio" value="" />香辣味 </label>
                    <label><input name="Fruit" type="radio" value="" />牛肉味 </label> 
                    <label><input name="Fruit" type="radio" value="" />爽口黄瓜味 </label>  
                    <label><input name="Fruit" type="radio" value="" />鸡肉味 </label>      
                </form> 
				<div class="quantity_box">
					<ul class="product-qty">
					   <span>数量：</span>
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
			    <a href="purchase.html" title="Online Reservation" class="btn bt1 btn-primary btn-normal btn-inline " target="_self">Add to Cart</a>
                <a href="order.html" title="Online Reservation" class="btn bt1 btn-primary btn-normal btn-inline " target="_self">Buy</a>
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
									  	<li><a href="#"><img src="images/ke1.jpg"></a></li>
									  	<li><a href="#"><img src="images/ke2.jpg"></a></li>
									  	<li><a href="#"><img src="images/ke3.jpg"></a></li>
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
	     <div class="col-md-4 top_grid1-box1 top_grid2-box2"><a href="single.html">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="images/photo2.png" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>好吃点香脆腰果饼干礼盒装800g核桃饼杏仁饼腰果饼休闲零食</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>￥99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><a href="single.html" title="Get It" class="btn btn-primary btn-normal btn-inline " target="_self">Buy</a></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
	    <div class="col-md-4 top_grid1-box1"><a href="single.html">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="images/photo2.png" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>好吃点香脆腰果饼干礼盒装800g核桃饼杏仁饼腰果饼休闲零食</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>￥99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><a href="single.html" title="Get It" class="btn btn-primary btn-normal btn-inline " target="_self">Buy</a></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
	     <div class="col-md-4 top_grid1-box1"><a href="single.html">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="images/photo2.png" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>好吃点香脆腰果饼干礼盒装800g核桃饼杏仁饼腰果饼休闲零食</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>￥99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><a href="single.html" title="Get It" class="btn btn-primary btn-normal btn-inline " target="_self">Buy</a></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
	     <div class="clearfix"> </div>
	    </div> 
	    <div class="top_grid2">
	     <div class="col-md-4 top_grid1-box1 top_grid2-box2"><a href="single.html">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="images/photo2.png" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>好吃点香脆腰果饼干礼盒装800g核桃饼杏仁饼腰果饼休闲零食</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>￥99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><a href="single.html" title="Get It" class="btn btn-primary btn-normal btn-inline " target="_self">Buy</a></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	    </a> </div>
	    <div class="col-md-4 top_grid1-box1"><a href="single.html">
	     	<div class="grid_1">
	     	 <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="images/photo2.png" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>好吃点香脆腰果饼干礼盒装800g核桃饼杏仁饼腰果饼休闲零食</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>￥99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><a href="single.html" title="Get It" class="btn btn-primary btn-normal btn-inline " target="_self">Buy</a></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
	     <div class="col-md-4 top_grid1-box1"><a href="single.html">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="images/photo2.png" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>好吃点香脆腰果饼干礼盒装800g核桃饼杏仁饼腰果饼休闲零食</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>￥99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><a href="single.html" title="Get It" class="btn btn-primary btn-normal btn-inline " target="_self">Buy</a></li>
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