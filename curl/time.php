<?php
/**
 * Created by PhpStorm.
 * User: drser
 * Date: 12.08.2018
 * Time: 12:33
 */
$curl = curl_init("http://ntp.time.in.ua:13");
echo curl_exec($curl);
curl_close($curl);