<?php

$body = json_encode($_POST);
$body .= json_encode($_GET);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://b-kan.banana.co.th/persons/facescan',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $body,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: text/plain'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

?>
