<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Order Confirmation</title>
<link href="css/public.css" type="text/css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="css/base.css"/>
<script type="text/javascript" src="js/jquery_cart.js"></script>  
<link rel="stylesheet" type="text/css" href="css/checkOut.css" />
</head>
<body>
<div class="header">
	<div class="header_top">
		<div class="container">
			<div class="logo">
                <li>Zura Women’s Online Store</li>
			</div>
			<ul class="shopping_grid">
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
 <!-- body section of the shipping address start-->  
 <div class="border_top_cart">
  <script type="text/javascript">
    var checkoutConfig={
        addressMatch:'common',
        addressMatchVarName:'data',
        hasPresales:false,
        hasBigTv:false,
        hasAir:false,
        hasScales:false,
        hasGiftcard:false,
        totalPrice:244.00,
        postage:10,//freight
        postFree:true,//If the activity free of post
        bcPrice:150,//Calculate boundary value
        activityDiscountMoney:0.00,//Preferential activities
        showCouponBox:0,
        invoice:{
            NA:"0",
            personal:"1",
            company:"2",
            electronic:"4"
        }
    };
    var miniCartDisable=true;
</script>
<div class="container">
    <div class="checkout-box">
        <form  id="checkoutForm" action="#" method="post">
            <div class="checkout-box-bd">
                    <!-- Address state 0：default option；1：New Address；2：modify address -->
                <input type="hidden" name="Checkout[addressState]" id="addrState"   value="0">
                <!-- Receiver Address -->
                <div class="xm-box">
                    <div class="box-hd ">
    <h2 class="title">Receiver Address</h2>
    <!---->
</div>
<div class="box-bd">
    <div class="clearfix xm-address-list" id="checkoutAddrList">
          <dl class="item" >
            <dt>
                <strong class="itemConsignee">Name</strong>
                                <span class="itemTag tag">Home</span>
                            </dt>
            <dd>
                <p class="tel itemTel">15961726437</p>
                <p class="itemRegion">Beitang district, wuxi city, jiangsu province</p>
                <p class="itemStreet">Room 202, 82 man fung west court (214045)</p>
                                                        <span class="edit-btn J_editAddr">Edit</span>
                                                                </dd>
            <dd style="display:none">
                <input type="radio" name="Checkout[address]" class="addressId"  value="10140916720030323">
            </dd>
        </dl>
                        <div class="item use-new-addr"  id="J_useNewAddr" data-state="off">
             <span class="iconfont icon-add"><img src="images/add_cart.png" /></span> 
            Use new address
        </div>
            </div>
        <input type="hidden" name="newAddress[type]" id="newType" value="common">
    <input type="hidden" name="newAddress[consignee]" id="newConsignee">
    <input type="hidden" name="newAddress[province]" id="newProvince">
    <input type="hidden" name="newAddress[city]" id="newCity">
    <input type="hidden" name="newAddress[district]" id="newCounty">
    <input type="hidden" name="newAddress[address]" id="newStreet">
    <input type="hidden" name="newAddress[zipcode]" id="newZipcode">
    <input type="hidden" name="newAddress[tel]" id="newTel">
    <input type="hidden" name="newAddress[tag_name]" id="newTag">
    <!--Click to pop up the new / receiving address interface start-->
    <div class="xm-edit-addr-box" id="J_editAddrBox">
        <div class="bd">
            <div class="item">
                <label>Consignee Name<span>*</span></label> 
                <input type="text" name="userAddress[consignee]" id="Consignee" class="input" placeholder="Consignee Name" maxlength="15" autocomplete='off'>
                <p class="tip-msg tipMsg"></p>
            </div>
            <div class="item">
                <label>Phone<span>*</span></label> 
                <input type="text" name="userAddress[tel]" class="input" id="Telephone" placeholder="11 mobile phone number" autocomplete='off'>
                <p class="tel-modify-tip" id="telModifyTip"></p>
                <p class="tip-msg tipMsg"></p>
            </div>
            <div class="item">
                <label>Address<span>*</span></label>
                <select name="userAddress[province]" id="Provinces" class="select-1">
                    <option>Province</option>
                </select>
                <select name="userAddress[city]"  id="Citys" class="select-2" disabled>
                    <option>City/Region/Autonomous Prefecture</option>
                </select>
                <select name="userAddress[county]"  id="Countys" class="select-3" disabled>
                    <option>District</option>
                </select>
                <textarea   name="userAddress[street]" class="input-area" id="Street" placeholder="Road name or street address, house number"></textarea>
                <p class="tip-msg tipMsg"></p>
            </div>
            <div class="item">
                <label>Postal Code<span>*</span></label> 
                <input type="text" name="userAddress[zipcode]" id="Zipcode" class="input" placeholder="Postal Code"  autocomplete='off'>
                <p class="zipcode-tip" id="zipcodeTip"></p>
                <p class="tip-msg tipMsg"></p>
            </div>
            <div class="item">
                <label>Address labels<span>*</span></label> 
                <input type="text" name="userAddress[tag]" id="Tag" class="input" placeholder='"Home", "Company". Within 5 words'  >
                <p class="tip-msg tipMsg"></p>
            </div>
        </div>
        <div class="ft clearfix">
            <button  type="button"  class="btn btn-lineDake btn-small " id="J_editAddrCancel">Cancel</button>
             <button type="button" class="btn btn-primary  btn-small " id="J_editAddrOk">Save</button>
        </div>
    </div>
    <!--Click to pop up the new / receiving address interface end-->
    <div class="xm-edit-addr-backdrop" id="J_editAddrBackdrop"></div>
