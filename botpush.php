<?php



require "vendor/autoload.php";

$access_token = 'No9UgUHojZ5MXMEcdTL/2aPRER3MyxFCdlsgCf5AIYTyNSEQycop/fJ+eBOP4iLzT1UHczkQJWYSwLyzMEj0bSHC1Fu6ZdbnW5638pK31Qbi9vnBX4cBf8n1ALpZuSZB/8Ql3/x6bLO0f9KKh40WJwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '1789e8bc95669ab24af96e8a4e4f1397';

$pushID = 'Ub65973176a23242757a998e46733ec43';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







