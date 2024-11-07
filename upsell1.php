<?php
include('helper/queryStringHelper.php');

?>
<html>

<head>
   <meta charset="utf-8" />

   <title>Kobalt Tool Set</title>

   <meta name="description" content="Kobalt Tool Set" />


   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <meta http-equiv="content-language" content="en-us" />

   <meta name="apple-mobile-web-app-capable" content="yes" />
   <meta name="apple-mobile-web-app-status-bar-style" content="black" />
   <meta name="HandheldFriendly" content="true" />

   <meta property="og:title" content="Kobalt Tool Set" />
   <meta property="og:description" content="Kobalt Tool Set" />
   <meta property="og:type" content="website" />
   <meta property="og:image:width" content="1200" />
   <meta property="og:image:height" content="630" />
   <meta property="og:image" content="images/product.png" />

   <link rel="stylesheet" href="css/app.css" />
   <link rel="stylesheet" href="css/popup.css" />

   <link href="images/product.png" rel="icon" type="image/png">


   <meta name="viewport" content="width=800, user-scalable=no">
   <link rel="stylesheet" href="css/upsell1.css" />
   <script type="text/javascript">
      window.history.forward();
      function noBack() { 
         window.history.forward(); 
      }
   </script>
</head>

<body onload="noBack()">

   <header>
      <div class="top_bar">
         <div class="inner">
            <center>
               <!--<img src="images/wireless-ear-pods-black-new.png?v=1234">-->
               <h2 style="color: white;">Kobalt Tool Set</h2>
            </center>
         </div>
      </div>
   </header>
   <div class="wrap" id="ty_wrap">
      <div id="content">
         <div id="upsell_block_1">
            <span class="bold_text_ty red_text">
               LIMITED TIME OFFER
            </span>
            <br>
         </div>

         <form name="is-upsell" action="ajax.php?method=new_upsell&<?= $query_string ?>" method="POST" class="is-upsell" accept-charset="utf-8"
            enctype="application/x-www-form-urlencoded;charset=utf-8">
            <input type="hidden" name="previousOrderId" value="<?=$_GET['orderId']?>">
            <input type="hidden" name="offer_id" value="124">
            <input type="hidden" name="product_id" value="971">
            <input type="hidden" name="billing_model_id" value="64">
            <input type="hidden" name="quantity" value="1">
            <input type="hidden" name="step_num" value="2">
            <div id="upsell_block" onclick="$('form.is-upsell').submit()">
               <img id="step2_bottle" src="images/product.png">
               <p class="up-pro-dis">
                  ACT NOW AND GET <span>20<span style="text-transform:lowercase;display: inline;">x</span> MORE
                     ENTRIES</span> FOR YOUR CHANCE TO WIN A<br> Kobalt Tool Set
               </p>
               <!--<p id="shippingupsell">WIRELESS EARPODS</p>
               <p class="up-pro-dis">Connect Your Smart Watch to these AMAZING BlueTooth EarPods to listen to your
                  favourite tunes or music!
               </p>-->
            </div>
            <center>
               <a type="submit">
                  <input type="image" value="" src="images/upsell_button.png" class="pulse upsell_button buy-upsell">
               </a>
               
            </center>

         </form>

         <input type="hidden" id="kformSubmit">
         <div id="no_thank_you_block">
            <h2>We Care About Your Privacy</h2>
            <img src="images/up-secure.png"><br>
            <br>
            <br>
         </div>
      </div>
      <div class="section" id="section1"></div>
      <div class="section" id="section2"></div>
      <div class="section" id="section3"></div>
      <div class="section" id="section4"></div>
      <div class="section" id="section5"></div>
      <div class="section" id="section6">
         <a class="nothankyoulink"
            href="thank-you.php?<?= $query_string ?>"><img
               src="images/x_thankyou.jpg" class="cross">No Thanks, I decline this offer</a>
      </div>
   </div>

   <section id="footer">
      <div class="container">
         <div>
            <p class="py-3 text-center">Participate before it's too late!</p>
         </div>
         <div class="row justify-content-center">
            <p id="i27s8k" class="small">
               <a href="javascript:void(0);" onclick="javascript:openNewWindow('page-terms.php', 'modal');">Terms &amp;
                  Conditions</a> | <a href="javascript:void(0);"
                  onclick="javascript:openNewWindow('page-privacy.php', 'modal');">Privacy
                  Policy</a> | <a href="javascript:void(0);"
                  onclick="javascript:openNewWindow('page-contact.php', 'modal');">Contact
                  us</a>
            </p>
         </div>
   </section>



   <p id="loading-indicator" style="display:none;">Processing...</p>
</body>

</html>