</div>                </div>
                <!-- receiver address END-->
                <div id="checkoutPayment">
                    <!-- mode of payment -->
                                <div class="xm-box">
                <div class="box-hd ">
                    <h2 class="title">Mode of Payment</h2>
                </div>
                <div class="box-bd">
                    <ul id="checkoutPaymentList" class="checkout-option-list clearfix J_optionList">
                                                <li class="item selected">
                            <input type="radio" name="Checkout[pay_id]" checked="checked" value="1">
                            <p>
                                Online Payment                                <span></span>
                            </p>
                        </li>
                                            </ul>
                </div>
            </div>
            <!-- Mode of Payment END-->
            <div class="xm-box">
                <div class="box-hd ">
                    <h2 class="title">Mode of Distribution</h2>
                </div>
                <div class="box-bd">
                    <ul id="checkoutShipmentList" class="checkout-option-list clearfix J_optionList">
                                                <li class="item selected">
                            <input type="radio" data-price="0" name="Checkout[shipment_id]" checked="checked" value="1">
                            <p>
                                Express delivery (free shipping)                                <span></span>
                            </p>
                        </li>
                                            </ul>
                </div>
            </div>
            <!-- Mode of Distribution END-->
                </div>
                <!-- delivery time -->
                <div class="xm-box">
                    <div class="box-hd">
                        <h2 class="title">Delivery Time</h2>
                    </div>
                    <div class="box-bd">
                        <ul class="checkout-option-list clearfix J_optionList">
                                                        <li class="item selected"><input type="radio" checked="checked" name="Checkout[best_time]" value="1"><p>Unlimited Delivery Time<span>MON-SUN</span></p></li><li class="item "><input type="radio"  name="Checkout[best_time]" value="2"><p>Weekday delivery<span>Mon-Fri</span></p></li><li class="item "><input type="radio"  name="Checkout[best_time]" value="3"><p>Weekend, holiday delivery<span> Weekday</span></p></li>                        </ul>
                    </div>
                </div>
                <!-- delivery time END-->
                <!-- invoice information -->
                <div id="checkoutInvoice">
                    <div class="xm-box">
    <div class="box-hd">
        <h2 class="title">Invoice Information</h2>
    </div>
    <div class="box-bd">
        <ul class="checkout-option-list checkout-option-invoice clearfix J_optionList J_optionInvoice">
             <li class="hide">
                                 Electronic personal invoice 4 
             </li>
                        <li class="item selected">
                <input type="radio"    checked="checked"  value="4" name="Checkout[invoice]">
                <p>Electronic invoice (non-paper)</p>
            </li>
                        <li class="item ">
                <input type="radio"   value="1" name="Checkout[invoice]">
                <p>Ordinary invoice (paper)</p>
            </li>
        </ul>
                <p id="eInvoiceTip" class="e-invoice-tip ">
            Electronic invoice is a valid certificate recognized by the tax bureau, which can be used as a proof of after-sales rights protection and will not be sent with the goods.Paper invoices cannot be replaced after invoicing. Please select ordinary invoices for reimbursement.<a href="#">What is electronic invoice?</a>
        </p>
        <div class="invoice-info nvoice-info-1" id="checkoutInvoiceElectronic" style="display:none;">

            <p class="tip">Electronic invoices are currently only issued to individual users, not for unit reimbursement, not for goods.</p>
            <p>Invoice content: purchase product details</p>
            <p>Invoice header: personal</p>
            <p>
                <span class="hide"><input type="radio" value="4" name="Checkout[invoice_type]"   checked="checked"   id="electronicPersonal" class="invoiceType"></span>
                <dl>
                    <dt>What is electronic invoice?</dt>
                    <dd>&#903; The electronic invoice is an image of the paper invoice and is a valid certificate approved by the tax bureau. It has the same legal effect as the traditional paper invoice and can be used as evidence for after-sales rights protection.</dd>
                    <dd>&#903; Electronic services are issued to individuals. Paper invoices cannot be exchanged after invoicing and cannot be used for unit reimbursement.</dd>
                    <dd>&#903; You can view and download your electronic invoice in the "Invoice Information" column of the order details.<a href="#">What is electronic invoice?</a></dd>
                </dl>
            </p>
        </div>
                <div class="invoice-info invoice-info-2" id="checkoutInvoiceDetail"  style="display:none;" >
            <p>Invoice content: purchase product details</p>
            <p>
                Invoice header: Please confirm that the unit name is correct, so as not to delay your reimbursement due to the wrong name. Note: Contract machine bill can only open personal invoice
            </p>
            <ul class="type clearfix J_invoiceType">
                <li class="hide">
                    <input type="radio" value="0" name="Checkout[invoice_type]" id="noNeedInvoice" > 
                </li>
                <li class="">
                    <input  class="invoiceType" type="radio" id="commonPersonal" name="Checkout[invoice_type]" value="1" >
                    Personal
                </li>
                <li class="">
                     <input  class="invoiceType" type="radio" name="Checkout[invoice_type]" value="2" >
                     Company
                </li>
            </ul>
            <div  id='CheckoutInvoiceTitle' class=" hide  invoice-title">
                <label for="Checkout[invoice_title]">Company Name:</label>
                <input name="Checkout[invoice_title]" type="text" maxlength="49" value="" class="input"> <span class="tip-msg J_tipMsg"></span>
            </div>

        </div>

    </div>
