<?php include_once'inc/autoload.php'; if(isset($_GET['view'])){ $PageView = $paopack->GetPageView($_GET['view']); if($PageView=="PaopackSearchProduct"){ $Key = $paopack->GetPageView($_GET['key']); $Products = json_decode($paopack->PaopackFoundProducts($Key));} }  


  

 ?>

<!doctype html>
<html class="no-js" lang="">
<title>India's lowest price grocery products at paopack.com</title>
    <head>
<meta name="robots" content="index, follow" />
<meta name="title" content="Paopack | Shop Beauty Online - 100+ Brands & Over 1000 Products‎"/>
<meta name="keywords" content="New Born  Baby care products online in India, Buy baby products online at lowest prices in India only at paopack, Buy Baby Diapers, Feeding Products Online at Low cost, Buy grocery online from the best online grocery shopping store in India, Online market includes online vegetable store, food shopping online and groceries online,online supermarket that includes fresh vegetables, grocery, staples, fruits, beverages, personal care products at paopack,Buy grocery online from the best online grocery shopping store in India. Shop from a wide range of best quality fruits, vegetables, health food, Indian grocery at paopack,Makeup Products - Buy Women's Make Up Products Online in India,Beauty - Branded Beauty Products For Women,On-demand delivery of groceries, milk, fruits, vegetables, & more Wide Range Of Products at paopack,all your monthely kitchen needs " />
<meta name="description" content="Women Products Online in India, all products are made by women at home. Fast Delivery & Cash on delivery Available, Shop any types of Baby Care Products at paopack; Buy Beauty Products online at low prices in India. Shop online for branded Makeup, Skincare, Shaving & Grooming, Hair care products & more on paopack. Buy Tropicana Orange Fruit Juice Online @ best price at paopack., Buy grocery online from the best online grocery shopping store in India. Shop from a wide range of best quality fruits, vegetables, health food, Indian grocery at paopack,paopack saste ka baap" />
<meta name="distribution" content="global" />
<meta name="rating" content="General" />
<meta name="language" content="En" />
<meta name="robots" content="all" />
<meta name="revisit-after" content="1 days">

<link rel="shortcut icon" type="image/png" href="images/p_paopack.png"/>
    	<title>Paopack - Fresh Market</title>
    	
        <?php $layout->HeaderFiles(); ?>
        
        <script type="text/javascript">
            $(document).ready(function(){
                $('#MessageTxt').delay(2000).fadeOut('slow');
                $(".hamburger i").click(function(){
                    $(".sub_nav_bar").slideToggle(700);
                    return false;
                });
               $("#show_location_popup").click(function(){
                    $("#loaction_popup").show();
                });
                $(".fa-times,#skip_popup").click(function(){
                    $("#loaction_popup").hide();
               });
               $("#load").click(function(){
                    $("#loading").show();
                });
            });

        </script>
<script>
        $(document).ready(function () {
            var parentDivs = $('#nestedAccordion div'),
                childDivs = $('#nestedAccordion h3').siblings('div');

            $('#nestedAccordion h2').click(function () {
                parentDivs.slideUp();
                if ($(this).next().is(':hidden')) {
                    $(this).next().slideDown();
                } else {
                    $(this).next().slideUp();
                }
            });

            $('#nestedAccordion a').click(function () {
                childDivs.slideUp();
                if ($(this).next().is(':hidden')) {
                    $(this).next().slideDown();
                } else {
                    $(this).next().slideUp();
                }
            });
        });
        </script>
 <script>
        $(document).ready(function () {
  var $nav = $('.t_header,.nav_bar,.cart,.logo a h1 img,.nav_bar ul li a,.nav_bar ul li,.cart a,.hamburger,.logo,.search'),
      posTop = $nav.position().top;
  $(window).scroll(function () {
    var y = $(this).scrollTop();
    if (y > posTop) { $nav.addClass('fixed'); }
    else { $nav.removeClass('fixed'); }
  });
});
</script>
        <style>
		.dropbtn {
		    cursor: pointer;
		    background: transparent;
		    border: none;
		}
		
		.dropdown {
		    position: relative;
		    display: inline-block;
		}
		
		.dropdown-content {
		    display: none;
		    position: absolute;
		    z-index: 999;
		    right: 0;
		    min-width: 240px;
		}
		
		.dropdown-content a {
		    display: block;
		}
		
		
		.dropdown:hover .dropdown-content {
		    display: block;
		}
		.form-control{
			border-radius: 0px;
			box-shadow: none;
			border-color: #dc1e28;
		}
		.form-group{
			margin-bottom: 10px;
		}
		.form-group label{
			margin-bottom: 5px;
			font-weight: bold;
		}
.box h4{
    font-size: 16px;
    border-bottom: 1px solid #dc1e28;
    padding-bottom: 3px;
    font-weight: 600;
margin:10px 0px 5px 0px;
}
		</style>

    </head>
