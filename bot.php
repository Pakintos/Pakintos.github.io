<?php

include('vender/autoload.php');
use Telegram\Bot\Api

$telegram = new Api('5694415530:AAHRFyPsjPkrwW2nx9xwA6yA8HO2E4_gt2c')';
$result = $telegram->getWebhookUpdates();

$text = $result["message"]["text"];
$chat_id = $result["message"]["chat"]["id"];
$name = $result["message"]["from"]["username"];
$first_name =$result["message"]["from"]["first_name"];
$last_name = $result["message"]["from"]["last_name"];

if($text == "/start"){
    $reply = "Fack Off";
    $telegram->sendMessage(['chat_id' => $chat_id,'text' => $reply]);
}