</div>                </div>
                <!-- invoice information END-->
            </div>
            <div class="checkout-box-ft">
                 <!-- commodity list -->
                <div id="checkoutGoodsList" class="checkout-goods-box">
                                    <div class="xm-box">
                    <div class="box-hd">
                        <h2 class="title">Confirm order information</h2>
                    </div>
                    <div class="box-bd">
                        <dl class="checkout-goods-list">
                            <dt class="clearfix">
                                <span class="col col-1">Product Name</span>
                                <span class="col col-2">Purchasing Price</span>
                                <span class="col col-3">Purchase Quantity</span>
                                <span class="col col-4">Subtotal (yuan)</span>
                            </dt>
                                                        <dd class="item clearfix">
                                <div class="item-row">
                                    <div class="col col-1">
                                        <div class="g-pic">
                                            <img src="images/photo2.png" width="40" height="40" />
                                        </div>
                                        <div class="g-info">
                                            <a href="#">Sweater</a>
                                        </div>
                                    </div>
                
                                    <div class="col col-2">139￥</div>
                                    <div class="col col-3">1</div>
                                    <div class="col col-4">139￥</div>
                                </div>
                            </dd>
                                                        <dd class="item clearfix">
                                <div class="item-row">
                                    <div class="col col-1">
                                        <div class="g-pic">
                                            <img src="images/photo2.png"  width="40" height="40" />
                                        </div>
                                        <div class="g-info">
                                           <a href="#">Dress</a>
                                        </div>
                                    </div>
                
                                    <div class="col col-2">149￥</div>
                                    <div class="col col-3">1</div>
                                    <div class="col col-4">149￥</div>
                                </div>
                            </dd>
                                                        <dd class="item clearfix">
                                <div class="item-row">
                                    <div class="col col-1">
                                        <div class="g-pic">
                                            <img src="images/photo2.png" width="40" height="40" />
                                        </div>
                                        <div class="g-info">
                                            <a href="#">Leggings</a>
                                        </div>
                                    </div>
                
                                    <div class="col col-2">39￥</div>
                                    <div class="col col-3">4</div>
                                    <div class="col col-4">156￥</div>
                                </div>
                            </dd>
                                                    </dl>
                        <div class="checkout-count clearfix">
                            <div class="checkout-count-extend xm-add-buy">
                                <h3 class="title">Message Board</h3></br>
                                <input type="text" />

                            </div>
                            <!-- checkout-count-extend -->
                            <div class="checkout-price">
                                <ul>

                                    <li>
                                       Total Order Amount:<span>244￥</span>
                                    </li>
                                    <li>
                                        Benefits:<span>-0￥</span>
                                        <script type="text/javascript">
                                            checkoutConfig.activityDiscountMoney=0;
                                            checkoutConfig.totalPrice=244.00;
                                        </script>
                                    </li>
                                    <li>
                                        Coupon deduction:<span id="couponDesc">-0￥</span>
                                    </li>
                                    <li>
                                        Freight:<span id="postageDesc">0￥</span>
                                    </li>
                                </ul>
                                <p class="checkout-total">Total amount payable:<span><strong id="totalPrice">244</strong>￥</span></p>
                            </div>
                            <!--  -->
                        </div>
                    </div>
                </div>
          </div>
                <!-- Product list END -->
                <input type="hidden"  id="couponType" name="Checkout[couponsType]">
                <input type="hidden" id="couponValue" name="Checkout[couponsValue]">
                <div class="checkout-confirm">
                  
                     <a href="purchase.html" class="btn btn-lineDakeLight btn-back-cart">Back to Cart</a>
                     <input type="button" class="btn btn-primary" value="Place an order" id="checkoutToPay" onclick="location.href='payment.html'" />
                                     </div>
            </div>
        </div>
    </div>
<script src="js/base.min.js"></script>

        <script type="text/javascript" src="js/address_all.js"></script>
<script type="text/javascript" src="js/checkout.min.js"></script> 
    <div class="fixed-buttons">
        <ul>
            <li><a href="#" class="fixed-weixin"><img src="images/fixed_weixin.png" /><div class="weixin-pic"><img src="images/weixin.png"></div></a></li>
            <li><img id="imgBtn-to-top" src="images/back_top.png" /></li>
        </ul>
    </div>
    <script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
    <script src="js/unslider.min.js" type="text/javascript"></script>
    <script src="js/index.js" type="text/javascript"></script>

</body>
</html>
