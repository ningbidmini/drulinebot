<?php



require "vendor/autoload.php";

$access_token = 't6nhsSZ/UX3KKSqPFrzxKrtIHcb33+wM247a3coug+vkzDAsVWVd2rWzRHJEIkRY9zZCOXfYK97GTEgDJ+57FiVJOY7txZr9+BqEZMx+O2anNRYoSjm065cdVcYupBXV6YY1SYhf3SyNEAdowj5GqAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '493caf971581994cd734bff2794796da';

// $pushID = 'U1c5dc7c1232c2412eeef8c1a04d60c9a';
$pushID = 'U59ebe160539adb67899e1d46f35e9ac7';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







