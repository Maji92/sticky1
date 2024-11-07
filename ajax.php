<?php
session_start();
include('controllers/prospectController.php');

if(!empty($_POST) && isset($_GET['method']) && $_GET['method'] == 'new_prospect' ){
    $form_data = $_POST;
    //print_r($form_data);die;
    //$form_data['ipAddress'] = $_SERVER['REMOTE_ADDR'];
    $form_data['ipAddress'] = '128.23.23.23';
    $_SESSION['userInfo'] = $form_data;
    $response =  ProspectController::new_prospect($form_data);
    //print_r($response);die;
    $_SESSION['new_prospect_response'] = $response;
    
    if($response->error_found == '0'){
        $_SESSION['userInfo']['prospectId'] = $response->prospectId;
        header('location:checkout.php?'.$_SERVER["QUERY_STRING"].'&prospect='.$response->prospectId);
    }else{
        header('location:index.php');
    }
    
}


if(!empty($_POST) && isset($_GET['method']) && $_GET['method'] == 'new_order_prospect' ){
    $form_data = $_POST;
    //$form_data['ipAddress'] = $_SERVER['REMOTE_ADDR'];
    $form_data['ipAddress'] = '128.23.23.23';
    $response =  ProspectController::prospect_view(array('prospect_id'=>$form_data['prospectId']));
    
    $request = [ 
        "firstName"=> $response->first_name,
        "lastName"=>$response->last_name,
        "billingFirstName"=> $response->first_name,
        "billingLastName"=>$response->last_name,
        "billingAddress1"=>$response->address,
        "billingAddress2"=>$response->address2,
        "billingCity"=>$response->city,
        "billingState"=>$response->city,
        "billingZip"=>$response->zip,
        "billingCountry"=>$response->country,
        "phone"=>$response->phone,
        "email"=>$response->email,
        "creditCardType"=>'VISA',
        "creditCardNumber"=>'1444444444444440',
        "expirationDate"=>"0628",
        "CVV"=>$form_data['CVV'],
        "shippingId"=>'30',
        "tranType"=>"Sale",
        "ipAddress"=>$response->ip_address,
        "campaignId"=>$response->campaign_id,
        "offers"=>
        [
          [
            "offer_id"=>$form_data['offer_id'],
            "product_id"=>$form_data['product_id'],
            "billing_model_id"=>$form_data['billing_model_id'],
            "quantity"=>$form_data['quantity'],
            
          ]
        ],
        "notes"=>"This is a test order using new_order",
        "AFID"=>"AFID",
        "SID"=>"SID",
        "AFFID"=>"AFFID",
        "C1"=>"C1",
        "C2"=>"C2",
        "C3"=>"C3",
        "AID"=>"AID",
        "OPT"=>"OPT",
        "click_id"=>"abc123",
        "billingSameAsShipping"=>"YES",
        "shippingAddress1"=>$response->address,
        "shippingAddress2"=>$response->address2,
        "shippingCity"=>$response->city,
        "shippingState"=>$response->state,
        "shippingZip"=>$response->zip,
        "shippingCountry"=>$response->country,
        "forceGatewayId"=>"",
        "preserve_force_gateway"=>"",
        "thm_session_id"=>"",
        "total_installments"=>"",
        "alt_pay_token"=>"",
        "alt_pay_payer_id"=>"",
        "secretSSN"=>"",
        "promoCode"=>"",
        "temp_customer_id"=>"",
        "three_d_redirect_url"=>"",
        "alt_pay_return_url"=>"",
        "sessionId"=>"",
        "cascade_override"=>"",
        "create_member"=>"",
        "event_id"=>"",
        "ssn_nmi"=>"",
        "utm_source"=>"source",
        "utm_medium"=>"medium",
        "utm_campaign"=>"campaign",
        "utm_content"=>"content",
        "utm_term"=>"term",
        "device_category"=>"mobile",
        "checkingAccountNumber"=>"",
        "checkingRoutingNumber"=>"",
        "sepa_iban"=>"",
        "sepa_bic"=>"",
        "eurodebit_acct_num"=>"",
        "eurodebit_route_num"=>"",
        "referrer_id" => "ABCD1234",
        "conversion_id"  => "addc703c-6ffd-11e8-a1ea-12f0b4779fbe",
        "cavv"  => "BwABAwJoEAAAAABhdWgQAAAAAAA=",
        "eci"  => "06",
        "xid"  => "YmUyMnFoMmJpbHM1aGJzNjd2MGc="
    ];
    // echo '<pre>';
    // print_r($request);die;
    $order_response =  ProspectController::prospect_new_order($request);
    $_SESSION['order_response'] = $order_response;
    if($order_response->error_found == '0'){
        header('location:upsell1.php?'.$_SERVER["QUERY_STRING"].'&orderId='.$order_response->order_id);
    }else{
        header('location:index.php');
    }
    
}

if(!empty($_POST) && isset($_GET['method']) && $_GET['method'] == 'new_upsell' ){
    $form_data = $_POST;
    $form_data['ipAddress'] = $_SERVER['REMOTE_ADDR'];
    $request =  [
            "previousOrderId"=>$form_data['previousOrderId'],
            "shippingId"=>'30',
            "ipAddress"=>$form_data['ipAddress'],
            "campaignId"=>"140",
            "offers"=>
            [
                [
                    "offer_id"=>$form_data['offer_id'],
                    "product_id"=>$form_data['product_id'],
                    "billing_model_id"=>$form_data['billing_model_id'],
                    "quantity"=>$form_data['quantity'],
                    "step_num"=>$form_data['step_num']
                ]
            ],
            "notes"=>"This is a test order using new_order_card_on_file",  
        ];
   
    $response =  ProspectController::new_upsell($request);
    $_SESSION['upsell'] = $response;
    
    if($response->error_found == '0'){
        header('location:thank-you.php?'.$_SERVER["QUERY_STRING"].'&prospect='.$response->prospectId);
    }else{
        header('location:upsell1.php');
    }
    
}

?>