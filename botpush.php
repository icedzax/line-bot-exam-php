<?php



require "vendor/autoload.php";

$access_token = 'ZijJtDMIslEM2w2ZhCyOrcSMm9chVRZAHag8Jx5XsoaOog4qjjq+qP0uDKmaD349T1UHczkQJWYSwLyzMEj0bSHC1Fu6ZdbnW5638pK31QYxgiUl1myc20OSyEFf5lSnbF9HcRsPS8APHIH3EsM1LgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '0d22f8a5b97c6fb3a30a84394bad82fa';

$pushID = 'Ub65973176a23242757a998e46733ec43';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







