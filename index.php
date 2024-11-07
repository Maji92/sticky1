<?php
require('config.php');
$decline_reason = '';
if (isset($_SESSION['new_prospect_response']->decline_reasons)) {
    $decline_reason = $_SESSION['new_prospect_response']->decline_reason;
    $_SESSION['new_prospect_response'] = '';
} else {
    session_destroy();
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
    <meta property="og:image" content="./images/product.png" />

    <link rel="stylesheet" href="./css/app.css" />
    <link rel="stylesheet" href="./css/popup.css" />

    <link href="./images/product.png" rel="icon" type="image/png">


    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <link rel="stylesheet" href="./css/common.css" />
    <link rel="stylesheet" href="./css/tosPop.css" />
    <link rel="stylesheet" href="./css/index.css" />
    <link rel="stylesheet" href="./css/all.css" />
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <style type="text/css">
        .h1,
        h1 {
            font-size: 2.2rem;
        }
    </style>
</head>

<body>

    <?php include('components/validation_modal.php'); ?>
    <section class="s9div">
        <div class="offerbar px-3 py-2">
            <div class="container1">
                <h4 id="irvc3">Special Offer</h4>
            </div>
        </div>
        <div class="offerbaroftheday px-3 py-1"><span class="categoryText">
                Today&#039;s Offer <i class="fa fa-angle-right"></i> Kobalt 100-Piece Household Tool Set with Hard Case
            </span>
        </div>
        <div class="offerbarexpire px-3 py-1">
            <i id="ik69k" class="fa fa-bell hidden-xs hidden-md"></i> Attention, this
            offer expires in:
            <div id="timer-12586003" data-gjs-type="Timer" data-gjs-sf-timer-seconds="270">
                <span id="timer-container-12586003">00:00</span>
                <script>
                    (function () {
                        const timer = document.getElementById('timer-container-12586003');
                        const seconds = document.getElementById('timer-12586003').dataset.gjsSfTimerSeconds || 0;
                        const endTime = Date.now() + (seconds * 1000);
                        const refreshTimer = function () {
                            if (!timer) {
                                return;
                            }
                            const currentTime = Date.now();
                            const timeLeft = endTime - currentTime;

                            if (timeLeft > 0) {
                                const timeLeftInSeconds = Math.floor(timeLeft / 1000);
                                const minutesLeft = Math.floor(timeLeftInSeconds / 60);
                                const secondsLeft = timeLeftInSeconds % 60;

                                const minutesText = minutesLeft < 10 ? ('0' + minutesLeft) : minutesLeft;
                                const secondsText = secondsLeft < 10 ? ('0' + secondsLeft) : secondsLeft;

                                timer.innerText = minutesText + ':' + secondsText;
                            } else {
                                timer.innerText = '00:00';
                            }
                        };
                        refreshTimer();
                        setInterval(refreshTimer, 999);
                    })()
                </script>
            </div>
        </div>
        <div class="container-fluid pb-5">
            <div class="row bgx pt-4">
                <div class="col-12 col-lg-4 s9pic text-center px-0 phone-wrap">
                    <div class="productContainer">
                        <img src="./images/product.png" class="product img-fluid prod-img w-75" />
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-10 offset-sm-0 offset-1 d-none d-md-block">
                                <h1 id="ivc3r">Kobalt 100-Piece Household Tool Set with Hard Case</h1>
                            </div>
                            <div class="col-md-6 col-10 offset-sm-0 offset-1 yellowText reviewStars d-none d-md-block">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star-half-alt"></i>
                            </div>
                            <div class="col-md-12">
                                <hr />
                            </div>
                            <div class="col-md-12 col-12 col-sm-10 offset-sm-1 offset-0 offset-md-0 stock">
                                <h3 class="redText"><span class="amountInStock"><i class="fa fa-exclamation-circle"></i>
                                    </span> in stock
                                </h3>
                            </div>
                            <div class="col-md-12 col-12 ChooseSize d-md-block">
                                <div class="row hidden-xs mx-0">
                                    <div class="col-md-12 descBullet">
                                        <ul class="product-des">

                                            <li>New and improved - our precise Pro90 ratchet with a 90-tooth gear
                                                delivers a 4 degree precision swing that offers improved mobility in
                                                tight work spaces</li>
                                            <li>Stored in a 4-drawer blow-molded tool chest for easy storage and
                                                transportation</li>
                                            <li>Sockets and wrenches are constructed from chrome vanadium steel for
                                                strength and durability</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 px-md-3 px-0">
                    <div class="container">
                        <div class="intro-form">
                            <div class="form-group form-header mb-md-3 mb-0">
                                <div class="col-md-12">
                                    <h3 id="iwbdp">Fill Out Your Details:</h3>
                                </div>
                            </div>
                            <div class="padding">
                                <div class="form-group d-flex">
                                    <div id="i5uqd" class="col-12 colorName">
                                        <p class="blueBg">Color:</p>
                                        <span id="colorName" class="yellowBg"> </span>
                                    </div>
                                </div>
                                <hr />
                                <div class="formdiv">
                                    <form method="post" action="ajax.php?method=new_prospect" name="prospect_form1"
                                        accept-charset="utf-8" enctype="application/x-www-form-urlencoded;charset=utf-8"
                                        class='new-form' id="theForm">
                                        <input type="hidden" name="campaignId" value="140">
                                        <div class="row">
                                            <div class="col pr-0">
                                                <div class="form-group">
                                                    <input required name="firstName" type="text"
                                                        placeholder="First Name " value=""
                                                        class="form-control form-control-xs required"
                                                        data-error-message="Please enter your first name!" />
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <input required name="lastName" type="text" placeholder="Last Name "
                                                        value="" class="form-control form-control-xs required"
                                                        data-error-message="Please enter your last name!" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input required name="email" type="email" placeholder="Email Address"
                                                value="" class="form-control form-control-xs required"
                                                data-error-message="Please enter a valid email id!" />
                                        </div>
                                        <div class="form-group">
                                            <input required name="phone" type="tel" placeholder="Phone Number" value=""
                                                class="form-control form-control-xs"
                                                data-error-message="Please enter a valid contact number!"
                                                data-min-length="14" data-max-length="14" />
                                        </div>
                                        <div class="form-group">
                                            <input required type='text' class="form-control form-control-xs required"
                                                name="address1" placeholder="Address"
                                                data-error-message="Please enter your address!" />
                                        </div>
                                        <div class="form-group">
                                            <input required type='text' class="form-control form-control-xs required"
                                                name="city" id="city" name="shippingCity" value="" placeholder="City"
                                                data-error-message="Please enter your city!" />
                                        </div>
                                        <div class="form-group">
                                            <select required name="country" id="shippingCountry"
                                                class="required form-control valid all-fields" data-selected="US"
                                                data-error-message="Please select your country!">
                                                <option value="US">US</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select name="state" type="text" placeholder="State"
                                                class="required input-flds form-control no-error" data-selected=""
                                                data-error-message="Please select your state!" readonly="readonly">
                                                <option value="" selected="selected">Select State</option>
                                                <option value="AL">Alabama</option>
                                                <option value="AK">Alaska</option>
                                                <option value="AZ">Arizona</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="CA">California</option>
                                                <option value="CO">Colorado</option>
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="DC">District of Columbia</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="ID">Idaho</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IN">Indiana</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NV">Nevada</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="OH">Ohio</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="OR">Oregon</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="TX">Texas</option>
                                                <option value="UT">Utah</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WA">Washington</option>
                                                <option value="WV">West Virginia</option>
                                                <option value="WI">Wisconsin</option>
                                                <option value="WY">Wyoming</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type='tel' required class="form-control form-control-xs required"
                                                id="zip" name="zip" placeholder="Zip code" maxlength="5"
                                                data-min-length="5" data-max-length="5" autocomplete="false"
                                                data-error-message="Please enter a valid Zip code!"
                                                onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g, '');" />
                                        </div>
                                        <div class="form-group"><button type="submit" id="submit-button" name="reg"
                                                class="btn btn-lg btn-success btn-block text-uppercase btnsubmit">Continue</button>
                                        </div>
                                        <div id="i4mqow"> </div>
                                        <p id="loading-indicator" style="display:none;">Processing...</p>
                                    </form>
                                    <div class="row secure-signup">
                                        <div class="col-4"><img src="./images/secure2.png" class="img-fluid" /></div>
                                        <div class="col-4"><img src="./images/secure3.png" class="img-fluid" /></div>
                                        <div class="col-4"><img src="./images/secure1.png" class="img-fluid" /></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="subfooter py-5">
        <div class="container text-center">
            <h1 id="iurwqg">Kobalt 100-Piece Household Tool Set with Hard Case</h1>
            <p class="text-center" style="font-Weight: 600;font-size: 14px;">Geared towards the DIY mechanic and
                automotive enthusiast, this general purpose tool set includes 2 ratchets, 2 extensions, 41 sockets, 1
                universal joint adapter, 19 combination wrenches, 3 adjustable wrenches, 5 pliers, 4 picks, 8 slotted
                screwdrivers, 5 Phillips screwdrivers, 6 Torx screwdrivers, a 4-way screwdriver, scratch awl, tack
                puller and bottle opener.</p>
            <br />
            <img src="./images/main.jpg" class="img-fluid" />
            <br /><br />
            <p style="font-Weight: 600;font-size: 14px;">Introducing the Kobalt 100-Piece Household Tool Set with Hard
                Case</p>
        </div>
    </section>

    <section id="footer">
        <div class="container">
            <div>
                <p class="py-5 text-center">Participate before it's too late!</p>
            </div>
            <div class="row justify-content-center">
                <p id="i27s8k" class="small"><a href="javascript:void(0);"
                        onclick="javascript:openNewWindow('page-terms.php', 'modal');" class="text-white">Terms &
                        Conditions</a> | <a href="javascript:void(0);"
                        onclick="javascript:openNewWindow('page-privacy.php', 'modal');" class="text-white">Privacy
                        Policy</a> | <a href="javascript:void(0);"
                        onclick="javascript:openNewWindow('page-contact.php', 'modal');" class="text-white">Contact
                        Us</a></p>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        var decline_reason = '<?= $decline_reason ?>';
        if (decline_reason != '') {
            //$('#myModal').show();
            $('#decline-modal .msg').html(decline_reason);
            var modal = document.getElementById("decline-modal");
            modal.style.display = "block";
        }
        $('.close').click(function () {
            $('#decline-modal').hide();
        })


    </script>

</body>

</html>