<body>
<?php $layout->ShowHeader(); ?>
    <div class="container">


       
       
        <section class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 section_one">
            	
                <?php if($PageView!="ContactUs"){ $layout->LeftSidebarMenu(); }else{ ?>
                    <div class='col-lg-3 col-md-3 col-sm-3 sidebanner'>
                    	<h3 style="font-size: 16px;
    color: #dc1e28;
    font-weight: bold;
    margin-bottom: 10px;">Contact Us Form Here!</h3>
                    	<form role='form' method='post'>
						  <div class='form-group'>
						    <label for='email'>Email Address</label>
						    <input type='text' class='form-control' name='email' required pattern='[a-zA-Z0-9_]+@[a-zA-Z0-9_]+.[a-zA-Z0-9_]+'>
						  </div>
						  <div class='form-group'>
						    <label for='email'>Subject</label>
						    <input type='text' class='form-control' name='subject' required>
						  </div>
						  <div class='form-group'>
						    <label for='email'>Message</label>
						    <input type='text' class='form-control' name='message' required>
						  </div>
						  
						  <button style='    display: inline-block;
    color: #fff;
    background: #dc1e28;
    padding: 5px 10px;
    font-size: 16px;
    font-weight: bold;
    border-radius: 3px;
    text-decoration: none;
    border: 1px solid #dc1e28;
    text-shadow:none;' type='submit' class='btn btn-default' name='btnSendMessage'>Submit</button>
						   <br/>
			                      <span id="MessageTxt" style="<?php echo $Style ; ?>"><?php echo $MessageStatus; ?></span>
					  </form>
                	</div> 
                <?php }?>
                
                <?php /*Paopack Login Page*/ if($PageView=="PaopackLogin"){ ?>
                  	 
                  	 <div class="col-lg-9 col-md-9 col-sm-9 login_section">
                  	 	
                  	 	   <h2>Authentication</h2>
                  	 	   
		                   <div class="col-lg-6 col-md-6 create_accuont">
		                      <form method="post">
		                      	  <h3>CREATE AN ACCOUNT</h3>
			                      <p>Please enter your email address to create an account.</p>
			                      <label>Email address</label><br>
			                      <input type="email" required="" name="email"><br>
			                      <button id="btn" type="submit" name="btnCheckEmail"><i class="fa fa-user"></i>Create an account</button>
			                      <br/>
			                      <span id="MessageTxt" style="<?php echo $Style ; ?>"><?php echo $EmailExists; ?></span>
		                       </form>
		                   </div>
		                   <div class="col-lg-6 col-md-6 create_accuont">
		                   	<form method="post">
		                      <h3>ALREADY REGISTERED?</h3>
		                      <label>Email address</label><br>
		                      <input type="email" name="email" required=""><br>
		                      <label>Password</label><br>
		                      <input type="password" name="pwd" required><br>
		                      <p><a href="paopack_view.php?view=<?php echo base64_encode("ForgotPassword");?>">Forgot your password?</a> <span id="MessageTxt" style="<?php echo $Style ; ?>"><?php echo $MessageStatus; ?></span></p>
		                      <button id="btn" type="submit" name="btnLogin"><i class="fa fa-lock"></i>Sign in</button>
		                   </form>
		                   </div>
                  	 	
	                </div>
                  	 
                  	 <?php }/*Paopack Registration Page*/ else if($PageView=="PaopackRegistration"){ ?>
                  	 	<div class="col-lg-9 col-md-9 col-sm-9 section_products">
			                    <form method="post">
			                    	<h2 style="color: #dc1e28;font-size: 24px;font-weight: bold;margin-bottom: 30px;padding-bottom: 7px;border-bottom: 2px solid #dc1e28;">Create An Account</h2> 
				                    <div class="col-lg-12 col-md-12 col-sm-12 login_section">
				                       <h2 style="font-size:18px;margin-bottom: 20px;">YOUR PERSONAL INFORMATION</h2>
				                       <span id="MessageTxt" style="<?php echo $Style ; ?>"><?php echo $MessageStatus; ?></span>
				                       
				                       <div class="col-lg-12 col-md-12 create_accuont" style="padding: 0px;">
				                          
				                          <label>Name</label><br>
				                          <input type="text" name="fN" required=""><br>
				                          
				                          <label>Email address</label><br>
				                          <input type="email" name="email" value="<?php if(isset($_GET['email'])){  echo $paopack->GetPageView($_GET['email']); } ?>" required><br>
				                          <label>Password</label><br>
				                          <input type="password" name="pwd" required><br>
				                          <label>Mobile Number</label><br>
				                          <input type="telephone" name="dob" required><br>
				                          <button id="btn" type="submit" name="btnRegister">Register</button>
				                       </div>
				                    </div>    
			                    </form>    
		                </div>
                  	 <?php }/*Paopack Quick View Page*/ else if($PageView=="PaopackQuickView"){ $ProductId = $paopack->GetPageView($_GET['pid']);$ProductDetails = json_decode($paopack->PaopackQuickViewProduct($ProductId)); foreach($ProductDetails as $Prod){ $ProductName=$Prod->ProductName;$ProductPrice=$Prod->ProductPrice;$ProductDiscount=$Prod->ProductDiscount;$CategoryId=$Prod->CategoryId;$ProductImage = $Prod->ProductImage;$ProductDescription=$Prod->ProductDescription;$ProductCondition=$Prod->ProductCondition; } ?>	
                  	 <div class="col-lg-9 col-md-9 col-sm-9 section_products">
	                  <div class="col-lg-6 col-md-6 pic_view" style="margin-top: 10px;">
	                    <center><img class="img-responsive" src="<?php echo $ProductImage; ?>" alt="" style="height:300px;width:300px"></center>
	                    
	                  </div>
	                  <div class="col-lg-6 col-md-6 product_info">
	                     <h2><?php echo $ProductName; ?></h2>
	                     <h5><span>Condition :</span> <?php echo empty($ProductCondition)?"Not Available":$ProductCondition; ?></h5>
	                     <p><?php echo substr($ProductDescription, 0,135); ?></p>
	                     <h1><s>Rs <?php echo $ProductPrice; ?></s> Rs <?php echo $ProductDiscount; ?></h1>
	                     <?php $Email=isset($_SESSION['LoggedEmail'])?$_SESSION['LoggedEmail']:"-11";?>
<p style="font-weight:bold;">Quantity</p>
<input type="number" name="quantity" placeholder="Enter Quantity" style="margin:0px;">
	                     <center style="margin-top:50px;"><a href="paopack_view.php?tocart=add&pid=<?php echo base64_encode($ProductId);?>&view=<?php echo base64_encode($paopack->GetPageView($_GET['view'])) ;?>&Email=<?php echo $Email ;?>" id="cart"><i class="fa fa-shopping-cart"></i>ADD TO CART</a></center>
	                     <center><!--a href="#"><i class="fa fa-heart"></i>Add To My Wishlist</a---></center>
	                  </div>
	                  <div class="row more_info">
	                     <h2>More About Product</h2>
	                     <p>
	                     	<?php echo $ProductDescription; ?>
	                     </p>
	                  </div>
	                  <!--div class="row product_review">
	                     <h2>Reviews</h2>
	                     <textarea placeholder="Say Something . . ."></textarea>
	                     <a href="#">Post</a>
	                  </div-->
	                  <?php 
	                    // Load Similar Products.
	                    $layout->LoadSimilarProducts($CategoryId,$ProductId);
	                  ?>
	               </div>
                  	 <?php }/*Paopack Checkout Summary Page*/ else if($PageView=="PaopackProductCheckout"){ ?>
                  	 <div class="col-lg-9 col-md-9 col-sm-9 section_products">
	                    <h2 style="color: #dc1e28;font-size: 24px;font-weight: bold;margin-bottom: 30px;">Shopping-Cart Summary</h2>
	                     <table class="table table-bordered">
	                      <?php $layout->LoadTableHeader(); ?>
	                     </table>  
	                     <table class="table table-bordered" style="margin-top: 30px;">
	                       <thead>
	                         <tr>
	                           <th>ITEM</th>
	                           <th>NAME</th>
	                           <th>PRICE</th>
	                           <th>QTY</th>
	                           <th>TOTAL</th>
	                           <th>ACTION</th>
	                         </tr>
	                       </thead><!-- 
	                       <div class="p3"> -->
	                        
	                         	<?php 
									  if($paopack->PaopackIsCartContainsProduct()){
									  	?>
									  	 <tbody class="p3">
									  	<?php
									  	 $CartProductDetails =json_decode($paopack->PaopackCartProductDetails()); 
								         $TotalCartAmount=0;$TotalProducts=0;
								         foreach($CartProductDetails as $CartDetails){ $TotalCartAmount+=$CartDetails->Count*$CartDetails->Price;
										      $TotalProducts+=$CartDetails->Count;
										?>
			                           <tr>
			                             <td><img class="img-responsive" src="<?php echo $CartDetails->ProductImage; ?>" alt="" style="width:35%"></td>
			                             
			                             <td><?php echo $CartDetails->ProductName; ?></td>
			                             <td><?php echo $CartDetails->Price; ?></td>
			                             <td><?php echo $CartDetails->Count; ?></td>
			                             <td><?php echo $CartDetails->Count*$CartDetails->Price; ?></td>
			                             <td><a href="paopack_view.php?view=<?php echo base64_encode('PaopackProductCheckout'); ?>&delcart=<?php echo base64_encode($CartDetails->ProductId); ?>" title="Remove from Cart"><i id="p3" class="fa fa-trash-o"></i></a></td>
			                           </tr>
			                           <?php } ?>
			                           </tbody>
				                         <tfoot>
				                              <tr class="cart_total_price">
				                                  <td rowspan="3" colspan="2" id="cart_voucher" class="cart_voucher"></td>
				                                  <td colspan="3" class="text-right">Total products</td>
				                                  <td colspan="2" class="price" id="total_product"><?php echo $TotalProducts; ?></td>
				                              </tr>
				                             
				                              <tr class="cart_total_delivery">
				                                  <td colspan="3" class="text-right">Total shipping</td>
				                                  <td colspan="2" class="price" id="total_shipping">Free</td>
				                              </tr>
				                                  
				                              <tr class="cart_total_price">
				                                  <td colspan="3" class="total_price_container text-right"> <span style="font-size: 18px;font-weight: bold;">Total (Rs)</span></td>
				                                  <td colspan="2" class="price" id="total_price_container"> <span style="font-size: 18px;font-weight: bold;" id="total_price"><?php echo $TotalCartAmount; ?></span></td>
				                              </tr>
				                          </tfoot>
			                           
			                           <?php } ?>
									 
	                     </table> 
	                     
	                     <p>
	                     <a href="./" style="text-decoration: none;color: #fff;background: #dc1e28;font-size: 16px;font-weight: bold;padding: 5px 15px;border-radius: 3px;border:1px solid #dc1e28;display:inline-block;">Continue Shopping</a>
	                     <?php if($paopack->PaopackIsCartContainsProduct()){ ?>
	                          
	                          	<a <?php if(isset($_SESSION['LoggedEmail'])){ echo "href='paopack_view.php?view=".base64_encode("PaopackCheckoutAddress")."'"; }else{ echo "href='paopack_view.php?view=".base64_encode("PaopackCheckoutLogin")."'"; } ?> style="float: right;text-decoration: none;color: #fff;background: #dc1e28;font-size: 16px;font-weight: bold;padding: 5px 15px;border-radius: 3px;">Proceed To Checkout</a>
	                     <?php } ?>
	                     </p>   
	                </div>
                  	 <?php }/*Paopack Checkout Signin Page*/ else if($PageView=="PaopackCheckoutLogin" && !isset($_SESSION['LoggedEmail'])){ ?>	
                  	 <div class="col-lg-9 col-md-9 col-sm-9 section_products">
	                    <h2 style="color: #dc1e28;font-size: 24px;font-weight: bold;margin-bottom: 30px;">Shopping-Cart Summary</h2>
	                     <table class="table table-bordered">
	                       <?php $layout->LoadTableHeader(); ?>
	                     </table> 
	                     <div class="col-lg-12 col-md-12 col-sm-12 login_section"><!-- 
	                        <h2>Authentication</h2> -->
	                        <div class="col-lg-6 col-md-6 create_accuont">
	                           <form method="post">
		                           	<h3>CREATE AN ACCOUNT</h3>
		                           <p>Please enter your email address to create an account.</p>
		                           <label>Email address</label><br>
		                           <input type="email" required="" name="email"><br>
		                           <button id="btn" type="submit" name="btnCheckEmail"><i class="fa fa-user"></i>Create an account</button>
				                   <br/>
				                      <span id="MessageTxt" style="<?php echo $Style ; ?>"><?php echo $EmailExists; ?></span>
	                           </form>
	                        </div>
	                        <div class="col-lg-6 col-md-6 create_accuont">
	                           <h3>ALREADY REGISTERED?</h3>
	                           <form method="post">
	                           	   <label>Email address</label><br>
		                           <input type="email" name="email" required=""><br>
		                           <label>Password</label><br>
		                           <input type="password" name="password" required=""><br>
		                           <p><a href="paopack_view.php?view=<?php echo base64_encode("ForgotPassword");?>">Forgot your password?</a> <span id="MessageTxt" style="<?php echo $Style ; ?>"><?php echo $MessageStatus; ?></span></p>
		                           <button type="submit" id="btn" name="btnLoginToBuy"><i class="fa fa-lock"></i>Sign in</button>
	                           </form>
	                        </div>
	                     </div> 
	                </div>
                  	 <?php }/*Paopack Checkout Address Page*/ else if($PageView=="PaopackCheckoutAddress"){ ?>
                  	 <div class="col-lg-9 col-md-9 col-sm-9 section_products">
	                    <table class="table table-bordered">
	                      <?php $layout->LoadTableHeader(); ?>
	                    </table> 
	                    <form method="post">
	                    	<div class="col-lg-12 col-md-12 col-sm-12 login_section">
		                       <h2 style="font-size:18px;margin-bottom: 20px;">DELIVERY ADDRESS</h2>
		                       <?php 
		                         $LoggedUserDetails = json_decode($paopack->PaopackGetLoggedUserDetails($_SESSION['LoggedEmail']));
								 foreach($LoggedUserDetails as $User){
		                       ?>
		                       <div class="col-lg-12 col-md-12 create_accuont" style="padding: 0px;">
		                          <label>Email address</label><br>
		                          <input type="email" name="email" value="<?php echo $User->UserEmail; ?>" readonly required=""><br>
		                          <label>First Name</label><br>
		                          <input type="text" name="fN" value="<?php echo $User->UFirstName; ?>" readonly required><br>
		                          <label>Choose Delivery Time</label><br>
		                          <input style="width:auto;" type="radio" name="lN" value="06:00a.m. - 10:00a.m." readonly required><span style="    margin-right: 30px;
    margin-left: 5px;">06:00a.m. - 10:00a.m.</span><input style="width:auto;" type="radio" name="lN" value="05:00p.m. - 09:00p.m." readonly required><span style="    margin-right: 30px;
    margin-left: 5px;">05:00p.m. - 09:00p.m.</span><br>
		                          <label>Address 1</label><br>
		                          <input type="text" name="address" value="<?php echo $User->UserAddress; ?>" required><br>
		                          <label>City</label><br>
		                          <input type="text" name="city" value="<?php echo $User->UserCity; ?>" required><br>
		                          <label>Post Code</label><br>
		                          <input type="text" name="pincode" value="<?php echo $User->UserPincode; ?>" required><br>
		                          <label>Country</label><br>
		                          <input type="text" name="country" value="<?php echo $User->UserCountry; ?>" required><br>
		                          <label>Tel/Mobile Number</label><br>
		                          <input type="text" name="mobile" value="<?php echo $User->UserMobile; ?>" required><br>
		                          
		                          <input type="hidden" name="userid" value="<?php echo $User->UserId; ?>"/>
		                       </div>
		                       <?php } ?>
		                       <p>
		                     <a href="./" style="text-decoration: none;color: #fff;background: #dc1e28;font-size: 16px;font-weight: bold;padding: 5px 15px;border-radius: 3px;border:1px solid #dc1e28;display:inline-block;">Continue Shopping</a>
		                     <button type="submit" name="btnSaveAddress"  style="float: right;text-decoration: none;color: #fff;background: #dc1e28;font-size: 16px;font-weight: bold;padding: 5px 15px;border-radius: 3px;border:1px solid #dc1e28;">Proceed To Payment</button>
		                     </p> 
		                    </div>  
	                    </form>
	                    
	                </div>
                  	 <?php }else if($PageView=="PaopackCheckoutPayment"){ ?> 
                  	   <div class="col-lg-9 col-md-9 col-sm-9 section_products">
	                    <table class="table table-bordered">
	                      <?php $layout->LoadTableHeader(); ?>
	                    </table> 
	                    <div class="col-lg-12 col-md-12 col-sm-12 login_section">
	                       <h2 style="font-size:18px;margin-bottom: 20px;">Pay Payment</h2>
	                       <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
								<!-- Identify your business so that you can collect the payments. -->
								<input type="hidden" name="business" value="<?php echo $paopack->PaopackGetPaypalAddress(); ?>">
								<!-- Specify a Buy Now button. -->
								<input type="hidden" name="cmd" value="_xclick">
								<!-- Specify details about the item that buyers will purchase. -->
								<input type="hidden" name="item_name" value="<?php echo $CartItems; ?>">
								<input type="hidden" name="amount" value="<?php echo $TotalPrice; ?>">
								<input type="hidden" name="quantity" value="<?php echo $TotalItems; ?>">
								<input type="hidden" name="currency_code" value="USD">
								<input type="hidden" name="return" value="<?php echo $UrlValue; ?>&act=<?php echo base64_encode("DummySuccessTextWritten")."_".base64_encode("PaidSuccessfully") ?>"/>
								<input type="hidden" name="cancel_return" value="<?php echo $UrlValue; ?>&act=<?php echo base64_encode("DummyFailedTextWritten")."_".base64_encode("FailedToPay") ?>"/>
								<!-- Display the payment button. -->
								<!----<input type="image" name="submit" border="0"
								src="https://www.paypalobjects.com/webstatic/en_US/btn/btn_checkout_pp_142x27.png"
								alt="PayPal - The safer, easier way to pay online">
								<img alt="" border="0" width="1" height="1"
								src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >---->
							</form>
<div class="pm-button"><a><img style="width:200px;" src="https://www.payumoney.com//media/images/payby_payumoney/buttons/113.png" /></a></div>

<!-----------------------------------PAYU API----------------------------------->
<?php
//Merchant key here as provided by Payu
$MERCHANT_KEY = "nQHGFUmb";
 
// Merchant Salt as provided by Payu
$SALT = "mev8myEiH6";
 
// End point - change to https://secure.payu.in for https://test.payu.inLIVE mode
$PAYU_BASE_URL = "https://secure.payu.in";
 
$action = '';
 
$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
 
  }
}
 
