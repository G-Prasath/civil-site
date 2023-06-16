<?php
$email = "guruprasathmsc@gmail.com";
$name = "Send B";
$body = "Hello won <br><br> How Are You";
$subject = "Test Email";

$headers = array(
    'Authorization: Bearer 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',
    'Content-Type: application/json'
); 
$data = {
    "personalizations": [{
        "to": [{
            "email": "recipient@example.com"
        }]
    }],
    "from": {
        "email": "sendeexampexample@example.com"
    },
    "subject": "Hello, World!",
    "content": [{
        "type": "text/plain",
        "value": "Heya!"
    }]
};


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);

echo $response;

?>