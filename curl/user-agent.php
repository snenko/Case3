<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 12.08.2018
 * Time: 13:39
 */
$curl = curl_init("http://localhost/TestProject/curl/handler.php");

$useragent = "Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Gecko) 
              Version/5.0.2 Mobile/8J2 Safari/6533.18.5";
curl_setopt($curl, CURLOPT_USERAGENT,$useragent);

curl_exec($curl);

curl_close($curl);
