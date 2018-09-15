<?php
$access_token = 'ZijJtDMIslEM2w2ZhCyOrcSMm9chVRZAHag8Jx5XsoaOog4qjjq+qP0uDKmaD349T1UHczkQJWYSwLyzMEj0bSHC1Fu6ZdbnW5638pK31QYxgiUl1myc20OSyEFf5lSnbF9HcRsPS8APHIH3EsM1LgdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