$formError = 0;
 
if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
   || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
 $hashVarsSeq = explode('|', $hashSequence);
    $hash_string = ''; 
 foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }
 
    $hash_string .= $SALT;
 
 
    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?> 
<head>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
  </head>
  <body onload="submitPayuForm()">
    
    <br/>
    <?php if($formError) { ?>
 
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <br/>
    <?php } ?>
    <form action="<?php echo $action; ?>" method="post" name="payuForm">
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
       
          <input type="hidden" name="amount" value="<?php echo $TotalPrice; ?>" />
         
          <input type="hidden" name="firstname" id="firstname" value="rakesh" />
      
        
          
          <input type="hidden" name="email" id="email" value="example@example.com" />
          
         <input type="hidden" name="phone" value="98726841" />
                <textarea  name="productinfo" style="visibility:hidden;">produst</textarea>       <input type="hidden" name="surl" value="http://132connect.com/All_Domaines/paopack.com/sucess.php" size="64" />
       <input type="hidden" name="furl" value="http://132connect.com/All_Domaines/paopack.com/failure.php" size="64" />
       <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
        
          <?php if(!$hash) { ?>
            <input style="position:absolute;left:20px;width:200px;height:37px;top: 73px;
    opacity: 0;" type="submit" value="Pay With Payu" />          <?php } ?>
       
</form>
</body>




<!--------------->

							<p style="<?php echo $Style; ?>"><?php echo $MessageStatus; ?></p>
	                       <p style="margin-top: 60px;">
	                     <a href="./" style="text-decoration: none;color: #fff;background: #dc1e28;font-size: 16px;font-weight: bold;padding: 5px 15px;border-radius: 3px;border:1px solid #dc1e28;display:inline-block;">Continue Shopping</a>
	                     <!--a href="./" style="float: right;text-decoration: none;color: #fff;background: #dc1e28;font-size: 16px;font-weight: bold;padding: 5px 15px;border-radius: 3px;">Place Order</a-->
	                     </p> 
	                    </div>  
	                    
	                </div>
                  	 <?php } /*Paopack Quick View Page*/ else if($PageView=="PaopackViewMoreProducts"){ ?>	
                  	 <div class="col-lg-9 col-md-9 col-sm-9 slider" style="padding-right: 0px;">
                        
                    <div class="row product_row_one" style="margin-top: 20px;">
                        
                       <?php $layout->LoadingProducts("All"); ?>
                        
                        
                       
                        <!--center><a style="    display: inline-block;
    text-decoration: none;
    /* width: 100%; */
    background: #8BC34A;
    padding: 10px 30px;
    color: #fff;
    margin-top: 10px;
    font-weight: bold;
    font-size: 18px;" id="load">Load More Products(200)</a></center>
                      <center><img id="loading" src="images/Recurring Appointment-48.png" alt=""></a></center-->
                      </div>

                    </div>

        
                
            </div>
           

                  	 <?php }/*Paopack Search Product Page*/ else if($PageView=="PaopackSearchProduct"){ ?>
                  	 <div class="col-lg-9 col-md-9 col-sm-9 slider" style="padding-right: 0px;">
                        
		                    <div class="row product_row_one">
		                    	<?php if(count($Products)>0){ ?>
		                    	<h3 style="margin-bottom: 10px;margin-left: 15px;">Found Products</h3>
		                    	<?php foreach($Products as $Prod){ if($Prod->Status=="Success"){ ?>
		                        <div class="col-lg-3 col-md-4 col-sm-4 product_one">
		                            <div class="product_pic">
		                                <center><img class="img-responsive" src="<?php echo $Prod->ProductImage; ?>" alt=""></center>
		                                <h2><?php echo $Prod->ProductName; ?><p style="    margin-left: 10px;display: inline;
    margin-left: 10px;"><?php echo $Prod->ProductWt; ?></p></h2>
		                                
		                                <h3><span style="text-decoration: line-through;margin-right: 15px;font-size: 12px;">Rs. <?php echo $Prod->ProductPrice; ?></span>Rs. <?php echo $Prod->ProductDiscount; ?></h3>
		                                
		                                <a class="product_hover" style="    bottom: 90px;text-decoration:none;background: #dc1e28;padding: 5px 15px;color: #fff;font-size: 16px;font-weight: 600;margin-left: -51px" href="paopack_view.php?view=<?php echo base64_encode('PaopackQuickView'); ?>&pid=<?php echo base64_encode($Prod->ProductId); ?>">Quick View</a>
		
		                            </div>
		                        </div>
		                       <?php } }  } ?>
		                    </div>
	
	                   </div>
                  	 <?php }/*Paopack Show Sabse Sasta Products*/else if($PageView=="SabseSasta"){ ?>
                  	 	<div class="col-lg-9 col-md-9 col-sm-9 slider" style="padding-right: 0px;">
                        
		                    <div class="row product_row_one">
		                    	
		                    	<h3 style="margin-bottom: 10px;
    margin-left: 15px;
    font-size: 16px;
    color: #dc1e28;
    font-weight: bold;
    margin-left: 15px;">Sabse Sasta Products</h3>
		                    	
		                        <?php $layout->LoadingProducts("Sasta"); ?>
		                      
		                    </div>
	
	                   </div>
                  	 <?php } /*Paopack Show Sabse Sasta Products*/else if($PageView=="HotOffers"){ ?>
                  	 	<div class="col-lg-9 col-md-9 col-sm-9 slider" style="padding-right: 0px;">
                        
		                    <div class="row product_row_one">
		                    	
		                    	<h3 style="margin-bottom: 10px;
    margin-left: 15px;
    font-size: 16px;
    color: #dc1e28;
    font-weight: bold;
    margin-left: 15px;">Hot Offers </h3>
		                    	
		                        <?php $layout->LoadingProducts("Hot"); ?>
		                      
		                    </div>
	
	                   </div>
                  	 <?php } /*Paopack Show Sabse Sasta Products*/else if($PageView=="ComboOffers"){ ?>
                  	 	<div class="col-lg-9 col-md-9 col-sm-9 slider" style="padding-right: 0px;">
                        
		                    <div class="row product_row_one">
		                    	
		                    	<h3 style="margin-bottom: 10px;
    margin-left: 15px;
    font-size: 16px;
    color: #dc1e28;
    font-weight: bold;
    margin-left: 15px;">Combo Offers</h3>
		                    	
		                        <?php $layout->LoadingProducts("Combo"); ?>
		                      
		                    </div>
	
	                   </div>
                  	 <?php } /*Paopack Show Sabse Sasta Products*/else if($PageView=="FreshArrival"){ ?>
                  	 	<div class="col-lg-9 col-md-9 col-sm-9 slider" style="padding-right: 0px;">
                        
		                    <div class="row product_row_one">
		                    	
		                    	<h3 style="margin-bottom: 10px;margin-left: 15px;">Fresh Arrivale Products</h3>
		                    	
		                        <?php $layout->LoadingProducts("All"); ?>
		                      
		                    </div>
	
	                   </div>
                  	 <?php }/*Paopack Show Products Filtered By Subcategory*/else if($PageView=="FilterSubcatProduct"){?>
                  	 	<div class="col-lg-9 col-md-9 col-sm-9 slider" style="padding-right: 0px;">
                        
		                    <div class="row product_row_one">
		                    	
		                    	<h3 style="margin-bottom: 10px;margin-left: 15px;">Fresh Arrivale Products</h3> <?php $GetId = $paopack->GetPageView($_GET['subid']); 
                  	            
                  	           
		                    	 $layout->LoadingProducts("SubcatProducts_".$GetId.""); ?>
		                    	 </div>
                           </div>
		                        
                  	 <?php }  /*Paopack Show Sabse Sasta Products*/else if($PageView=="ContactUs"){ ?>
                  	 	<div class="col-lg-9 col-md-9 col-sm-9 slider" style="padding-right: 0px;">
                        
		                    <div class="row product_row_one">
		                    	
		                    	<h3 style="font-size: 16px;
    color: #dc1e28;
    font-weight: bold;
    margin-bottom: 10px;">Find Us on Google Map</h3>
		                        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
		                        <div style='overflow:hidden;height:300px;width:100%;'>
		                        	<div id='gmap_canvas' style='height:300px;width:100%;'></div>
		                        	
		                        	<style>
		                        	  #gmap_canvas img{max-width:none!important;background:none!important}
		                            </style>
		                         </div>
		                         <script type='text/javascript'>
		                            function init_map(){
		                            	var myOptions = {zoom:16,center:new google.maps.LatLng(<?php echo $paopack->PaopackGetLatLng(); ?>),
		                            		mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
		                            		marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(<?php echo $paopack->PaopackGetLatLng(); ?>)});
		                            		infowindow = new google.maps.InfoWindow({content:'<strong>Paopack Fresh Market</strong><br>Dummy Content<br>'});
		                            		google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);
		                            		}google.maps.event.addDomListener(window, 'load', init_map);
		                         </script>
		                      
		                    </div>
	
	                   </div>
                  	 <?php }  /*Paopack Show Sabse Sasta Products*/else if($PageView=="PrivatePolicy"){ ?>
                  	 	<div class="col-lg-9 col-md-9 col-sm-9 slider" style="padding-right: 0px;">
                        
		         
             <h2 style="    margin-bottom: 10px;
    margin-left: 15px;
    font-size: 16px;
    color: #dc1e28;
    font-weight: bold;
    margin-left: 15px;
}">PRIVACY POLICY</h2>
    
            <div class="box" style="    background: #fff;
    padding: 10px;">
 
