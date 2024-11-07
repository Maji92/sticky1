<?php 
require('config.php');
if(empty($_SESSION['order_response'])){
   //header('location:index.php');
}
$orderid = $_SESSION['order_response']->order_id;
$upsellId = (isset($_SESSION['upsell']->order_id))?$_SESSION['upsell']->order_id:'';
$orderIds = $orderid.' , '.$upsellId;
$orderIds = rtrim($orderIds,' , ');


?>
<html lang="en">
    <head>
       <meta charset="utf-8"/>
 
 <title></title>
 
 <meta name="description" content="" />
 
 
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
 <meta http-equiv="content-type" content="text/html;charset=utf-8" />
 <meta http-equiv="content-language" content="en-us" />
  
 <meta name="apple-mobile-web-app-capable" content="yes"/>
 <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
 <meta name="HandheldFriendly" content="true"/>
 
 <meta property="og:title" content="" />
 <meta property="og:description" content="" />
 <meta property="og:type" content="website" />
 <meta property="og:image:width" content="1200" />
 <meta property="og:image:height" content="630" />
 <meta property="og:image" content="images/product.png" />
 
 <link rel="stylesheet" href="css/app.css" />
 <link rel="stylesheet" href="css/popup.css" />
  
 <link href="images/product.png" rel="icon" type="image/png">
 
       <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
      
       <link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
       <style>
          @import  url(https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
          @import  url(https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
       </style>
       <link rel="stylesheet" href="css/ty-style.css">
       
    </head>
    <body class="tybody-banner">
             <section class="tybanner">
         
         <header class="site-header" id="header">
             <p style="color:#9a9a9a;line-height: 1.5;font-size: 16px;margin-bottom: 30px;">Your entry/monthly plan has been confirmed. </p>
             <h1 class="site-header__title" data-lead-id="site-header-title">THANK YOU AND GOOD LUCK!</h1>
         </header>
         <div class="main-content">
                 <p class="tytxt1">Keep a lookout in your inbox for your credentials to login to the number one health app as part of your entry:</p>
                 <img src="images/fitgnx-logo.jpg" class="fitgnx-logo" />
 
                 <p class="main-content__body">Your order id is : <br><br><strong style="color: green"><?=$orderIds?></strong></p>
             <!--<i class="fa fa-check main-content__checkmark" id="checkmark"></i>-->
             <!--<p class="main-content__body" data-lead-id="main-content-body">Your entry into the draw was successful. Please look our for any emails or notification we send you. Your order id is : <br><br><strong style="color: green">
             #</strong></p>-->
             
         </div>
       </section>
          <section id="footer" class="site-footer">
          <div class="container">
         <div>
             <p class="py-3 text-center">Participate before it's too late!</p>
          </div>
          <div class="row justify-content-center">
             <p id="i27s8k" class="small">
                 <a href="javascript:void(0);" onclick="javascript:openNewWindow('page-terms.php', 'modal');">Terms &amp;
                Conditions</a> | <a href="javascript:void(0);" onclick="javascript:openNewWindow('page-privacy.php', 'modal');">Privacy
                Policy</a> | <a href="javascript:void(0);" onclick="javascript:openNewWindow('page-contact.php', 'modal');">Contact
                us</a>            </p>
             <p class="site-footer__fineprint" id="fineprint">Copyright ©2023 | All Rights Reserved</p>
          </div>
       </section>
 
         </body>
 </html>