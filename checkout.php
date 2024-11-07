<?php
include('helper/queryStringHelper.php');
if (isset($_REQUEST['prospect']) && $_REQUEST['prospect'] != '') {
   $prospect = $_REQUEST['prospect'];
} else {
   header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

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

   <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />

   <!-- CSS -->
   <link rel="stylesheet" href="css/common.css">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/confirm_style.css">

   <script type="text/javascript">
      window.history.forward();
      function noBack() { 
         window.history.forward(); 
      }
   </script>

</head>

<body>

   <title>Recurring: subscription renewing every 1 month</title>
   <div class="pace pace-inactive">
      <div data-progress-text="100%" data-progress="99" id="i1cne" class="pace-progress">
         <div class="pace-progress-inner"></div>
      </div>
      <div class="pace-activity"></div>
   </div>
   <div class="pad10">
      <div class="giftbox">
         <img src="images/congrats.png" class="img-fluid brand-logo" />
         <h6 class="text-center mt-1">Instant Access</h6>
         <p class="text-center mt-1 small">Congratulations You are a Winner, Pay $6.99 below</p>
      </div>
      <div class="toegang"></div>
      <div id="alert" role="alert" hidden="" class="alert alert-danger">
         <span class="sr-only">Error:</span>
      </div>
      <div id="status_window"></div>
      <div id="err-block" class="error hidden"></div>
      <form role="form" method="post" action="ajax.php?method=new_order_prospect&<?= $query_string ?>"
         name="checkout_form" accept-charset="utf-8" enctype="application/x-www-form-urlencoded;charset=utf-8"
         id='payment-form' class='checkout-form'>
         <input type="hidden" name="prospectId" value="<?= $prospect ?>">
         <input type="hidden" name="offer_id" value="124">
         <input type="hidden" name="product_id" value="970">
         <input type="hidden" name="billing_model_id" value="64">
         <input type="hidden" name="quantity" value="1">
         <div class="form-group" style="display:none;">
            <label>Select Card Type: </label>
            <select name="creditCardType" class="" data-deselect="false"
               data-error-message="Please select valid card type!" style="display: none;">
               <option value="">Card Type</option>
               <option value="master">Master Card</option>
               <option value="visa">Visa</option>
            </select>
         </div>
         <div class="form-group">
            <div class="div100 input-pad">
               <input id="creditCardNumber" name="creditCardNumber" autocomplete="off"
                  class="required form-control form-control-lg card-number" type="tel" placeholder="Card Number"
                  maxlength="16" data-error-message="Please enter a valid credit card number!"
                  placeholder="Credit Card Number" required />
            </div>
         </div>
         <div class="form-group">
            <div class="div50 input-pad">
               <div id="i0f2n">
                  <select name="expmonth" class="required expmonth all-fields form-control form-control-lg py-0"
                     data-error-message="Please select a valid expiry month!" required>
                     <option value="">Month</option>
                     <option value="01">(01) January</option>
                     <option value="02">(02) February</option>
                     <option value="03">(03) March</option>
                     <option value="04">(04) April</option>
                     <option value="05">(05) May</option>
                     <option value="06">(06) June</option>
                     <option value="07">(07) July</option>
                     <option value="08">(08) August</option>
                     <option value="09">(09) September</option>
                     <option value="10">(10) October</option>
                     <option value="11">(11) November</option>
                     <option value="12">(12) December</option>
                  </select>
               </div>
            </div>
            <div class="div50 input-pad">
               <div id="i4uyh">
                  <select name="expyear" class="required all-fields form-control form-control-lg py-0"
                     data-error-message="Please select a valid expiry year!" required>
                     <option value="">Year</option>
                     <option value="23">2023</option>
                     <option value="24">2024</option>
                     <option value="25">2025</option>
                     <option value="26">2026</option>
                     <option value="27">2027</option>
                     <option value="28">2028</option>
                     <option value="29">2029</option>
                     <option value="30">2030</option>
                     <option value="31">2031</option>
                     <option value="32">2032</option>
                     <option value="33">2033</option>
                     <option value="34">2034</option>
                     <option value="35">2035</option>
                     <option value="36">2036</option>
                     <option value="37">2037</option>
                     <option value="38">2038</option>
                     <option value="39">2039</option>
                     <option value="40">2040</option>
                     <option value="41">2041</option>
                     <option value="42">2042</option>
                  </select>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="form-group">
            <div class="div50 input-pad">
               <input id="cvv" required name="CVV" value="" class="form-control form-control-lg card-cvc required"
                  type="tel" placeholder="CVV (3 digits back of card)" title="3 Digit Security Code" value=""
                  data-validate="cvv" data-error-message="Please enter a valid CVV!"
                  onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g,'');" data-max-length="3"
                  data-min-length="3" maxlength="3">

            </div>
            <div class="div50 input-pad">
               <a href="javascript:void(0);" onclick="javascript:openNewWindow('cvv.php', 'modal');"> <img
                     src="images/cvv.png" id="if12af" /> </a>
            </div>
            <div class="clearfix"></div>
         </div>

         <div id="i8pkb3"> </div>
         <label class="frm-chk"><input type="checkbox" checked="checked" class="chkbx" name="bill_checkbox" value="yes"
               onclick="$('#billAddress').slideToggle();"><span class="cust_check"> Billing Address is same as Shipping
               Address</span></label>

         <p style="display:none">
            <input type="radio" name="billingSameAsShipping" id="shipping_yes" value="yes" checked="checked"> YES
         </p>

         <div id="billAddress" class="bilng" style="display: none;">
            <div class="fields">
               <input value="" type="text" name="billingFirstName" data-group="2" placeholder="Billing First Name"
                  data-field="billing_first_name" class="form-control  all-fields"
                  data-error-message="Please enter your billing first name!">
            </div>
            <div class="fields">
               <input value="" type="text" name="billingLastName" data-group="2" placeholder="Billing Last Name"
                  data-field="billing_last_name" class="form-control  all-fields"
                  data-error-message="Please enter your billing last name!">
            </div>
            <div style="display: none;" class="fields">
               <select name="billingCountry" class="form-control"
                  data-error-message="Please select your billing Country!" data-selected="US">
                  <option value="US">United States</option>
               </select>
            </div>
            <div class="fields">
               <input type="tel" class="form-control all-fields" name="billingZip" placeholder="Billing Zip Code"
                  data-error-message="Please enter a valid billing zip code!" maxlength="5"
                  onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g,'');">
            </div>
            <div class="fields">
               <input value="" type="text" name="billingAddress1" data-group="2" placeholder="Billing Address"
                  data-field="billing_address" class="form-control  all-fields"
                  data-error-message="Please enter your billing address!">
            </div>
            <div class="fields">
               <input value="" type="text" name="billingAddress2" data-group="2" placeholder="Billing Apt / Suite #"
                  data-field="billing_address_2" class="form-control all-fields">
            </div>
            <div class="fields">
               <input value="" type="text" name="billingCity" data-group="2" placeholder="Billing City"
                  data-field="billing_city" class="form-control  all-fields"
                  data-error-message="Please enter your billing city!">
            </div>
            <div class="fields">
               <input type="text" class="form-control all-fields" name="billingState" placeholder="Billing State"
                  data-error-message="Please select your billing state!" />
            </div>
         </div>

         <!-- END Billing address = Shipping address -->
         <button type="submit" id="submitBtn" class="btn btn-success btn-lg btn-block">PAY NOW</button>
         <p></p>
         <p></p>
         <p></p>
         <center>We accept the following credit cards:</center>
         <p></p>
         <div align="center">
            <img src="images/card.jpg" class="img-responsive" />
         </div>
         <p id="loading-indicator" style="display:none;">Processing...</p>
         <p id="crm-response-container" style="display:none;">CRM messages will appear here...</p>
      </form>
   </div>
   <div class="sf-submit-loader-container" style="background: rgba(0, 0, 0, .5);">
      <div class="sf-submit-loader-content">
         <div class="sf-submit-loader-wrapper">
            <div class="lds-dual-ring"></div>
         </div>
      </div>
   </div>


   <footer class="footer">
      <div id="footer_trial_disclaimer">
      </div>
      <p class="copyright">
         &copy; 2023 Sweeps &mdash; All rights reserved.
      </p>
      <p class="customerservice">
         Customer Service: <a href="tel:8442123949">8442123949</a>
      </p>
      <p class="footerlinks">
         <a href="javascript:void(0);" onclick="javascript:openNewWindow('page-terms.php', 'modal');">Terms &amp;
            Conditions</a> | <a href="javascript:void(0);"
            onclick="javascript:openNewWindow('page-privacy.php', 'modal');">Privacy
            Policy</a> | <a href="javascript:void(0);"
            onclick="javascript:openNewWindow('page-contact.php', 'modal');">Contact
            us</a>
      </p>
   </footer>




</body>

</html>