<h4>Privacy Notice</h4>
 <p>
This Privacy Notice (“Notice”) describes how ANYTHING INFOTECH PVT. LTD. and its respective subsidiaries, associate companies and jointly controlled entities (“PAOPACK”) use your Personal Data.
 </p>
 <h4>
Collection of Personal Data</h4>
 <p>
“Personal Data” means information about you, from which you are identifiable, including but not limited to your name, identification card number, birth certificate number, passport number, nationality, address, telephone number, fax number, bank details, credit card details, race, gender, date of birth, marital status, resident status, education background, financial background, personal interests, email address, your occupation, your designation in your PAOPACK Group, your PAOPACK details, the industry in which you work in, any information about you which you have provided to PAOPACK in registration forms, application forms or any other similar forms and/or any information about you that has been or may be collected, stored, used and processed by PAOPACK from time to time and includes sensitive personal data such as data relating to health, religious or other similar beliefs.
 </p>
 <p>
The provision of your Personal Data is voluntary. However if you do not provide PAOPACK your Personal Data, PAOPACK will not be able to process your Personal Data for the Purposes and Additional Purposes outlined below.
 </p>
 <p>
If you are an agent, vendor, supplier or service provider, provision of your Personal Data is mandatory and failure to provide your Personal Data, may be a breach of laws or regulatory requirements, and may cause PAOPACK to be unable to engage you to provide services or products or issue payments to you for products or services provided.
 </p>
 <p>
In addition to the Personal Data you provide to PAOPACK directly, PAOPACK may collect your Personal Data from a variety of sources such as:
 </p>
 <ul>
<li>	Fill up application or registration forms or other similar forms</li>
<li>	From publicly available sources such as directories</li>
<li>	From PAOPACK’s social media pages, if you follow, like or are a fan of such pages</li>
<li>	From credit reporting agencies</li>
<li>	When you interact and communicate with PAOPACK at any events or activities</li>
<li>•	When you enter contests organized by PAOPACK</li>
<li>•	From various entities or divisions under PAOPACK</li>
<li>•	By using PAOPACK websites, which includes all websites operated by PAOPACK and under the names of its respective brands (“Websites”)</li> <li>•	Your personal data may also be collected from cookies used on the Websites.</li>
</ul> 
<h4>Purposes of Processing</h4>
 <p>
PAOPACK may use and process your Personal Data for business and activities of PAOPACK which shall include, without limitation the following (“Purpose”):</p>
<p> 
Where you are a customer of the services provided by PAOPACK:
 </p>
 <ul><li>

•	to perform the PAOPACK’s obligations in respect of any contract entered into with you</li>
<li>
•	to provide you with any service you have requested</li>
<li>
•	to process your subscriptions and to deliver the services to you</li>
<li>
•	where you have requested to download and use the PAOPACK App (“App”), to process your request, to deliver the App to you and to provide you a license for the use of the App</li>
<li>
•	to process your participation in any events, activities, focus groups, research studies, contests, promotions, polls, surveys or any productions</li>
<li>
•	to process, manage or verify your application for subscription with the PAOPACK and to provide you the benefits offered to subscribers
</li>
<li>
•	to validate your bookings and process payments relating to any products or services you have requested</li>
<li>
•	to validate your bookings and process payments relating to any products or services you have requested</li>
<li>
•	to develop, enhance and provide products and services to meet your needs
</li>
<li>
•	to process exchanges or product returns</li>
 </ul>
<p>Where you are an agent, vendor, supplier, partner, contractor or service provider:
 </p>
 <ul>
 <li>
•	•	for the purposes of engaging you to provide services or products</li>
<li>••	to facilitate or enable any checks as may be required by PAOPACK in order to engage you</li>
<li>
•	•	to facilitate or enable any checks as may be required by PAOPACK in order to engage you</li>
<li>
•	•	to contact you or your PAOPACK</li>

