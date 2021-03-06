<?php

function httpsSend($url, $params = array(), $method = 'get')
{
    $ch = curl_init();
    if ($method == 'get') {
        $sParam = http_build_query($params);
        if (!empty($sParm)) {
            $url = $url . '?' . $sParam;
        }
    } else {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
    }

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 500);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}

$url = "http://api.medlive.test/adcms/ads";
$params = array('platform' => 2, 'branch' => 0, 'type' => 0, 'post' => 139604);
$headers = array('Api-Key:34819d7beeabb9260a5c854bc85b3e44');
$str = httpsSend($url, $params);
var_dump($str);
