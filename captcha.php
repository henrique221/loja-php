<?php
$params=['secret'=>'6LdjvFAUAAAAAEfRqKJGRqdboc93Oy05wufSvF70', 'response'=>$_POST['g-recaptcha-response']];

$defaults = array(
    CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify', 
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $params, 
    CURLOPT_RETURNTRANSFER => true
);

$ch = curl_init();
curl_setopt_array($ch, ($defaults));

$result = curl_exec($ch);
curl_close($ch);

$resultadoCaptcha = json_decode($result, true)['success'];
?>