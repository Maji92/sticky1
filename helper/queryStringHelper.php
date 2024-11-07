<?php 
    $QS_ARR = explode('&',$_SERVER["QUERY_STRING"]);
    array_shift($QS_ARR);
    $query_string = implode('&',$QS_ARR);
?>