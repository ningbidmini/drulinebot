<?php


$access_token = 't6nhsSZ/UX3KKSqPFrzxKrtIHcb33+wM247a3coug+vkzDAsVWVd2rWzRHJEIkRY9zZCOXfYK97GTEgDJ+57FiVJOY7txZr9+BqEZMx+O2anNRYoSjm065cdVcYupBXV6YY1SYhf3SyNEAdowj5GqAdB04t89/1O/w1cDnyilFU=';

// $userId = 'U1c5dc7c1232c2412eeef8c1a04d60c9a';
$userId = 'U59ebe160539adb67899e1d46f35e9ac7';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

