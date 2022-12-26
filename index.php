<?php

$token = "5694415530:AAHRFyPsjPkrwW2nx9xwA6yA8HO2E4_gt2c";
$website = "https://api.telergram.org/bot".$token;
$web = "https://api.telegram.org/file/bot".$token;

$update = file_get_contents('php://input');
$update = json_decode($update,TRUE);

$chatID = $update['message']['from']['id'];
$firstname = $update['message']['from']['first_name'];
$username = $update['message']['from']['username'];
$text = $update['message']['text'];

switch($text)
{
        case"/start":
            sendMessage($chatID,"Привет $username");
        break;
        case"/Здравствуй":
            sendMessage($chatID,"Здравствуй $firstname");
        break;
}

function sendMessage($chatID,$text)
{
    $url = $GLOBALS[website]."/sendMessage?chat_id=$chatID&text=".urlencode(text);
    file_get_contents($url);
}    

