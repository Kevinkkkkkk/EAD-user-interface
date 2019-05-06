<!DOCTYPE HTML>
<html>
<head>
<title>Zura Women’s Online Store</title>
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
<link href="../css/public.css" type="text/css" rel="stylesheet"/>
        <link rel="stylesheet" type="text/css" href="../css/base.css"/>
        <script type="text/javascript" src="../js/jquery_cart.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/buyConfirm.css" />
		<script src="../js/jquery-1.11.1.min.js" type="text/javascript"></script>
   		 <script src="../js/unslider.min.js" type="text/javascript"></script>
  	     <script src="../js/index.js" type="text/javascript"></script>
<script type="text/javascript">

window.onload = function(){
new tab('test4-input-input_tab1-input_tab2', '-');
}
function tab(o, s, cb, ev){ //tab换类
var $ = function(o){return document.getElementById(o)};
var css = o.split((s||'_'));
if(css.length!=4)return;
this.event = ev || 'onclick';
o = $(o);
if(o){
this.ITEM = [];
o.id = css[0];
var item = o.getElementsByTagName(css[1]);
var j=1;
for(var i=0;i<item.length;i++){
if(item[i].className.indexOf(css[2])>=0 || item[i].className.indexOf(css[3])>=0){
if(item[i].className == css[2])o['cur'] = item[i];
item[i].callBack = cb||function(){};
item[i]['css'] = css;
item[i]['link'] = o;
this.ITEM[j] = item[i];
item[i]['Index'] = j++;
item[i][this.event] = this.ACTIVE;
}
}
return o;
}
}
tab.prototype = {
ACTIVE:function(){
var $ = function(o){return document.getElementById(o)};
this['link']['cur'].className = this['css'][3];
this.className = this['css'][2];
try{
$(this['link']['id']+'_'+this['link']['cur']['Index']).style.display = 'none';
$(this['link']['id']+'_'+this['Index']).style.display = 'block';
}catch(e){}
this.callBack.call(this);
this['link']['cur'] = this;
}
}
</script>
</head>
<body>
<div class="header">
	<div class="header_top">
		<div class="container">
			<div class="logo">
                <li>Zura Women’s Online Store</li>
			</div>
			<ul class="shopping_grid">
			      <a href="purchase.php"><li><span class="m_1">Shopping cart</span>&nbsp;&nbsp;(0) &nbsp;<img src="../images/bag.png" alt=""/></li></a>
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
				 <script type="text/javascript" src="../js/nav.js"></script>
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
<div class="border_top_cart">
        <div class="container payment-con">
    <form  target="_blank" action="#" id="pay-form" method="post">
            <div class="order-info">
                <div class="info">
                    <p>
                        Amount:<span class="pay-total">49.00$</span>
                    </p>
                    <p>
                        Order:1150505740045173                    </p>
                    <p>
                        Delivery：Name                                    <span class="line">/</span>
                                    159****6437                                    <span class="line">/</span>
                                    Room 202, no.82, minfeng xiyuan, beitang district, wuxi city, jiangsu province                                                                <span class="line">/</span>
                                                                    Unlimited delivery time                                    <span class="line">/</span>
                                    Personal electronic invoice                                                    </p>
                </div>
                <div class="icon-box">
                    <i class="iconfont"><img src="../images/yes_ok.png"></i>
                </div>
            </div>
            
            <div class="xm-plain-box">
                                                <!-- Select Payment Method -->
                <div class="box-hd bank-title clearfix">
                    <div id="titleWrap" class="title-wrap">
                        <h2 class="title">Select Payment Method</h2>
                        <h2 class="title hide " >You still need to continue to pay <em>49.00</em> $</h2>
                        <span class="tip-tag"></span>
                    </div>
                </div>
                <div class="box-bd" id="bankList">
                    <div class="payment-bd">
                    <form name="ck">
                    <dl class="clearfix payment-box" >
                    <dt>
                                <strong>Payment Platform</strong>
                                <p>Mobile phone and other large payment is recommended to use alipay express payment</p>
                            </dt>
                            <dd>
                        <fieldset id="test4-input-input_tab1-input_tab2" style=" border:none;">
                        <ul class="payment-list clearfix" >
                           <li> <input class="input_tab1" name="myradio" id="r1" type="radio" checked="checked"/><label for="r1" ><img src="../images/wx.png" alt=""/></label></li>
                            <li><input class="input_tab2" name="myradio" id="r2" type="radio" /><label for="r2" ><img src="../images/zfb.png" alt=""/></label></li>
                            <li> <input class="input_tab1" name="myradio" id="r3" type="radio" /><label for="r3" ><img src="../images/yck.png" alt=""/></label></li>
                           <li>  <input class="input_tab1" name="myradio" id="r4" type="radio" /><label for="r4" ><img src="../images/zxzf.png" alt=""/></label></li>
                             </ul>
                        <div >
                        <div  id="test4_2" style="display:none;">
                        	
                        </div>
                        <div  id="test4_3" style="display:none;">
                        	
                        </div>
                        <div  id="test4_4" style="display:none;">
                        	
                        </div>

                       

                        </div>
                        </fieldset>
                        </dd>
                        </dl>
                        </form>

                        <dl class="clearfix payment-box" >
                            <dt>
                                <strong>Bank online banking</strong>
                                <p>Support the following bank debit cards and credit cards</p>
                                
                            </dt>
                            <dd>
                                                                <ul class="payment-list clearfix">
                                    <li><label  for="CMB"><input type="radio" name="payOnlineBank" id="CMB" value="CMB" /> <img src="http://s1.mi.com/../images/payOnline_zsyh.gif" alt=""/></label></li>
                                    <li><label  for="ICBCB2C"><input type="radio" name="payOnlineBank" id="ICBCB2C" value="ICBCB2C" /> <img src="http://s1.mi.com/../images/payOnline_gsyh.gif" alt=""/></label></li>
                                    <li><label  for="CCB"><input type="radio" name="payOnlineBank" id="CCB" value="CCB" /> <img src="http://s1.mi.com/../images/payOnline_jsyh.gif" alt=""/></label></li>
                                    <li><label  for="ABC"><input type="radio" name="payOnlineBank" id="ABC" value="ABC" /> <img src="http://s1.mi.com/../images/payOnline_nyyh.gif" alt=""/></label></li>
                                    <li><label  for="BOCB2C"><input type="radio" name="payOnlineBank" id="BOCB2C" value="BOCB2C" /> <img src="http://s1.mi.com/../images/payOnline_zgyh.gif" alt=""/></label></li>
                                    <li><label  for="COMM"><input type="radio" name="payOnlineBank" id="COMM" value="COMM" /> <img src="http://s1.mi.com/../images/payOnline_jtyh.gif" alt=""/></label></li>
                                    <li><label  for="PSBC-DEBIT"><input type="radio" name="payOnlineBank" id="PSBC-DEBIT" value="PSBC-DEBIT" /> <img src="http://s1.mi.com/../images/payOnline_youzheng.gif" alt=""/></label></li>
                                    <li><label  for="GDB"><input type="radio" name="payOnlineBank" id="GDB" value="GDB" /> <img src="http://s1.mi.com/../images/payOnline_gfyh.gif" alt=""/></label></li>
                                    <li><label  for="SPDB"><input type="radio" name="payOnlineBank" id="SPDB" value="SPDB" /> <img src="http://s1.mi.com/../images/payOnline_pufa.gif" alt=""/></label></li>
                                    <li><label  for="CEBBANK"><input type="radio" name="payOnlineBank" id="CEBBANK" value="CEBBANK" /> <img src="http://s1.mi.com/../images/payOnline_gdyh.gif" alt=""/></label></li>
                                    <li><label  for="SPABANK"><input type="radio" name="payOnlineBank" id="SPABANK" value="SPABANK" /> <img src="http://s1.mi.com/../images/payOnline_payh.gif" alt=""/></label></li>
                                    <li><label  for="CIB"><input type="radio" name="payOnlineBank" id="CIB" value="CIB" /> <img src="http://s1.mi.com/../images/payOnline_xyyh.gif" alt=""/></label></li>
                                    <li><label  for="CMBC"><input type="radio" name="payOnlineBank" id="CMBC" value="CMBC" /> <img src="http://s1.mi.com/../images/payOnline_msyh.gif" alt=""/></label></li>
                                    <li><label  for="BOB"><input type="radio" name="payOnlineBank" id="BOB" value="BOB" /> <img src="http://s1.mi.com/../images/payOnline_bjyh.gif" alt=""/></label></li>
                                    <li><label  for="CITIC"><input type="radio" name="payOnlineBank" id="CITIC" value="CITIC" /> <img src="http://s1.mi.com/../images/payOnline_zxyh.gif" alt=""/></label></li>
                                    <li><label  for="SDB"><input type="radio" name="payOnlineBank" id="SDB" value="SDB" /> <img src="http://s1.mi.com/../images/payOnline_sfyh.gif" alt=""/></label></li>
                                    <li><label  for="SHBANK"><input type="radio" name="payOnlineBank" id="SHBANK" value="SHBANK" /> <img src="http://s1.mi.com/../images/payOnline_shyh.gif" alt=""/></label></li>
                                    <li><label  for="BJRCB"><input type="radio" name="payOnlineBank" id="BJRCB" value="BJRCB" /> <img src="http://s1.mi.com/../images/payOnline_bjnsyh.gif" alt=""/></label></li>
                                    <li><label  for="NBBANK"><input type="radio" name="payOnlineBank" id="NBBANK" value="NBBANK" /> <img src="http://s1.mi.com/../images/payOnline_nbyh.gif" alt=""/></label></li>
                                    <li><label  for="HZCBB2C"><input type="radio" name="payOnlineBank" id="HZCBB2C" value="HZCBB2C" /> <img src="http://s1.mi.com/../images/payOnline_hzyh.gif" alt=""/></label></li>
                                    <li><label  for="SHRCB"><input type="radio" name="payOnlineBank" id="SHRCB" value="SHRCB" /> <img src="http://s1.mi.com/../images/payOnline_shnsyh.gif" alt=""/></label></li>
                                    <li><label  for="FDB"><input type="radio" name="payOnlineBank" id="FDB" value="FDB" /> <img src="http://s1.mi.com/../images/payOnline_fcyh.gif" alt=""/></label></li>                                </ul>
                            </dd>
                        </dl>
                        

                                                
                                                
                    </div>
                            </div>
            <div class="box-ft clearfix">
                    <input type="submit" class="btn btn-primary" value="Next Step" id="payBtn" style="background-color: #ee330a;">
                    <a href="order.php" class="btn btn-lineDakeLight">Modify Order</a>
                    <span class="tip"></span>
                </div>
            </div>
</form>  
</div>
<script src="../js/base.min.js"></script>

        <script type="text/javascript" src="../js/buyConfirm.js"></script>
   
</div>
</body>
</html>
