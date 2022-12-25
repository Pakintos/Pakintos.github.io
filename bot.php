<?php
$GET_IMPUT = file_get_contents('php://imput');

const TOKEN = '5694415530:AAHRFyPsjPkrwW2nx9xwA6yA8HO2E4_gt2c';

const API_URL = 'https://api.telegram.org/bot';

function printAnswer($str) {
    echo "<pre>";
    print_r($str);
    echo "</pre>";
}

function getTelegramApi($method,$options = null) {

    $str_request = API_URL . TOKEN . '/' . $method;

    if ($options) {
        $str_request .= '?' . http_build_query($options);
    }
$request = file_get_contents($str_request);
return json_decode($request, 1);
}

 function setHook($set = 1) {
 $url = 'htpps://' . $_SERVER ['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
 printAnswer(
    getTelegramApi('setWebhook' ,
         [
            'url' => $set?$url:''    
         ]
    )
 );
exit();
 }

 
 setHook(1); 



















