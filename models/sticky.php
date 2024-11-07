<?php

class Sticky
{

    public static function curlApi($url,$postdata)
    {
       
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($postdata),
            CURLOPT_HTTPHEADER => array(
                'Accept: text/plain',
                'Content-Type: application/json',
                'Authorization: Basic '. base64_encode("code_dev_api:xNEHjxm49enRGM")
            ),
        )
        );

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response);

    }
}



