
<?php 
include('models/sticky.php');
require('models/env.php');
class ProspectController extends Sticky{
    public static function new_prospect($request){
        
        return Sticky::curlApi(NEW_PROSPECT,$request);
    }

    public static function prospect_view($request){
        
        return Sticky::curlApi(PROSPECT_VIEW,$request);
    }

    public static function prospect_new_order($request){
        
        return Sticky::curlApi(NEW_ORDER,$request);
    }

    public static function new_upsell($request){
        
        return Sticky::curlApi(NEW_ORDER_CARD_ON_FILE,$request);
    }

  
}






?>