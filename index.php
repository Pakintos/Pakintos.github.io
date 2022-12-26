<?php

$data =json_decode(file_get_contents('php://input'), TRUE);
file_put_contents('file.txt','$data: '.print_r($data,1)."\n", FILE_APPEND);


//https://api.telegram.org/bot5694415530:AAHRFyPsjPkwW2nx9xwA6yA8HO2E4_gt2c/setwebhook?url=


$token = 'bot5694415530:AAHRFyPsjPkwW2nx9xwA6yA8HO2E4_gt2c';

$message = $data['message']['text'];

$params = [
    'chat_id' => $data['message']['chat']['id'],
    'text'    => $message
];

file_get_contents('https://api.telegram.org/bot'.$token.'/sendMessage?'.http_build_query($params));