<?php
require_once('includes/db.php');
require_once('includes/header.php');
?>
<!DOCTYPE HTML>
<html>
<div class="slider">
	  <div class="callbacks_container">
	      <ul class="rslides" id="slider">
	        <li><a href="single.php"><img src="images/slider1.jpg" class="img-responsive" alt=""/></a>
	         <div class="banner_desc">
				<h1></h1>
				<h2></h2>
			 </div>
	        </li>
              <li><a href=single.php><img src="images/slider2.jpg" class="img-responsive" alt=""/></a>
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
		    <div class="delivery" style="position: relative;">
				<img src="images/delivery.jpg" class="img-responsive" alt=""/>
				<h3>Online&nbsp;</h3>
				<h4>Services</h4>
			</div>		
	   </div>
	   <div class="col-md-9 content_right">
	   	<div class="top_grid1">
         <?php
               $query = "SELECT p_name, p_price, photo ";
               $query .= "FROM product WHERE p_id = 'longsleev001'";
               $result = mysqli_query($connection, $query);
               if (!$result) {
                   die("query is wrong");
                       }
                   while ($row = mysqli_fetch_array($result)) {
               ?>
	      <div class="col-md-4 box_2"><a href="single.php">
	     	<div class="grid_1">
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
	     </a></div>
                        <?php
                                   }
                  mysqli_free_result($result);
                        ?>
            	      <div class="col-md-4 box_2"><a href="single.php">
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
	     </a></div>
            <?php
                                   }
                  mysqli_free_result($result);
                        ?>
                     <?php
               $query = "SELECT p_name, p_price, photo ";
               $query .= "FROM product WHERE p_id = 'skirt003'";
               $result = mysqli_query($connection, $query);
               if (!$result) {
                   die("query is wrong");
                       }
                   while ($row = mysqli_fetch_array($result)) {
               ?>
	      <div class="col-md-4 box_2"><a href="single.php">
	     	<div class="grid_1">
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
	     </a></div>
                        <?php
                                   }
                  mysqli_free_result($result);
                        ?>
	     <div class="clearfix"> </div>
	    </div>
	    <div class="top_grid2">
         <?php
               $query = "SELECT p_name, p_price, photo ";
               $query .= "FROM product WHERE p_id = 'longsleev001'";
               $result = mysqli_query($connection, $query);
               if (!$result) {
                   die("query is wrong");
                       }
                   while ($row = mysqli_fetch_array($result)) {
               ?>
	      <div class="col-md-4 box_2"><a href="single.php">
	     	<div class="grid_1">
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
	     </a></div>
                        <?php
                                   }
                  mysqli_free_result($result);
                        ?>
            	      <div class="col-md-4 box_2"><a href="single.php">
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
	     </a></div>
            <?php
                                   }
                  mysqli_free_result($result);
                        ?>
                     <?php
               $query = "SELECT p_name, p_price, photo ";
               $query .= "FROM product WHERE p_id = 'skirt003'";
               $result = mysqli_query($connection, $query);
               if (!$result) {
                   die("query is wrong");
                       }
                   while ($row = mysqli_fetch_array($result)) {
               ?>
	      <div class="col-md-4 box_2"><a href="single.php">
	     	<div class="grid_1">
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
	     </a></div>
                        <?php
                                   }
                  mysqli_free_result($result);
                        ?>
	     <div class="clearfix"> </div>
	    </div>
	    <div class="top_grid2">
         <?php
               $query = "SELECT p_name, p_price, photo ";
               $query .= "FROM product WHERE p_id = 'longsleev001'";
               $result = mysqli_query($connection, $query);
               if (!$result) {
                   die("query is wrong");
                       }
                   while ($row = mysqli_fetch_array($result)) {
               ?>
	      <div class="col-md-4 box_2"><a href="single.php">
	     	<div class="grid_1">
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
	     </a></div>
                        <?php
                                   }
                  mysqli_free_result($result);
                        ?>
            	      <div class="col-md-4 box_2"><a href="single.php">
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
	     </a></div>
            <?php
                                   }
                  mysqli_free_result($result);
                        ?>
                     <?php
               $query = "SELECT p_name, p_price, photo ";
               $query .= "FROM product WHERE p_id = 'skirt003'";
               $result = mysqli_query($connection, $query);
               if (!$result) {
                   die("query is wrong");
                       }
                   while ($row = mysqli_fetch_array($result)) {
               ?>
	      <div class="col-md-4 box_2"><a href="single.php">
	     	<div class="grid_1">
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
	     </a></div>
                        <?php
                                   }
                  mysqli_free_result($result);
                        ?>
	     <div class="clearfix"> </div>
	    </div>
	    <h4 class="head"><span class="m_2">More</span> Products</h4>
	    <div class="top_grid1">
         <?php
               $query = "SELECT p_name, p_price, photo ";
               $query .= "FROM product WHERE p_id = 'longsleev001'";
               $result = mysqli_query($connection, $query);
               if (!$result) {
                   die("query is wrong");
                       }
                   while ($row = mysqli_fetch_array($result)) {
               ?>
	      <div class="col-md-4 box_2"><a href="single.php">
	     	<div class="grid_1">
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
	     </a></div>
                        <?php
                                   }
                  mysqli_free_result($result);
                        ?>
            	      <div class="col-md-4 box_2"><a href="single.php">
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
	     </a></div>
            <?php
                                   }
                  mysqli_free_result($result);
                        ?>
                     <?php
               $query = "SELECT p_name, p_price, photo ";
               $query .= "FROM product WHERE p_id = 'skirt003'";
               $result = mysqli_query($connection, $query);
               if (!$result) {
                   die("query is wrong");
                       }
                   while ($row = mysqli_fetch_array($result)) {
               ?>
	      <div class="col-md-4 box_2"><a href="single.php">
	     	<div class="grid_1">
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
	     </a></div>
                        <?php
                                   }
                  mysqli_free_result($result);
                        ?>
	     <div class="clearfix"> </div>
	    </div>
	    <div class="top_grid2">
         <?php
               $query = "SELECT p_name, p_price, photo ";
               $query .= "FROM product WHERE p_id = 'longsleev001'";
               $result = mysqli_query($connection, $query);
               if (!$result) {
                   die("query is wrong");
                       }
                   while ($row = mysqli_fetch_array($result)) {
               ?>
	      <div class="col-md-4 box_2"><a href="single.php">
	     	<div class="grid_1">
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
	     </a></div>
                        <?php
                                   }
                  mysqli_free_result($result);
                        ?>
            	      <div class="col-md-4 box_2"><a href="single.php">
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
	     </a></div>
            <?php
                                   }
                  mysqli_free_result($result);
                        ?>
                     <?php
               $query = "SELECT p_name, p_price, photo ";
               $query .= "FROM product WHERE p_id = 'skirt003'";
               $result = mysqli_query($connection, $query);
               if (!$result) {
                   die("query is wrong");
                       }
                   while ($row = mysqli_fetch_array($result)) {
               ?>
	      <div class="col-md-4 box_2"><a href="single.php">
	     	<div class="grid_1">
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
	     </a></div>
                        <?php
                                   }
                  mysqli_free_result($result);
                        ?>
	     <div class="clearfix"> </div>
	    </div>
	    <div class="top_grid2">
         <?php
               $query = "SELECT p_name, p_price, photo ";
               $query .= "FROM product WHERE p_id = 'longsleev001'";
               $result = mysqli_query($connection, $query);
               if (!$result) {
                   die("query is wrong");
                       }
                   while ($row = mysqli_fetch_array($result)) {
               ?>
	      <div class="col-md-4 box_2"><a href="single.php">
	     	<div class="grid_1">
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
	     </a></div>
                        <?php
                                   }
                  mysqli_free_result($result);
                        ?>
            	      <div class="col-md-4 box_2"><a href="single.php">
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
	     </a></div>
            <?php
                                   }
                  mysqli_free_result($result);
                        ?>
                     <?php
               $query = "SELECT p_name, p_price, photo ";
               $query .= "FROM product WHERE p_id = 'skirt003'";
               $result = mysqli_query($connection, $query);
               if (!$result) {
                   die("query is wrong");
                       }
                   while ($row = mysqli_fetch_array($result)) {
               ?>
	      <div class="col-md-4 box_2"><a href="single.php">
	     	<div class="grid_1">
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
	     </a></div>
                        <?php
                                   }
                  mysqli_free_result($result);
                        ?>
	     <div class="clearfix"> </div>
	    </div>
<?php
    require_once('includes/footer.php');
?>
</html>