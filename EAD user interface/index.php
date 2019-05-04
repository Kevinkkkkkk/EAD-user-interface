<?php
require_once('includes/db.php');
require_once('includes/header.php');
?>
<!DOCTYPE HTML>
<html>
<div class="slider">
	  <div class="callbacks_container">
	      <ul class="rslides" id="slider">
	        <li><img src="images/white%20picture.jpg" class="img-responsive" alt=""/>
	         <div class="banner_desc">
				<h1></h1>
				<h2></h2>
			 </div>
	        </li>
	        <li><img src="images/white%20picture.jpg" class="img-responsive" alt=""/>
	          <div class="banner_desc">
				<h1></h1>
				<h2></h2>
			  </div>
	        </li>
	      </ul>
	  </div>
</div>
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
			<div class="menu_box">
		    <h3 class="menu_head">Classification of goods</h3>
			  <ul class="menu">
                  <?php
                                    $query1 = "SELECT (SELECT group_concat(DISTINCT product.p_name) FROM product WHERE product.i_id = inventory.i_id) AS name, inventory.type as type ";
                                    $query1 .= "FROM product LEFT JOIN inventory ON product.i_id = inventory.i_id GROUP BY inventory.i_id";
                                    $result1 = mysqli_query($connection, $query1);
                                    if (!$result1) {
                                        die("query is wrong");
                                            }
                                        while ($row1 = mysqli_fetch_array($result1)) {
                                    ?>
                                <li class="item1"><a href="#"><img class="arrow-img" src="images/f_menu.png" alt=""/><?php echo $row1["type"]; ?></a>
                                    <ul class="cute">
						                <li class="subitem1"><a href="product.php"><?php echo $row1["name"]; ?></a></li>
					</ul>
                </li>
<?php
                                   }
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
		    <div class="delivery" style="position: relative;">
				<img src="images/delivery.jpg" class="img-responsive" alt=""/>
				<h3>Online&nbsp;</h3>
				<h4>Services</h4>
			</div>
           
			
	   </div>
	   <div class="col-md-9 content_right">
	   	<div class="top_grid1">
	      <div class="col-md-4 box_2"><a href="single.php">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="images/photo2.png" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>可比克薯片60g原味番茄味办公室休闲膨化食品批发小零食</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>￥99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Buy</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
	     <div class="col-md-8 box_1"><a href="single.php">
	       <div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="images/photo1.png" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>达利园680g蛋黄派礼盒</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>￥99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Buy</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
	     <div class="clearfix"> </div>
	    </div>
	    <div class="top_grid2">
	      <div class="col-md-4 top_grid1-box1"><a href="single.php">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="images/photo2.png" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>可比克薯片60g原味番茄味办公室休闲膨化食品批发小零食</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>￥99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Buy</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
	     <div class="col-md-4 top_grid1-box1"><a href="single.php">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="images/photo2.png" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>可比克薯片60g原味番茄味办公室休闲膨化食品批发小零食</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>￥99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Buy</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
	     <div class="col-md-4 top_grid1-box1"><a href="single.php">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="images/photo2.png" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>可比克薯片60g原味番茄味办公室休闲膨化食品批发小零食</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>￥99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Buy</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	    </a> </div>
	     <div class="clearfix"> </div>
	    </div>
	    <div class="top_grid2">
	     <div class="col-md-4 top_grid1-box1"><a href="single.php">
	     	<div class="grid_1">
	     	 <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="images/photo2.png" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>可比克薯片60g原味番茄味办公室休闲膨化食品批发小零食</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>￥99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Buy</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
	    <div class="col-md-4 top_grid1-box1"><a href="single.php">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="images/photo2.png" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>可比克薯片60g原味番茄味办公室休闲膨化食品批发小零食</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>￥99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Buy</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
	     <div class="col-md-4 top_grid1-box1"><a href="single.php">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="images/photo2.png" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>可比克薯片60g原味番茄味办公室休闲膨化食品批发小零食</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>￥99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Buy</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
	     <div class="clearfix"> </div>
	    </div>
	    <h4 class="head"><span class="m_2">More</span> Products</h4>
	    <div class="top_grid2">
	     <div class="col-md-4 top_grid1-box1"><a href="single.php">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="images/photo2.png" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>可比克薯片60g原味番茄味办公室休闲膨化食品批发小零食</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>￥99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Buy</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	    </a> </div>
	    <div class="col-md-4 top_grid1-box1"><a href="single.php">
	     	<div class="grid_1">
	     	 <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="images/photo2.png" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>可比克薯片60g原味番茄味办公室休闲膨化食品批发小零食</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>￥99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Buy</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
	     <div class="col-md-4 top_grid1-box1"><a href="single.php">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="images/photo2.png" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>可比克薯片60g原味番茄味办公室休闲膨化食品批发小零食</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>￥99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Buy</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
	     <div class="clearfix"> </div>
	    </div>
	    <div class="top_grid2">
	     <div class="col-md-4 top_grid1-box1"><a href="single.php">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="images/photo2.png" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>可比克薯片60g原味番茄味办公室休闲膨化食品批发小零食</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>￥99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Buy</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
	    <div class="col-md-4 top_grid1-box1"><a href="single.php">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="images/photo2.png" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>可比克薯片60g原味番茄味办公室休闲膨化食品批发小零食</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>￥99<small>.33</small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Buy</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
	     <div class="col-md-4 top_grid1-box1"><a href="single.php">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="images/photo2.png" class="img-responsive" alt=""/> </div>
	     	  <div class="grid_2">
	     	  	<p>可比克薯片60g原味番茄味办公室休闲膨化食品批发小零食</p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>￥99<small>.33</small></p></li>
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