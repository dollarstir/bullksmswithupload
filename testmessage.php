
<?php

$key = "44d7a5066d1910a17515";  // Remember to put your own API Key here
$to = "02XXXXXXXX";
$msg = "Sending SMS has never been this fun!";
$sender_id = "XXXXXXXXXX"; //11 Characters maximum
$date_time = "2017-05-02 00:59:00";

//encode the message
$msg = urlencode($msg);

//prepare your url
$url = "https://apps.mnotify.net/smsapi?"
            . "key=$key"
            . "&to=$username"
            . "&msg=$message"
            . "&sender_id=$sender_id"
            . "&date_time=$date_time";
$response = file_get_contents($url) ;
//response contains the response from mNotify



// Bulk SMS


//defining the parameters
$key = "44d7a5066d1910a17515";  // Remember to put your own API Key here
$to = "02XXXXXXXX, 05XXXXXXXX"; //You only need to separate the contacts with commas
$msg = "Sending SMS has never been this fun!";
$sender_id = "XXXXXXXXXX"; //11 Characters maximum
$date_time = "2017-05-02 00:59:00";

//encode the message
$msg = urlencode($msg);

//prepare your url
$url = "https://apps.mnotify.net/smsapi?"
            . "key=$key"
            . "&to=$username"
            . "&msg=$message"
            . "&sender_id=$sender_id"
            . "&date_time=$date_time";
$response = file_get_contents($url) ;
//response contains the response from mNotify




// Credit usage

$key = "YOUR_API_KEY";  // Remember to put your own API Key here
$from = "2018-07-25 00:00:00";
$to = "2018-07-25 23:59:59";

//encode the message
$msg = urlencode($msg);

//prepare your url
$url = "https://apps.mnotify.net/smsapi/api_usage?"
            . "key=$key"
            . "&from=$from"
            . "&to=$to";
$response = file_get_contents($url) ;
//response contains the response from mNotify




?>