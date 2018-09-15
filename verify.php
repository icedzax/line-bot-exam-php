<?php
$access_token = 'No9UgUHojZ5MXMEcdTL/2aPRER3MyxFCdlsgCf5AIYTyNSEQycop/fJ+eBOP4iLzT1UHczkQJWYSwLyzMEj0bSHC1Fu6ZdbnW5638pK31Qbi9vnBX4cBf8n1ALpZuSZB/8Ql3/x6bLO0f9KKh40WJwdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
