<?php
$access_token = 't6nhsSZ/UX3KKSqPFrzxKrtIHcb33+wM247a3coug+vkzDAsVWVd2rWzRHJEIkRY9zZCOXfYK97GTEgDJ+57FiVJOY7txZr9+BqEZMx+O2anNRYoSjm065cdVcYupBXV6YY1SYhf3SyNEAdowj5GqAdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
