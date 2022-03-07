<?php



   
    function sendMessage($key,$numbers,$message,$sender)
    {

        $endpoint = 'https://apps.mnotify.net/smsapi';
        $url = $endpoint . "?key=" . $key . "&to=" . $numbers . "&msg=" . $message . "&sender_id=" . $sender;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        $result = curl_exec($ch);
        curl_close ($ch);
        return interpret($result);
    }

    function interpret($code)
    {
        $status = '';
        switch ($code) {
            case '1000':
                $status = 'Messages has been sent successfully';
                return $status;
                break;
            case '1002':
                $status = 'SMS sending failed. Might be due to server error or other reason';
                return $status;
                break;
            case '1003':
                $status = 'Insufficient SMS credit balance';
                return $status;
                break;
            case '1004':
                $status = 'Invalid API Key';
                return $status;
                break;
            case '1005':
                $status = 'Invalid recipient\'s phone number';
                return $status;
                break;
            case '1006':
                $status = 'Invalid sender id. Sender id must not be more than 11 characters. Characters include white space';
                return $status;
                break;
            case '1007':
                $status = 'Message scheduled for later delivery';
                return $status;
                break;
            case '1008':
                $status = 'Empty Message';
                return $status;
                break;
            default:
                return $status;
                break;
        }
    }
