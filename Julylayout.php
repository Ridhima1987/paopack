<?php 
  class Layout extends Paopack{

          /*PAOPACK - Complete package of Paopack Fresh Market Layout's Design*/
          
          /*Variable Declaration*/
          public $TotalCartAmount=0 ;
          
      
      /*Putting Header*/
      function HeaderFiles(){
        $headerfiles = "
            <meta charset='utf-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
            <meta name='description' content=''>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <link rel='stylesheet' href='bootstrap/css/bootstrap.min.css'>
            <link rel='stylesheet' href='bootstrap/css/bootstrap-theme.min.css'>
            
            <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
            <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js'></script>
            <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
            <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,300italic,400italic,600,600italic,700,700italic,300' rel='stylesheet' type='text/css'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' type='text/css' href='slick/slick.css'/>
    
             <link rel='stylesheet' type='text/css' href='slick/slick-theme.css'/>
    
            <link rel='stylesheet' href='css/style.css'>
            <link rel='stylesheet' type='text/css' href='font-awesome/css/font-awesome.css'>
    
            <script src='js/vendor/modernizr-2.8.3-respond-1.4.2.min.js'></script>
        ";
        echo $headerfiles;
      }
      
      function ShowHeader(){
        $header="
        <!--  Sanjay  Header's Starts
     -->        
<div class='col-md-12' id='loaction_popup'>
                    <div class='select_location'>
                    <i class='fa fa-times' aria-hidden='true'></i>
                      <label>Your City</label><br>
                      <select>
                  
 
              </select><br>
                      <label>Where do You Want To Deliver Order?</label><br>
                      <input type='text'><i style='    color: #dc1e28;
        font-size: 20px;
        margin-left: -20px;' class='fa fa-map-marker' aria-hidden='true'></i><br>
                      <a href='#'>Start Shopping</a>
                      <a href='#' id='skip_popup'>Skip</a>
                    </div>
                </div>

<header class='row'>
                
                <div class='col-lg-12 col-md-12 col-sm-12 col-sm-12 col-xs-12 top_header'>

                <div class='col-lg-6 col-md-6 col-sm-6 col-xs-6 top_contact'>
                
                <!-- <p><i class='fa fa-phone' aria-hidden='true'></i> +91-9643616179</p>
                  <p><i class='fa fa-phone' aria-hidden='true'></i> +91-8968887924</p> -->
                <div class='d_location' style='padding: 0px;' >
                    <h5  id='show_location_popup'>Services At Locations <i class='fa fa-map-marker' style='margin-left: 5px;'></i></h5>
                    
                   
                </div>
                
                </div>
                <div class='col-lg-6 col-md-6 col-sm-6 col-xs-6 top_login'>
                <!-- <div class='col-md-6 col-sm-8 col-xs-6 w_paopack' style='padding: 0px;' >
                  <a href='#'>Why Paopack</a>
                </div> -->
                
                  ";
                  if(!empty($_SESSION['LoggedEmail'])){
                      $header.=" 
              <a>".$_SESSION['LoggedEmail']."</a>
                    <a href='paopack_view.php?view=".base64_encode("PaopackUserLogout")."' style='
    font-weight: bold;
    text-decoration: none;
    display: inline-block;
    padding: 10px 20px;'>Logout</a>
              ";
                  }else{
                      $header.=" 
             
                    <a href='paopack_view.php?view=".base64_encode("PaopackLogin")."' id='log_here'>Login</a>
                    
                    <a href='paopack_view.php?view=".base64_encode("PaopackRegistration")."' id='reg_here'>Register</a>
                    
                    ";
                  }
           
           $header.="
            
                </div>
                </div>
                
                <div class='col-lg-12 col-md-12 col-sm-12 t_header'>
                <div class='container'>
                  <nav class='col-lg-5 col-md-5 col-sm-5 nav_bar'>
                <ul>
                    <li id='1'><a href='./'>HOME</a></li>
                    <li is><a href='paopack_view.php?view=".base64_encode("SabseSasta")."'>SABSE SASTA</a></li>
                       <li><a href='paopack_view.php?view=".base64_encode("ComboOffers")."'>COMBO OFFERS</a></li>
                   
                </ul>
                </nav>
                <div class='col-lg-2 col-md-2 col-sm-2 col-xs-12 logo'>
                      <a href='./'><h1><img src='images/logo.png'></h1></a>
                  </div>
                <nav class='col-lg-5 col-md-5 col-sm-5 nav_bar'>
                <ul>
                    <li><a href='paopack_view.php?view=".base64_encode("HotOffers")."'>HOT OFFERS</a></li>
                    <li><a href='paopack_view.php?view=".base64_encode("ContactUs")."'>CONTACT</a></li>
                    <li><a href='paopack_view.php?view=".base64_encode("CreatePackage")."'>CREATE PACKAGE</a></li>
                </ul>

                <ul class='mb_view'>
                    <li><a href='#'>Contact</a></li>
                    <li><a href='#'>Sitemap</a></li>
                    <li><a href='signin.html'><img src='images/3055-200.png' style='width: 15px;'>
                    Wallet (Ammount: 200 Rs/-)</a></li>
                    <li><a href='signin.html'><i class='fa fa-sign-in'></i>
                    Sign In</a></li>
                </ul>
            </nav>
                  
                 
                </div>
                </div>
                <div class='col-lg-12 cart'>

<div class='search'>
<i class='fa fa-search'></i>
                      <form method='post' class='entypo-search'>
                        <fieldset><input id='search' type='search' placeholder='Search . . .' name='srchtxt'></fieldset>
                      <button type='submit' name='btnSearch' style='background: none;
    border: none;
    vertical-align: bottom;visibility:hidden'><i class='fa fa-search'></i></button>
              </form>
                  </div>





<!--<div class='col-md-6 col-sm-6 col-xs-12 d_location' style='padding: 0px;' >
                    <h5>Delivery at:</h5>
                    <input type='text'>
                    <button id='show_location_popup'>Change Location</button>
                </div>-->
                                             <!--  <p style='    display: inline;
                          color: #8DC732;'>We Are On: <i style='margin-left: 0px;
                          margin-right: 10px;
                          color: #777777;' class='fa fa-apple' aria-hidden='true'></i><i style='margin-left: 0px;
                          margin-right: 10px;
                          color: #777777;' class='fa fa-android' aria-hidden='true'></i></p> -->
                      
                                                <div class='dropdown'>
                                                  <button class='dropbtn'><a href='paopack_view.php?view=".base64_encode("PaopackProductCheckout")."'>
                                            <img src='images/cart_hover.png' alt=''>
                                            <span>Cart</span>
                                            <span>(".parent::PaopackCountCartProducts().")</span>
                                        </a></button>
                                                  <div class='dropdown-content'>
                                                  
                                                    <div class='row cart_hover_div'> ";
                                                    
                                                    if(parent::PaopackIsCartContainsProduct()){
                                                      
                                                      $CartProductDetails =json_decode(parent::PaopackCartProductDetails());
                                   
                                                      foreach($CartProductDetails as $CartDetails){
                                                      $this->TotalCartAmount+=$CartDetails->Count*$CartDetails->Price;
                                                  $header.="   
                                                            <div class='col-lg-4 col-md-4'>
                                                              <img class='img-responsive' style='border: 1px solid #ebebeb;' src='".$CartDetails->ProductImage."' alt=''>
                                                            </div>
                                                           
                                                            <div class='col-lg-8 col-md-8 cart_item_info' style='text-align: left;margin-bottom: 20px;'>
                                                              <h2>".$CartDetails->ProductName."</h2>
                                                              <h2>Quanity : ".$CartDetails->Count."</h2>
                                                              <h2><span style='font-weight: bold;'>Total:</span> ".$CartDetails->Count." X ".$CartDetails->Price." = ".$CartDetails->Count*$CartDetails->Price."</h2>
                                                              
                                                            </div>
                                                            ";
                                        }
                                                   $header.="
                                                     <h4 style='text-align: left;font-size:16px;padding-bottom:5px; border-bottom:1px solid #ebebeb;margin-top: 7px;'>Shipping<span style='float:right;'>Rs 0.00(Free)</span></h4>
                                                      <h4 style='text-align: left; font-size:16px;padding-bottom:5px;border-bottom:1px solid #ebebeb;margin-top: 7px;'>Total<span style='float:right;'>Rs ".$this->TotalCartAmount."</span></h4>
                                                      <a href='paopack_view.php?view=".base64_encode("PaopackProductCheckout")."' style='display: inline-block;color: #fff;
                                                      font-size: 16px;
                                                      font-weight: 600;padding: 3px 10px;background-color: #dc1e28;margin-top: 20px;text-decoration: none;'>Go to Cart Summary</a>
                                                    </div>
                                                   ";
                                                    }
                                                    
                                                    
                                                  $header.="           
                                                      
                                                  </div>
                                                </div>
                                                </div>
                      
                                        <div class='hamburger'>
                                            <i class='fa fa-bars'></i>
                                        </div>
                                    
                </div>
                <nav class='row sub_nav_bar'>
                     <ul>
                         <li><a href='./'>HOME</a></li>
                         <li><a href='paopack_view.php?view=".base64_encode("SabseSasta")."'>SABSE SASTA</a></li>
                         <li><a href='paopack_view.php?view=".base64_encode("ComboOffers")."'>COMBO OFFERS</a></li>
                         <li><a href='paopack_view.php?view=".base64_encode("HotOffers")."'>HOT OFFERS</a></li>
                        
                         
                         <li><a href='paopack_view.php?view=".base64_encode("ContactUs")."'>CONTACT</a></li>
                          <li><a href='paopack_view.php?view=".base64_encode("CreatePackage")."'>CREATE PACKAGE</a></li>

                     </ul>
                     <!-- <ul class='mb_view'>
                         <li><a href='#'>Contact</a></li>
                         <li><a href='#'>Sitemap</a></li>
                         <li><a href='signin.html'><img src='images/3055-200.png' style='width: 15px;'>
                         Wallet (Ammount: 200 Rs/-)</a></li>
                         <li><a href='signin.html'><i class='fa fa-sign-in'></i>
                         Sign In</a></li>
                         
                     </ul> -->
                 </nav>
            </header>

    
<!--    Sanjay Header Ends Here
 -->        ";
        echo $header;
      }
      
      /*Footer Function*/
      function ShowFooter(){
        $footer = "
          <footer class='row' style='margin-bottom: 5px;'>
                 <div class='col-lg-3 col-md-3 col-sm-6 footer_one'>
                     <h2>POWERED BY</h2>
                     <h4><i class='fa fa-map-marker'></i>ANYTHING INFOTECH</h4>
<h4>D-185,Phase - 8B,Industrial Area</h4>
<h4>Mohali, Punjab(140603)</h4>
    
                     <h4><i class='fa fa-phone'></i>8968887924, 9643616179</h4>
                     <h4><i class='fa fa-envelope'></i><a href='#'> support@paopack.com</a></h4>
    
    
                 </div>  
                 <div class='col-lg-3 col-md-3 col-sm-6 footer_one'>
                     <h2>INFORMATION</h2>
                     <ul>
                         <li><a href='paopack_view.php?view=".base64_encode("AboutUs")."'>About Us</a></li>
                        
                         <li><a href='paopack_view.php?view=".base64_encode("PrivatePolicy")."'>Privacy Policy</a></li>
                         <li><a href='paopack_view.php?view=".base64_encode("Terms")."'>Terms and Condition</a></li>
                         <li><a href='paopack_view.php?view=".base64_encode("FAQ")."''>FAQ</a></li>

<li><a href='paopack_view.php?view=".base64_encode("career")."'>Career</a></li>
                     </ul>
                 </div>
                 <div class='col-lg-3 col-md-3 col-sm-6 footer_one'>
                     <h2>MENU</h2>
                     <ul>
                         <li><a href='./'>Home</a></li>
                         <li><a href='paopack_view.php?view=".base64_encode("SabseSasta")."'>Sabse Sasta</a></li>
                         <li><a href='paopack_view.php?view=".base64_encode("HotOffers")."'>Hot Offers</a></li>
                         <li><a href='paopack_view.php?view=".base64_encode("ContactUs")."'>Contact</a></li>
                     </ul>
                 </div>
                 <div class='col-lg-3 col-md-3 col-sm-6 footer_one'>
                     <h2>FOLLOW US</h2>
                     <div class='footer_social_link'>
                        <a href=https://www.facebook.com/paopack><i class='fa fa-facebook'></i></a>
                        <a href='#'><i class='fa fa-twitter'></i></a>
                        <a href='#'><i class='fa fa-rss'></i></a>
    
                    </div>
                   <!--  <div style='border: 1px solid;height: 120px;margin-top: 10px;' class='fb-like-box fb_iframe_widget' data-header='false' data-stream='false' data-show-faces='true' data-colorscheme='light' data-width='275' height='500'  data-href='https://www.facebook.com/anythinginfotech' fb-xfbml-state='render'></div> -->
                 </div>
<div class='col-lg-12 col-md-12 col-sm-12'>
<p style='    font-size: 14px;
    font-weight: bold;
    color: #fff;
    border-top: 1px solid #fff;
    margin-top: 20px;
    padding-top: 5px;
    text-align: center;
    letter-spacing: 3px;'>&copy; 2016 www.paopack.com<p>
</div>
               
            </footer>
            <!-- Footer Ends Sanjay Kumar (Web Developer) | sanjayks992@gmail.com --->
      
      
        ";
        echo $footer;
      }
      
      
      /*Left Sidebar Menu*/
      function LeftSidebarMenu(){
         $leftSidebarMenu = "
         <div class='col-lg-3 col-md-3 col-sm-3 sidebanner'>

                      <!---  Updated Sidebar Menu Starts  -->
                <h3 style='    font-size: 16px;
            color: #dc1e28;
            font-weight: bold;
            margin-bottom: 10px;'>CATEGORIES</h3>
                    <div id='cssvmenu'>
            <ul>";
               
          $Categories = json_decode(parent::GetCategories());
          foreach($Categories as $Cat){
            $leftSidebarMenu.="       
               <li class='has-sub'><a href='#'><span>".$Cat->CategoryTitle."</span></a> <ul>";
               
            $Subcategories = json_decode(parent::GetSubcategories($Cat->CategoryId)); 
            foreach($Subcategories as $Subcat){
              $leftSidebarMenu.="  
                 
                       <li class='has-sub'><a href='paopack_view.php?view=".base64_encode("FilterSubcatProduct")."&subid=".base64_encode($Subcat->SubcategoryId)."'><span>".$Subcat->SubcategoryTitle."</span></a>
                          <!--ul>
                             <li><a href='#'><span>Sub Product</span></a></li>
                             <li class='last'><a href='#'><span>Sub Product</span></a></li>
                          </ul--->
                       </li>
                     ";
          }
          $leftSidebarMenu.="</ul></li>";
          }    
          $leftSidebarMenu.="     
               
                 
            </ul>
            </div>

<!--            mobile side bar
 -->


          <div id='nestedAccordion'> ";
          
           $Categories = json_decode(parent::GetCategories());
           foreach($Categories as $Cat){
            $leftSidebarMenu.="
          
                <h2>".$Cat->CategoryTitle."</h2>
                <div> ";
              $Subcategories = json_decode(parent::GetSubcategories($Cat->CategoryId)); 
              foreach($Subcategories as $Subcat){
                $leftSidebarMenu.="
                     <h3><a href='paopack_view.php?view=".base64_encode("FilterSubcatProduct")."&subid=".base64_encode($Subcat->SubcategoryId)."'>".$Subcat->SubcategoryTitle."</a></h3>
                       <!--div><a href='#'> Sub 1</a></div>
                       <h3>Child 2</h3>
                       <div><a href='#'> Sub 1</a>
                        <a href='#'> Sub 1</a>
                        <a href='#'> Sub 1</a>
                       </div--->
                ";
              }
            $leftSidebarMenu.=" 
                    
                </div> ";
           }
          
              
          $leftSidebarMenu.="    
              <!--h2>Parent 2</h2>
              <div>
                  <h3>Child 1</h3>
                   <div><a href='#'> Sub 1</a>
                   <a href='#'> Sub 1</a>
                   <a href='#'> Sub 1</a>
                   <a href='#'> Sub 1</a>
                   </div>
                   <h3>Child 2</h3>
                   <div><a href='#'> Sub 1</a>
                   <a href='#'> Sub 1</a>
                   <a href='#'> Sub 1</a>
                   </div>
                   <h3>Child 2</h3>
                   <div><a href='#'> Sub 1</a>
                   <a href='#'> Sub 1</a>
                   <a href='#'> Sub 1</a>
                   </div>
                   <h3>Child 2</h3>
                   <div><a href='#'> Sub 1</a>
                   <a href='#'> Sub 1</a>
                   <a href='#'> Sub 1</a>
                   </div>
              </div--->
              
              
          </div>
                <!--  Updated Sidebar Menu Ends ---->

                  <div class='panel-group' id='accordion' style='display:none;'>
                    <h3 style='    font-size: 16px;
            color: #dc1e28;
            font-weight: bold;
            margin-bottom: 10px;'>CATEGORIES</h3>";
            
        $Categories = json_decode(parent::GetCategories());
              //$CollapsiblePanels=array("collapse1","collapse2","collapse3","collapse4");
              $i=0;
        foreach($Categories as $Cat){
          $leftSidebarMenu.="
             <div class='panel panel-default'>
              <div class='panel-heading'>
                <h4 class='panel-title'>
                <a data-toggle='collapse' data-parent='#accordion' href='#collapse".$i."'>
                ".$Cat->CategoryTitle."<i class='fa fa-caret-down'></i></a></h4></div>
          ";
        $Subcategories = json_decode(parent::GetSubcategories($Cat->CategoryId)); 
        $leftSidebarMenu.="
             <div id='collapse".$i."' class='panel-collapse collapse'>
             <ul class='panel-body'>
          ";
        foreach($Subcategories as $Subcat){
          $leftSidebarMenu.=" <li><a href='paopack_view.php?view=".base64_encode("FilterSubcatProduct")."&subid=".base64_encode($Subcat->SubcategoryId)."'>".$Subcat->SubcategoryTitle."</a></li>";
        } 
        $leftSidebarMenu.="</ul>
              </div></div>";
              $i++;
        
        }
       
         $leftSidebarMenu.="</div> 
          </div>";
         echo $leftSidebarMenu;
      }
      function PrivatePolicy(){
        echo "hello";

      }
      function HomepagePrimarySlider(){
        $Slider = "
        <div class='col-lg-9 col-md-9 col-sm-9 slider'>
                    <div id='myCarousel' class='carousel slide' data-ride='carousel'>
                      <!-- Indicators
                      <ol class='carousel-indicators'>
                        <li data-target='#myCarousel' data-slide-to='0' class='active'></li>
                        <li data-target='#myCarousel' data-slide-to='1'></li>
                        <li data-target='#myCarousel' data-slide-to='2'></li>
                        <li data-target='#myCarousel' data-slide-to='3'></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class='carousel-inner' role='listbox'>
                      
                      ";
            $Images = json_decode(parent::PaopackGetSliderImages("Active"));
            $k=1;
            foreach($Images as $Img){
              if($k==1){
                $Slider.="
                            <div class='item active'>
                              <img src='".$Img->ImageData."'>
                            </div>
                            ";
              }else{
                $Slider.="
                            <div class='item'>
                              <img src='".$Img->ImageData."'>
                            </div>
                            ";
              }
              $k++;
            }
        
                        
                   $Slider.="     
            
                      </div>

                      <!-- Left and right controls -->
                      <a class='left carousel-control' href='#myCarousel' role='button' data-slide='prev'>
                        <span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>
                        <span class='sr-only'>Previous</span>
                      </a>
                      <a class='right carousel-control' href='#myCarousel' role='button' data-slide='next'>
                        <span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>
                        <span class='sr-only'>Next</span>
                      </a>
                    </div>
                </div>
        ";
        echo $Slider;
      }
      function HomepageSecondarySlider(){
        if(parent::PaopackIsHotOffersAvailable()){
          $Slider = "
            <div class='col-lg-12 col-md-12 col-sm-12 combo_section' id='combo'> ";
         
        $Products = json_decode(parent::PaopackGetHotOffers()); 
        foreach($Products as $Prod){
          $Slider.="    
                  <div class='col-lg-4 col-md-4 col-sm-4'>
                    <a href='paopack_view.php?view=".base64_encode("PaopackQuickView")."&pid=".base64_encode($Prod->ProductId)."'><img class='img-responsive' src='".$Prod->ProductImage."'></a>
                  </div> ";
        }
              
             $Slider.="  
                  </div>
          ";
          echo $Slider;
        }else{ }
      }
      function LoadingProducts($Type){
          
        $Products='';
        
        if (preg_match('/_/',$Type)){
        $myArray = explode('_', $Type);
        $JsonProducts = json_decode(parent::PaopackGetProductsViaSubcategoryId($myArray[1]));
        //print_r($JsonProducts);
      }else{
        $JsonProducts = json_decode(parent::PaopackGetProducts($Type));
      }

              if(count($JsonProducts)>0){
                foreach($JsonProducts as $Prod){
                  $Products.="  
                     
                          <div class='col-lg-3 col-md-4 col-sm-4 product_one'>
                              <div class='product_pic'>
                                  <center><img class='img-responsive' src='".$Prod->ProductImage."' alt=''></center>
                                  <h2>".$Prod->ProductName."<p style='    margin-left: 10px;text-align:center;display:inline;'>".$Prod->ProductWt."</p></h2>
                                  
                                  <h3><span style='text-decoration: line-through;margin-right: 15px;font-size: 12px;'>Rs. ".$Prod->ProductPrice."</span>Rs. ".$Prod->ProductDiscount."</h3>
                                  <a class='product_hover' href='paopack_view.php?tocart=add&pid=".base64_encode($Prod->ProductId)."'.>
                                    <img src='images/cart.png'>
                                  </a>
                                  <a class='product_hover' style='bottom:90px;text-decoration:none;background: #dc1e28;padding: 5px 15px;color: #fff;font-size: 16px;font-weight: 600;margin-left: -51px' href='paopack_view.php?view=".base64_encode("PaopackQuickView")."&pid=".base64_encode($Prod->ProductId)."'>Quick View</a>
  
                              </div>
                          </div>
                        ";
                }
              }else{
                $Products.="<h2 style='margin-left: 15px;'>No Prouct Found.</h2>";
              }
         
                      
                    $Products.="  
                    </div>  
        ";
        echo $Products;
      }
      
      function LoadTableHeader(){
        $trStyle = "background: #dc1e28;color: #fff;";
        $PageView = parent::GetPageView($_GET['view']);
      $table=" <thead>
                           <tr>";
      if($PageView=="PaopackProductCheckout"){
       $table.="<th style='".$trStyle."'>Summary</th>";
        if(isset($_SESSION['LoggedEmail'])){}else{
           $table.="<th style=''>Sign in</th>";
        }
          $table.="<th style=''>Address</th>";
        $table.="<th style=''>Payment</th>";
       
      }else if($PageView=="PaopackCheckoutLogin"){
        $table.="<th style=''>Summary</th>";
        if(isset($_SESSION['LoggedEmail'])){}else{
           $table.="<th style='".$trStyle."'>Sign in</th>";
        }
        $table.="<th style=''>Address</th>";
        $table.="<th style=''>Payment</th>";
      }else if($PageView=="PaopackCheckoutAddress"){
        $table.="<th style=''>Summary</th>";
        $table.="<th style='".$trStyle."'>Address</th>";
          $table.="<th style=''>Payment</th>";
      }else if($PageView=="PaopackCheckoutPayment"){
        $table.="<th style=''>Summary</th>";
        $table.="<th>Address</th>";
          $table.="<th style='".$trStyle."'>Payment</th>";
      }  
        $table .= "
                             
                           </tr>
                         </thead>
        ";
        echo $table;
      }
      
      function LoadSimilarProducts($CategoryId,$ProductId){
        $Similar = "
        <div class='row product_row_one'>";
           
           if(parent::PaopackIsSimilarProducts($CategoryId,$ProductId)){
            
            $SimilarProductsList = json_decode(parent::PaopackSimilarProduct($CategoryId,$ProductId));
           
         if(count($SimilarProductsList)>0){
          $Similar.=" 
             
                          <h3 style='margin-bottom: 30px;'>SIMILAR PRODUCTS</h3>";
                          
                          
             
          foreach($SimilarProductsList as $SimProd){
              $Similar.="             
                          <div class='col-lg-3 col-md-4 col-sm-4 product_one'>
                              <div class='product_pic'>
                                  <center><img class='img-responsive' src='".$SimProd->ProductImage."' alt=''></center>
                                  <h2>".$SimProd->ProductName."</h2>
                                  <h3><s>Rs ".$SimProd->ProductPrice."</s> Rs ".$SimProd->ProductDiscount."</h3>
                                  <a class='product_hover' href='#'><img src='images/cart.png' alt=''></a>
                                  <a class='product_hover' style='    bottom: 90px;text-decoration:none;background: #dc1e28;padding: 5px 15px;color: #fff;font-size: 16px;font-weight: 600;margin-left: -51px' href='paopack_view.php?view=".base64_encode("PaopackQuickView")."&pid=".base64_encode($SimProd->ProductId)."'>Quick View</a>
    
                              </div>
                          </div>
                        ";
            }
         }
           }
           
           
                  
           $Similar.="  
                    </div>
        ";
      echo $Similar;
      }
      
      function PaopackAdminPanelHeaderFiles(){
        $HFiles = "
        <link rel='stylesheet' href='css/layout.css' type='text/css' media='screen' />
      <script src='js/jquery-1.5.2.min.js' type='text/javascript'></script>
      <script src='js/hideshow.js' type='text/javascript'></script>
      <script src='js/jquery.tablesorter.min.js' type='text/javascript'></script>
      <script type='text/javascript' src='js/jquery.equalHeight.js'></script>
        ";
        echo $HFiles;
      }
      
    function PaopackAdminHomeSidebar(){
          
        $AdminDetails = json_decode(parent::PaopackAdminDetails($_SESSION['AdminEmail']));  
        $AdminName='';$AdminEmail='';
      foreach($AdminDetails as $Admin){
        $AdminName=$Admin->Name;
        $AdminEmail=$Admin->Email;
      }
        $Sidebar = "
        <section id='secondary_bar'>
        <div class='user'>
          <p>".$AdminName."</p>
          <!-- <a class='logout_user' href='#' title='Logout'>Logout</a> -->
        </div>
        <div class='breadcrumbs_container'>
          <article class='breadcrumbs'><a href='index.php'>Paopack Admin</a> <div class='breadcrumb_divider'></div> <a class='current'>Dashboard</a></article>
        </div>
      </section><!-- end of secondary bar -->
      
      <aside id='sidebar' class='column'>
        <!--form class='quick_search'>
          <input type='text' placeholder='Quick Search' name='srchTxt'>
        </form>
        <hr/--->
        <h3>Content</h3>
        <ul class='toggle'>
          <li class='icn_new_article'><a href='dashboard.php?view=".base64_encode("PaopackNewProduct")."'>New Product</a></li>
          <li class='icn_categories'><a href='dashboard.php?view=".base64_encode("PaopackShowAllProduct")."'>Show All Products</a></li>
          <li class='icn_new_article'><a href='dashboard.php?view=".base64_encode("PaopackNewCategory")."'>New Category</a></li>
          <li class='icn_categories'><a href='dashboard.php?view=".base64_encode("PaopackShowAllCategory")."'>Show All Category</a></li>
          <li class='icn_new_article'><a href='dashboard.php?view=".base64_encode("PaopackNewSubcategory")."'>New Subcategory</a></li>
          <li class='icn_categories'><a href='dashboard.php?view=".base64_encode("PaopackShowAllSubcategory")."'>Show All Subcategory</a></li>
        </ul>
    
        
        <h3>Slider</h3>
        <ul class='toggle'>
          <li class='icn_settings'><a href='dashboard.php?view=".base64_encode("PaopackNewSliderImage")."'>New Slider Image</a></li>
          <li class='icn_settings'><a href='dashboard.php?view=".base64_encode("PaopackAllSliderImage")."'>All Slider Images</a></li>
        </ul>
        
        <h3>Admin</h3>
        <ul class='toggle'>
          <li class='icn_settings'><a href='dashboard.php?view=".base64_encode("PaopackUserProfile")."'>Profile</a></li>
          <li class='icn_settings'><a href='dashboard.php?view=".base64_encode("PaopackDeliveryCity")."'>New City</a></li>
          <li class='icn_settings'><a href='dashboard.php?view=".base64_encode("PaopackDeliveryLocality")."'>New Locality</a></li>
          <li class='icn_settings'><a href='dashboard.php?view=".base64_encode("PaopackNewExecutives")."'>Create Executives</a></li>
          <li class='icn_categories'><a href='dashboard.php?view=".base64_encode("PaopackShowAllExecutives")."'>Show All Executives</a></li>
          <!----<li class='icn_jump_back'><a href='dashboard.php?view=".base64_encode("PaopackUserLogout")."'>(".$AdminEmail.") </a></li>-->
        </ul>
          <h3>Package</h3>
        <ul class='toggle'>
          <li class='icn_settings'><a href='dashboard.php?view=".base64_encode("PaopackFamilyPackage")."'>Family Packages</a></li>
          <li class='icn_settings'><a href='dashboard.php?view=".base64_encode("PaopackOtherPackages")."'>Other Packages</a></li>
         <li class='icn_categories'><a href='dashboard.php?view=".base64_encode("PaopackCommercialPackages")."'>Commercial Packages</a>
          <li class='icn_jump_back'><a href='dashboard.php?view=".base64_encode("PaopackUserLogout")."'>(".$AdminEmail.") Logout</a></li>
        </ul>
        <footer>
          <hr />
          <p><strong>Copyright &copy; 2016 Paopack Fresh Market</strong></p>
          <p>Theme by <a href='../' target='_blank'>Paopack</a></p>
        </footer>
        <!-- Sanjay Kumar Footer Ends (sanjayks992@gmail.com) --->
      </aside>
        ";
        echo $Sidebar;
      }
function PaopackExecutiveFileLinks($ShowType){
      switch($ShowType){
        case "Header":
           $Executives = "
              <meta charset='UTF-8'/>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
            <link rel='stylesheet' href='css/bootstrap.min.css'/>
            <link rel='stylesheet' href='css/font-awesome.css'/>
            <link rel='stylesheet' href='css/jquery-ui.css'/>
            <link rel='stylesheet' href='css/icheck/flat/blue.css'/>
            <link rel='stylesheet' href='css/select2.css'/>
            <link rel='stylesheet' href='css/unicorn.css'/>
          ";
        break;
        case "Footer":
          $Executives = "
            <script src='js/jquery-ui.custom.js'></script>
            <script src='js/bootstrap.min.js'></script>
            <script src='js/jquery.flot.min.js'></script>
            <script src='js/jquery.flot.resize.min.js'></script>
            <script src='js/jquery.sparkline.min.js'></script>
            <script src='js/fullcalendar.min.js'></script>
            <script src='js/jquery.nicescroll.min.js'></script>
            <script src='js/unicorn.js'></script>
            <script src='js/unicorn.dashboard.js'></script>
            <!--- // Footer Ends Sanjay Kumar (sanjayks992@gmail.com) --->
          ";
        break;
        default:
      }
echo $Executives ;
}
     
     function PaopackExecutiveSidemenus(){
      $Menus = "
      <ul>
        <li class='active'><a href='./'><i class='fa fa-home'></i> <span>Dashboard</span></a></li>
        
        <li class='submenu'>
            <a href='#'><i class='fa fa-flask'></i> <span>Pending Orders</span> <i class='arrow fa fa-chevron-right'></i></a>
        <ul>
        <li><a href='index.php?view=".base64_encode('HierarchicalView')."'>Hierarchical View</a></li>
        <li><a href='index.php?view=".base64_encode('TabularView')."'>Tabular View</a></li>
        </ul>
        </li>
        <li class='submenu'>
              <a href='#'><i class='fa fa-flask'></i> <span>Completed Orders</span> <i class='arrow fa fa-chevron-right'></i></a>
        <ul>
        <li><a href='index.php?view=".base64_encode('CompletedOrders')."'>Show All</a></li>
        </ul>
        </li>
<li><a href='index.php?view=".base64_encode("PendingOrderDetails")."'><i class='fa fa-list'></i> <span>Pending Order Details</span></a></li>
      </ul>
      ";
      echo $Menus;
     }
      
      
  }
?>