</ul>
<p> 
General:
 </p>
 <ul>
 <li>
•	to respond to questions, comments and feedback from you</li><li>
•	to communicate with you for any of the purposes listed in this Notice</li><li>
•	for internal administrative purposes, such as auditing, data analysis, database records</li><li>
•	for purposes of detection, prevention and prosecution of crime</li><li>
•	for PAOPACK to comply with its obligations under law</li>
</ul>
<p> 
and you agree and consent to PAOPACK using and processing your Personal Data for the Purposes and in the manner as identified in this Notice </p>
 <h4>
 
Marketing and promotional purposes
 </h4>
 <p>
PAOPACK may also use and process your data for other purposes such as (“Additional Purposes”):
 </p>
 <ul><li>
•	To send you alerts, newsletters, updates, mailers, promotional materials, special privileges, festive greetings from PAOPACK, its partners, sponsors or advertisers</li><li>
•	To notify and invite you to events or activities organized by PAOPACK, its partners, sponsors or advertisers</li><li>
•	To process your registration to participate in or attend an event or activity and to communicate with you regarding your attendance at the event or activity</li><li>
•	To share your Personal Data amongst its subsidiaries, associate companies and jointly controlled entities as well as with its agent, vendor, supplier, partner, contractor or service provider who may communicate with you to market their products, services, events or promotions</li>
 </ul><p>
by way of post, telephone call, short message service (SMS), by hand and/or by email.
 </p>
 <h4>
Unsubscribe and Revocation of Consent
 </h4>
 <p>
If you wish to unsubscribe to the processing of your Personal Data for Additional Purposes PAOPACK, please click on the link “Unsubscribe” which is embedded in the relevant email in order not to receive any email in the future.
 </p>
 <p>
If you wish to revoke the consent that PAOPACK has obtained from you for the Purposes stipulated herein, please notify PAOPACK using the contact details stated below
 </p><h4>
Transfer of Personal Data
</h4>
<p> 
Your Personal Data may be transferred to, stored, used and processed in a jurisdiction other than your home nation or otherwise in the country, state and city in which you are present while using any services provided by PAOPACK (“Alternate Country”), to companies under PAOPACK which are located outside of your home nation or Alternate Country and/or where PAOPACK’s servers are located outside of your home nation or Alternate Country. You understand and consent to the transfer of your Personal Data out of your home nation or Alternate Country as described herein.</p><h4>
Disclosure to Third Parties
 </h4>
 <p>
Your personal data may be transferred, accessed or disclosed to third parties for the Purposes and Additional Purposes. Further, PAOPACK may engage other companies, service providers or individuals to perform functions on its behalf, and consequently may provide access or disclose to your Personal Data to such service providers or third parties. The third parties include, without limitation:</p>
 <ul><li>
•	PAOPACK partners, which include parties with whom PAOPACK collaborates with for certain events, programs and activities</li><li>
•	Event management companies and event sponsors</li><li>
•	Marketing research companies</li><li>
•	Service providers, including, information technology (IT) service providers for infrastructure, software and development work</li><li>
•	Professional advisors and external auditors, including legal advisors, financial advisors and consultants</li>
<li>•	Other entities within PAOPACK</li>
<li>
•	Governmental authorities to comply with statutory, regulatory and governmental requirements</li>
 </ul>
 <p>
Your Personal Data may also be shared in connection with a corporate transaction, such as a sale of a subsidiary or a division, merger, consolidation, or asset sale, or in the unlikely event of winding-up.</p>
 <h4>
Access & Correction Requests and Inquiries, Limiting the Processing of Personal Data
 </h4>
 <p>
Subject to any exceptions under applicable laws of your home nation or Alternate Country, you may request for access to and/or request correction of your Personal Data, request to limit the processing of your Personal Data for the Additional Purposes and/or make any inquiries regarding your Personal Data by contacting:
 </p>
 <address>
ANYTHING INFOTECH
D-185,Phase - 8B,Industrial Area, Mohali, Punjab(140603), 8968887924, 9643616179
 support@paopack.com

 </address>
 <p>
Subject to any laws of your home nation or Alternate Country, PAOPACK reserves the right to impose a fee for access of your Personal Data in the amounts as permitted therein.
 </p>
 <p>
In respect of your right to access and/or correct your Personal Data, PAOPACK has the right to refuse the your requests to access and/or make any correction to your Personal Data for the reasons permitted under law, such as where the expense of providing access to you is disproportionate to the risks to your or another person’s privacy.
 </p>
 <p>
If you do not wish for your Personal Data to be collected via cookies on the Websites, you may deactivate cookies by adjusting your internet browser settings to disable, block or deactivate cookies, by deleting your browsing history and clearing the cache from your internet browser.</p>
 <h4>
Links to Third-Party Websites
</h4>
<p> 
The Websites may contain links to third parties’ websites. Please note that PAOPACK is not responsible for the collection, use, maintenance, sharing, or disclosure of data and information by such third parties. If you provide information directly to such sites, the privacy policy and terms of service on those sites are applicable and PAOPACK is not responsible for the information processing practices or privacy policies of such sites.</p>
 <h4>
Personal Information from Minors and Other Individuals
 </h4>
 <p>
As a parent or legal guardian, please do not allow the minor (individuals under 18 (eighteen) years of age) under your care to submit Personal Data to PAOPACK. In the event that such Personal Data is provided to PAOPACK, you hereby consent to the processing of the minor’s Personal Data and personally accept and agree to be bound by this Notice and take responsibility for his or her actions.
In some circumstances you may have provided personal data relating to other individuals (such as your spouse, family members or friends) and in such circumstances you represent and warrant that  </p>
 <p>
you are authorized to provide their personal data to PAOPACK and you have obtained their consent for their personal data be processed and used in the manner as set forth in this Notice. </p><h4>
Acknowledgement and Consent
 </h4><p>
