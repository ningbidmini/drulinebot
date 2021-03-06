<?php // callback.php

require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');

$access_token = 't6nhsSZ/UX3KKSqPFrzxKrtIHcb33+wM247a3coug+vkzDAsVWVd2rWzRHJEIkRY9zZCOXfYK97GTEgDJ+57FiVJOY7txZr9+BqEZMx+O2anNRYoSjm065cdVcYupBXV6YY1SYhf3SyNEAdowj5GqAdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			// $text = $event['source']['userId'];
			
			// $text = "AutoMessesge";
			switch($event['message']['text']){
				case 'hello':
				  $dataset = array(
				  'test1'=>'11111',
				  'test2'=>'22222',
				  );
					
				  //$text = json_encode($dataset);
				  $text = '<img src="https://e-portfolio.dru.ac.th/uploads/profile//3690/3690.jpg" />';
				break;
				default :
				  $text = 'Nothing';
				break;
			}
			
			
			
			
			// Get replyToken
			$replyToken = $event['replyToken'];

			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => $text
			];

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
		}
	}
}
echo "OK";