By communicating with PAOPACK, using PAOPACK’s services, purchasing products from PAOPACK or by virtue of your engagement with PAOPACK, you acknowledge that you have read and understood this Notice and agree and consent to the use, processing and transfer of your Personal Data by PAOPACK as described in this Notice.</p><p>
PAOPACK shall have the right to modify, update or amend the terms of this Notice at any time by placing the updated Notice on the Websites. By continuing to communicate with PAOPACK, by continuing to use PAOPACK’s services, purchasing products from PAOPACK or by your continued engagement with PAOPACK following the modifications, updates or amendments to this Notice, such actions shall signify your acceptance of such modifications, updates or amendments</p><p>
In the event of any conflict between the English and other language versions, the English version shall prevail</p>
</div>
</div>



	
	                  
                  	 <?php }/*Paopack Show Sabse Sasta Products*/else if($PageView=="career"){ ?>
                  	 	<div class="col-lg-9 col-md-9 col-sm-9 slider" style="padding-right: 0px;background-color:#fff;">
                        
		
 <head>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script>
 
$(document).ready(function(){
    var allPanels = $('.show_me').hide();
    var allPanel = $('.apply_now').hide();
    var app=$('.click').removeClass("rotate_me");
    var allPane=$('.click').parent().find('i').removeClass("rotate_me");
  $('.click').click(function() {
    allPanels.slideUp();
    allPanel.hide();
    app.removeClass("rotate_me");
    allPane.removeClass("rotate_me");
    $(this).next().stop(true).slideToggle();
    return false;
  });

   
  $('.click').click(function() {
     allPane.removeClass("rotate_me");
    if(!$('.click').parent().find('i').hasClass("rotate_me"))
    {
     
        $(this).parent().find('i').addClass("rotate_me");
   }
   
    return false;
  });






  // $('.click').click(function() {
  //   if($(this).parent().find('i').hasClass("rotate_me"))
  //   {
  //       $(this).parent().find('i').removeClass("rotate_me");
  //   }
  //   else{
  //       $(this).parent().find('i').addClass("rotate_me");
  //   }
  // });






  var allPanel = $('.apply_now').fadeOut();
  $('.apply').click(function() {
    allPanel.fadeOut();
   
    $(this).parent().next().stop(true).slideDown(1000);
    return false;
  });
  var all = $('.apply_now').slideDown(1000);
  $('.cross').click(function() {
    all.fadeOut();
    $(this).parent().next().stop(true).fadeOut();
    return false;
  });
  


// $(".apply").click(function(){
//      $('.apply_now').hide();
//     $(".apply_now").stop(true).show();
//     return false;
// });
});

</script>


<style type="text/css">

td
{
  border:2px solid #323A45;
}
.show_me{
    display: none;
background:white;
}
.apply_now{
    display: none;
    position: fixed;
    height: 100%;
    width: 100%;
    z-index: 999999999;
    background: rgba(2, 2, 2,.4);
    top: 0;
    padding: 30px;
    left: 0;

}

.rotate_me{
    transform: rotate(180deg);
    transition: all .3s linear;

}
.cross{
    /*//display: none;*/
}
.any{
    background: #fff;
        width: 40%;
        left: 50%;
    margin-left: -20%;
        position: absolute;
            top: 36%;
    margin-top: -15%;
    border: 2px solid  #dc1e28;

}
.heading
{
        padding: 20px;
    text-align: center;
    font-size: 40px;
    color: rgba(52,73,94,1);
    font-family: 'Open Sans', Arial, sans-serif;
    width: 100%;
    margin-left: -8px;
    font-weight: 500;
    margin-top: 30px;
background: rgba(241, 241, 241, 0.44);
}
.txt{
    padding: 10px;
    width: 100%;
    border: 1px solid gray;
    border-radius: 4px;
    margin-bottom: 10px;
    font-size:13px;
}
.click:hover{
    background: #dc1e28!important;
    cursor: pointer;
}
.click:hover h5{
    color: white!important;
    text-decoration: underline!important;
}
.click:hover h3{
    color: white!important;
    text-decoration: underline!important;
}
.click:hover i{
    color: white!important;
    
}
.flex-direction-nav .flex-next{
background:none!important;
}
.flex-direction-nav .flex-prev{
background:none!important;
}
.flex-direction-nav .flex-prev:after{
display:none;
}
.flex-direction-nav .flex-next:after{
display:none;
}
.flex-direction-nav li a.flex-next{
top:190px;
}
.flex-direction-nav li a.flex-prev{
top:190px;
}
@media (min-width: 992px){
.container {
width:100%;
}
}
 </style>




</head>
 <!--End Header-->

<div class="row">
<div class="col-lg-12 col-sm-12">
<h3 style="    font-size: 16px;
    color: #dc1e28;
    font-weight: bold;">WE ARE HIRING</h3>
</div>
</div>
<div class='row' style='padding-left:60px;padding-right:60px;margin-top: 5px;'>
        <div class='col-lg-12 col-sm-12' style='background: rgba(241, 241, 241, 0.44);
        border-bottom: 1px solid #BBBCBC!important;    margin-bottom: 5px;!important;    font-family: 'Open Sans', Arial, sans-serif;'><h2 style='color: #dc1e28!important;     font-weight: 600;      margin-top: 10px; '>DESIGN</h2></div> 
		<div class='col-md-12 click' style='background: rgba(241, 241, 241, 0.44);' id='1' onclick='slideToggle(this.id)'>
             <h3 style='color: #34495E;    margin-top: 10px;font-size:14px;margin-bottom: 10px;'><i class='fa fa-chevron-circle-down' style='color:#dc1e28'></i>  Designer/ Senior Designer - 1 Posts</h3>
             <h5 style='color: #34495E;margin-bottom: 0px; font-size:12px;margin-top: -10px;margin-left: 19px;    margin-top: 10px;margin-bottom: 10px;'>NCR/CHANDIGARH</h5>
             </div>
            
            <div class='col-md-12 show_me' id='img-1' style='border:1px solid #dc1e28;font-family: 'Open Sans', Arial, sans-serif;   margin-left: 34px;width: 937px;background: white!important;
              margin-top: 10px;'>
           <h2 style='color: #34495E;border-bottom: 1px solid #BBBCBC;padding-bottom: 5px;margin-top: 10px;
    font-weight: 600;'>  Designer/ Senior Designer - 1 Posts</h2>
           <h4 style='margin-top: 10px;font-size: 13px;color: gray;font-weight: 600;margin-left: 12px;'>Qualification</h4>
           <ul><li style='font-size: 12px;margin-top: 10px;'>B. Tech / GDPD / PGDPD ( NIDs , IITs are preferred)</li></ul>
           <h4 style='margin-top: 10px;font-size: 13px;color: gray;font-weight: 600;margin-left: 12px;'>Number of Posts</h4>
           <ul><li style='font-size: 12px;margin-top: 10px;'>1</li></ul>
            <h4 style='margin-top: 10px;font-size: 13px;color: gray;font-weight: 600;margin-left: 12px;'>Requirements</h4>
           <ul style='margin-bottom: 15px;'><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'>Experience in agile methodology and working closely with the immediate scrum team on a day-to-day basis</li><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'>Well-rounded understanding of online and mobile usability best practices</li><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'>Be comfortable sketching or quickly mocking up and communicating design ideas</li><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'>Expert level skills in Photoshop, Fireworks and other associated design tools</li><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'>Rock solid skills in graphic design, with an eye for typography, palette development, intuitive layout, and a pixel-level attention to detail</li><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'>Experience with Native app design for both iPhone and Android</li><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'>Knowledge of Javascript capabilities (i.e., what can be done on mobile with AJAX and emerging mobile JS libraries)</li><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'>Experience with international audiences a plus</li><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'>At least 2-3 years experience as an interaction designer</li><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'>Excellent understanding of user experience design for mobile and the web, technology trends, demonstrable design skills, and ability to show relevant work</li></ul><h4 style='margin-top: 10px;font-size: 13px;color: gray;font-weight: 600; margin-left: 12px;'>Responsibilities</h4>
           <ul style='margin-bottom: 15px;'><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'>Develop intuitive, usable, and engaging interactions and visual designs</li><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'>Initiate and respond to ideas for innovation/improvements based on research, analysis, and competitive reviews</li><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'>Provide strategic thinking and leadership</li><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'>Conceive, manage, and lead project design from start to finish</li><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'>Identify user needs and business requirements</li> </ul>
        <p style='margin-bottom:20px!important'><a href='' style='padding: 10px;background: #dc1e28;border-radius: 5px;color: white;font-size: 15px; margin-left: 12px;' class='apply'>Apply Now</a></p>
        <div class='row apply_now'>
        <div class='col-sm-12 any'>
        <p style='float: right;font-size: 20px;margin-top: 11px;color:#dc1e28;font-weight:600;cursor:pointer' class='cross'>X</p>
        <center><h2  style='margin-top: 14px;margin-bottom: 25px;'margin-left: 12px;>Apply Now</h2></center>

        <form action='' method='post' enctype='multipart/form-data'>
        <input type='textbox' class='txt' name='name' placeholder='Enter Name' required>
        <input type='textbox' class='txt' placeholder='Enter Email' name='email' required>
        <input type='textbox' class='txt' name='mobile' placeholder='Enter Mobile Number' required>
        <input type='file' name='fileToUpload' class='txt' id='fileToUpload' value='Upload Resume'>
        <textarea class='txt' style='resize:none' placeholder='About Yourself 200 words'></textarea>
        <input type='submit' value='Submit' name='submit' style='width:100%;background:#dc1e28;color:white;border: 1px solid #dc1e28;font-size:15px;padding:10px;border-radius: 4px;margin-bottom:20px'>
        </form>
        </div>
        </div>
        </div>
        </div>
        <div class='row' style='padding-left:60px;padding-right:60px;'>
        <div class='col-lg-12 col-sm-12' style='background: rgba(241, 241, 241, 0.44);
        border-bottom: 1px solid #BBBCBC!important;    margin-bottom: 5px;!important;    font-family: 'Open Sans', Arial, sans-serif;'><h2 style='color: #dc1e28!important;     font-weight: 600;      margin-top: 10px; '>MANAGEMENT</h2></div> <div class='col-md-12 click' style='background: rgba(241, 241, 241, 0.44);' id='2' onclick='slideToggle(this.id)'>
             <h3 style='color: #34495E;    margin-top: 10px;font-size:14px;margin-bottom: 10px;'><i class='fa fa-chevron-circle-down' style='color:#dc1e28'></i>  Product Manager - 2 Posts</h3>
             <h5 style='color: #34495E;margin-bottom: 0px; font-size:12px;margin-top: -10px;margin-left: 19px;    margin-top: 10px;margin-bottom: 10px;'>NCR/CHANDIGARH</h5>
             </div>
            
            <div class='col-md-12 show_me' id='img-2' style='border:1px solid #dc1e28;font-family: 'Open Sans', Arial, sans-serif;   margin-left: 34px;width: 937px;background: white!important;
              margin-top: 10px;'>
           <h2 style='color: #34495E;border-bottom: 1px solid #BBBCBC;padding-bottom: 5px;margin-top: 10px;
    font-weight: 600;'>  Product Manager - 2 Posts</h2>
           <h4 style='margin-top: 10px;font-size: 13px;color: gray;font-weight: 600;margin-left: 12px;'>Qualification</h4>
           <ul><li style='font-size: 12px;margin-top: 10px;'>MBA</li></ul>
           <h4 style='margin-top: 10px;font-size: 13px;color: gray;font-weight: 600;margin-left: 12px;'>Number of Posts</h4>
           <ul><li style='font-size: 12px;margin-top: 10px;'>2</li></ul>
            <h4 style='margin-top: 10px;font-size: 13px;color: gray;font-weight: 600;margin-left: 12px;'>Requirements</h4>
           <ul style='margin-bottom: 15px;'><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'>A technical undergraduate degree with some hands on software engineering experience</li><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'>Streamlined thinking and Logical depth to break down complex problems in solvable steps</li><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'>Bias towards swift action and hunger for results to figure out what's best for your customer - in short "Driver Personality with Product Judgment skills"</li><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'>High bar for design and product architecture - something you wish to exemplify in not only your contributions, but also the products you work on</li><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'> Ability to make quick decisions based on small or large sets of data and embed this as a habit in every key decision you make Monitor and measure launched products and feed learnings back into product development process</li><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'> Having an emotional connect with your customer and merging objectivity in your analysis while understanding the actual problems that they face. Their problem should be your problem</li><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'>Years of hands on experience in delivering scalable and effective consumer Internet products (only for Senior Members). Someone who is ready to roll up his/her sleeves when others have been tired of trying.</li></ul><h4 style='margin-top: 10px;font-size: 13px;color: gray;font-weight: 600;margin-left: 12px;'>Responsibilities</h4>
           <ul style='margin-bottom: 15px;'><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'>Constantly work with business owners, sales, customer service and operation team to understand Proptiger's mission and then collaborate with technology & design teams to move closer in achieving that mission</li><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'>Responsible for steering products throughout the innovation stage & execution cycle, focusing specifically on analyzing, tweaking and promoting your product to our intended customer base</li><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'>Understanding of the core business goals with underlying market factors, and translating them into a rewarding product roadmap - that delivers against company and team goals</li><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'>Make efforts to collect quantitative or qualitative data including competition, customer preferences or key performance indicators (KPIs) of your products and analyze it to drive the product in right direction</li> </ul>
        <p style='margin-bottom:20px!important'><a href='' style='padding: 10px;background: #dc1e28;border-radius: 5px;color: white;font-size: 15px;margin-left: 12px;' class='apply'>Apply Now</a></p>
        <div class='row apply_now'>
        <div class='col-sm-12 any'>
        <p style='float: right;font-size: 20px;margin-top: 11px;color:#dc1e28;font-weight:600;cursor:pointer' class='cross'>X</p>
        <center><h2  style='margin-top: 14px;margin-bottom: 25px; margin-left: 12px;'>Apply Now</h2></center>

        <form action='' method='post' enctype='multipart/form-data'>
        <input type='textbox' class='txt' name='name' placeholder='Enter Name' required>
        <input type='textbox' class='txt' placeholder='Enter Email' name='email' required>
        <input type='textbox' class='txt' name='mobile' placeholder='Enter Mobile Number' required>
        <input type='file' name='fileToUpload' class='txt' id='fileToUpload' value='Upload Resume'>
        <textarea class='txt' style='resize:none' placeholder='About Yourself 200 words'></textarea>
        <input type='submit' value='Submit' name='submit' style='width:100%;background:#dc1e28;color:white;border: 1px solid #dc1e28;font-size:15px;padding:10px;border-radius: 4px;margin-bottom:20px'>
        </form>
        </div>
        </div>
        </div>
        </div>
        <div class='row' style='padding-left:60px;padding-right:60px;'>
        <div class='col-lg-12 col-sm-12' style='background: rgba(241, 241, 241, 0.44);
        border-bottom: 1px solid #BBBCBC!important;    margin-bottom: 5px;!important;    font-family: 'Open Sans', Arial, sans-serif;'><h2 style='color: #dc1e28!important;     font-weight: 600;      margin-top: 10px; '>OPERATIONS</h2></div> <div class='col-md-12 click' style='background: rgba(241, 241, 241, 0.44);' id='3' onclick='slideToggle(this.id)'>
             <h3 style='color: #34495E;    margin-top: 10px;font-size:14px;margin-bottom: 10px;'><i class='fa fa-chevron-circle-down' style='color:#dc1e28'></i>  Executive /Senior Executive Operations - 1 Posts</h3>
             <h5 style='color: #34495E;margin-bottom: 0px; font-size:12px;margin-top: -10px;margin-left: 19px;    margin-top: 10px;margin-bottom: 10px;'>NCR/CHANDIGARH
</h5>
             </div>
            
            <div class='col-md-12 show_me' id='img-3' style='border:1px solid #dc1e28;font-family: 'Open Sans', Arial, sans-serif;   margin-left: 34px;width: 937px;background: white!important;
              margin-top: 10px;'>
           <h2 style='color: #34495E;border-bottom: 1px solid #BBBCBC;padding-bottom: 5px;margin-top: 10px;
    font-weight: 600;'>  Executive /Senior Executive Operations - 1 Posts</h2>
           <h4 style='margin-top: 10px;font-size: 13px;color: gray;font-weight: 600;margin-left: 12px;'>Qualification</h4>
           <ul><li style='font-size: 12px;margin-top: 10px;'>MBA</li></ul>
           <h4 style='margin-top: 10px;font-size: 13px;color: gray;font-weight: 600;margin-left: 12px;'>Number of Posts</h4>
           <ul><li style='font-size: 12px;margin-top: 10px;'>1</li></ul>
            <h4 style='margin-top: 10px;font-size: 13px;color: gray;font-weight: 600;margin-left: 12px;'>Requirements</h4>
           <ul style='margin-bottom: 15px;'><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'>--</li></ul><h4 style='margin-top: 10px;font-size: 13px;color: gray;font-weight: 600;margin-left: 12px;'>Responsibilities</h4>
           <ul style='margin-bottom: 15px;'><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'>Responsible for Quality Check and Data Entry of Documents.</li><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'>Responsible for Pass on the feedback to Sales Team for discrepancies found in documents submitted and seek resolutions.</li><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'>Responsible for scanning and uploading the documents in system within timelines.</li><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'>Responsible for Booking data management in excel and sending MIS to head office on timely basis.</li><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'>Responsible for documents archival as per document archival process.</li><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'>Responsible for query resolution of queries raised by sales team on operations processes.</li><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'>Responsible for relationship with Sales, Brokers & third party vendors.</li><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'>Ensure to provide training on operations processes to sales team.</li><li style='list-style: initial;margin-left: 30px;font-size: 12px;margin-top: 10px;'>Should ensure process adherence and must understand the critical SLAs, TATs and SOPs of Operations department.</li> </ul>
        <p style='margin-bottom:20px!important'><a href='' style='padding: 10px;background: #dc1e28;border-radius: 5px;color: white;font-size: 15px; margin-left: 12px;' class='apply'>Apply Now</a></p>
        <div class='row apply_now'>
        <div class='col-sm-12 any'>
        <p style='float: right;font-size: 20px;margin-top: 11px;color:#dc1e28;font-weight:600;cursor:pointer' class='cross'>X</p>
        <center><h2  style='margin-top: 14px;margin-bottom: 25px; margin-left: 12px;'>Apply Now</h2></center>

        <form action='' method='post' enctype='multipart/form-data'>
        <input type='textbox' class='txt' name='name' placeholder='Enter Name' required>
        <input type='textbox' class='txt' placeholder='Enter Email' name='email' required>
        <input type='textbox' class='txt' name='mobile' placeholder='Enter Mobile Number' required>
        <input type='file' name='fileToUpload' class='txt' id='fileToUpload' value='Upload Resume'>
        <textarea class='txt' style='resize:none' placeholder='About Yourself 200 words'></textarea>
        <input type='submit' value='Submit' name='submit' style='width:100%;background:#dc1e28;color:white;border: 1px solid #dc1e28;font-size:15px;padding:10px;border-radius: 4px;margin-bottom:20px'>
        </form>
        </div>
        </div>
        </div>
        </div>
        <div class='row' style='padding-left:60px;padding-right:60px;'>
        <div class='col-lg-12 col-sm-12' style='background: rgba(241, 241, 241, 0.44);
        border-bottom: 1px solid #BBBCBC!important;    margin-bottom: 5px;!important;    font-family: 'Open Sans', Arial, sans-serif;'><h2 style='color: #dc1e28!important;     font-weight: 600;      margin-top: 10px; '>SALES</h2></div> <div class='col-md-12 click' style='background: rgba(241, 241, 241, 0.44);' id='4' onclick='slideToggle(this.id)'>
             <h3 style='color: #34495E;    margin-top: 10px;font-size:14px;margin-bottom: 10px;'><i class='fa fa-chevron-circle-down' style='color:#dc1e28'></i>  Business Development - 48 Posts</h3>
             <h5 style='color: #34495E;margin-bottom: 0px; font-size:12px;margin-top: -10px;margin-left: 19px;    margin-top: 10px;margin-bottom: 10px;'>Mumbai (16), Bangalore (16), Pune (16),Chandigarh
</h5>
             </div>
            
            <div class='col-md-12 show_me' id='img-4' style='border:1px solid #dc1e28;font-family: 'Open Sans', Arial, sans-serif;   margin-left: 34px;width: 937px;background: white!important;
              margin-top: 10px;'>
           <h2 style='color: #34495E;border-bottom: 1px solid #BBBCBC;padding-bottom: 5px;margin-top: 10px;
    font-weight: 600;'>  Business Development - 48 Posts</h2>
           <h4 style='margin-top: 10px;font-size: 13px;color: gray;font-weight: 600;margin-left: 12px;'>Qualification</h4>
           <ul><li style='font-size: 12px;margin-top: 10px;'>MBA</li></ul>
           <h4 style='margin-top: 10px;font-size: 13px;color: gray;font-weight: 600;margin-left: 12px;'>Number of Posts</h4>
           <ul><li style='font-size: 12px;margin-top: 10px;'>48</li></ul>
            <h4 style='margin-top: 10px;font-size: 13px;color: gray;font-weight: 600;margin-left: 12px;'>Requirements</h4>
           <ul style='margin-bottom: 15px;'></ul><h4 style='margin-top: 10px;font-size: 13px;color: gray;font-weight: 600; margin-left: 12px;'>Responsibilities</h4>
           <ul style='margin-bottom: 15px;'> </ul>
        <p style='margin-bottom:20px!important'><a href='' style='padding: 10px;background: #dc1e28;border-radius: 5px;color: white;font-size: 15px; margin-left: 12px;' class='apply'>Apply Now</a></p>
        <div class='row apply_now'>
        <div class='col-sm-12 any'>
        <p style='float: right;font-size: 20px;margin-top: 11px;color:#dc1e28;font-weight:600;cursor:pointer' class='cross'>X</p>
        <center><h2  style='margin-top: 14px;margin-bottom: 25px; margin-left: 12px;'>Apply Now</h2></center>

        <form action='' method='post' enctype='multipart/form-data'>
        <input type='textbox' class='txt' name='name' placeholder='Enter Name' required>
        <input type='textbox' class='txt' placeholder='Enter Email' name='email' required>
        <input type='textbox' class='txt' name='mobile' placeholder='Enter Mobile Number' required>
        <input type='file' name='fileToUpload' class='txt' id='fileToUpload' value='Upload Resume'>
        <textarea class='txt' style='resize:none' placeholder='About Yourself 200 words'></textarea>
        <input type='submit' value='Submit' name='submit' style='width:100%;background:#dc1e28;color:white;border: 1px solid #dc1e28;font-size:15px;padding:10px;border-radius: 4px;margin-bottom:20px'>
        </form>
        </div>
        </div>
        </div>




	
	                  
                  	 <?php } /*Paopack Show Sabse Sasta Products*/else if($PageView=="CreatePackage"){ ?>
                  	 	<div class="col-lg-9 col-md-9 col-sm-9 slider" style="padding-right: 0px;background-color:#fff;">
                        
		                <h1 style="    font-size: 16px;
    color: #dc1e28;
    font-weight: bold;
    margin-bottom: 15px;
    text-transform: uppercase;
    border-bottom: 2px solid;
    padding-bottom: 10px;">Create Your Package</h1>
<form class="row c_package">
<div class="col-lg-3 col-md-3 col-sm-3"><lable>Number of Male</lable><br>
<select>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
</select></div>
<div class="col-lg-3 col-md-3 col-sm-3"><lable>Number of Female</lable><br>
<select>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
</select></div>
<div class="col-lg-3 col-md-3 col-sm-3"><lable>Number of Children</lable><br>
<select>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
</select></div>
<div class="col-lg-3 col-md-3 col-sm-3"><lable>Number of Babies</lable><br>
<select>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
</select></div>
<div class="col-lg-3 col-md-3 col-sm-3"><lable>Select Category</lable><br>
<select>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
</select></div>
<p style="    margin-top: 105px;
    margin-left: 15px;"><input style="    background: #dc1e28;
    color: #fff;
    border: 1px solid #dc1e28;
    padding: 5px 15px;
    font-weight: bold;" type="submit" value="Show Packages"></p>
</form>




	
	                  
                  	 <?php } /*Paopack Show Sabse Sasta Products*/else if($PageView=="AboutUs"){ ?>
                  	 	<div class="col-lg-9 col-md-9 col-sm-9 slider" style="padding-right: 0px;background-color:#fff;">
                       <h1 style="    font-size: 16px;
    color: #dc1e28;
    font-weight: bold;
    margin-bottom: 15px;
    text-transform: uppercase;
    border-bottom: 2px solid;
    padding-bottom: 10px;">About Us</h1>
<div class="a_us">
<p>
Paopack.com (Anything Infotech Pvt. Ltd.) is India’s Lowest Price online grocery shopping portal that aims at fulfilling your daily grocery requirements for lowest price. We offer a wide assortment of groceries, fruits and vegetables, cosmetics, Home Care, Personal Care,  Women needs, Men needs and Much more. PaoPack is online grocery portal "SASTE KAA BAAP" and no one can provide grocery products less then us.
</p>
<h3 style="    
    color: #dc1e28;
margin-top:15px;
    margin-bottom: 7px;
    border-bottom: 1px solid;
    padding-bottom:4px;">Why to Buy from Paopack?</h3>
<pre>
* Lowest Price grocery portal 
* All Products below MRP 
* Fresh Products
* Cash on delivery And Online payment available
* Manage your monthly grocery
* Multilevel quality checks before delivery
* You Can Creat your Monthely package automatically.
</pre>
<h2 style="    color: #dc1e28;
    margin-top: 15px;
font-size:20px;
font-weight:600;
font-style:italic;">Happy Shopping !<h2>





</div>
		                </div>






	
	                  
                  	 <?php } /*Paopack Show Sabse Sasta Products*/else if($PageView=="Terms"){ ?>
                  	 	<div class="col-lg-9 col-md-9 col-sm-9 slider" style="padding-right: 0px;background-color:#fff;">
work here                        
</div>





	
	                  
                  	 <?php }  /*Paopack Show Sabse Sasta Products*/else if($PageView=="FAQ"){ ?>
                  	 	<div class="col-lg-9 col-md-9 col-sm-9 slider" style="padding-right: 0px;background-color:#fff;">
                        
		               work kr la</div>




	
	                  
                  	 <?php }  /*Paopack Checkout Signin Page*/ else if($PageView=="ForgotPassword"){ ?>	
                  	 <div class="col-lg-9 col-md-9 col-sm-9 section_products" style="margin-top:30px;    background: #ebebeb;
    padding: 20px;">
	                    
                  	 	   
		                   <div class="col-lg-6 col-md-12 create_accuont" id="get">
		                      <form method="post">
		                      	  <h3>GET YOUR PASSWORD RESET CODE</h3>
			                      
			                      <label>Enter Your Valid Email address</label><br>
			                      <input type="text" required="" name="email"><br>
			                      <button id="btn" type="submit" name="btnForgotPassword">Send Mail</button>
			                      <br/>
			                      
<?php
   
$db_Server="localhost";  /*SERVER NAME*/
			     $db_Username="a132cbmz";  /*USERNAME*/
			    $db_Password="gV@4@1e3B6l3"; /*PASSWORD*/
			    $db_Database="a132cbmz_paopackfreshmarket";/*DATABASE*/
			    mysql_connect($db_Server,$db_Username,$db_Password);
mysql_select_db($db_Database);
  if(isset($_POST['btnForgotPassword']))
{
   $Email=$_POST['email'];

  
   $QueryToFindUser=mysql_query("select * from tbl_pao_user_registration where user_email='$Email'");
   if(mysql_num_rows($QueryToFindUser)>0){
	   $Code=rand(00000,99999);  /*  GENERATES RANDOM 4 - 5 CHAR PASSWORD  */
	   //$RandPAssword=md5($Code);
	   /*
	     SENDING MAIL DETAILS
	   */
	   $to=$Email;
	   $headers ="From:support@paopack.com";
	   $subject="Paopack Support Team Password Reset Code";
	   
           $Message="Your Password Reset code is : ".$Code;
	 
	   if(mail($to,$subject,$Message,$headers)){

		   if($UpdatePassword=mysql_query("update tbl_pao_user_registration set user_pwd='$Code' where  user_email='$Email'")){
		    

                      echo 'Password Reset code has been sent to your Email-id successfully.';
            
		   }else{
			  
		   }
	   }else{
		     
                          echo 'Enter Valid Email address.';
	   }
	   
   }else{
	  

         echo 'No user found.';
   }
   
  }
   
?>
		                       </form>
		                   </div>
<div class="col-lg-6 col-md-6 create_accuont" id="fill">
		                   	<form method="post">
		                      <h3>FILL YOUR PASSWORD RESET CODE</h3>
		                      <label>Email address</label><br>
		                      <input type="text" name="email" readonly value=<?php echo $Email;?> ><br>
		                      <label>Password Reset Code</label><br>
		                      <input type="password" name="prc" required><br>
                                      <label>Enter New Password</label><br>
		                      <input type="password" name="npwd" required><br>                                                                                                                <label>Confirm Password</label><br>
		                      <input type="password" name="cpwd" required><br>
		                      <button id="btnChangePassword"  type="submit" name="btnChangePassword"><i class="fa fa-lock"></i>Change Password</button>
<?php
   
$db_Server="localhost";  /*SERVER NAME*/
			     $db_Username="a132cbmz";  /*USERNAME*/
			    $db_Password="gV@4@1e3B6l3"; /*PASSWORD*/
			    $db_Database="a132cbmz_paopackfreshmarket";/*DATABASE*/
			    mysql_connect($db_Server,$db_Username,$db_Password);
mysql_select_db($db_Database);
  if(isset($_POST['btnChangePassword']))
{
  
$Email=$_POST['email'];
$Prc=$_POST['prc'];

$Npwd=$_POST['npwd'];
$Cpwd=$_POST['cpwd'];
 $QueryUser=mysql_query("select * from tbl_pao_user_registration where user_email='$Email'");
   if(mysql_num_rows($QueryUser)>0){while($row=mysql_fetch_assoc($QueryUser)){
$rc=$row['user_pwd'];
}
}

if($Prc==$rc)
{
if($Npwd==$Cpwd)
{
mysql_query("update tbl_pao_user_registration set user_pwd='$Npwd' where  user_email='$Email'");
echo "Your Password has been changed successfully.";
}
else
{  
 echo "Re-enter your password."; 
  }
}
else
{  
 echo "Your Password Reset Code didn't match."; 
  }
}   
?>
		                   </form>
		                   </div>
	                </div>
                  	 <?php }?>
            </div>
        </section>
<!-- section end here
 -->

<!-- footer starts here
 -->
      
 


    </div>

     <?php $layout->ShowFooter(); ?>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script>
  $('#combo').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });


</script>




<!--Start of Tawk.to Script-->
<script type="text/javascript">
var $_Tawk_API={},$_Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5768d8b9537e1db952f16485/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>