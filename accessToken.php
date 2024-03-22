<?php
//YOUR MPESA API KEYS
$consumerKey="puni2KmSfG1hlBuVai2AzKVeprXOk4J0l5H64VnjuX0UXCxD";
$consumerSecret="WWiunUiDuQsgtYShDAAYGkcT5XGz0Q26ADjqfJa5uq8GxKnBhi1ECLUAzQDJmeSA";

//ACCESS TOKEN URL
$access_token_url ="https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials";
$headers = ['Content-Type:application/json; charset=utf8'];
$curl = curl_init($access_token_url);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_HEADER, FALSE);
curl_setopt($curl, CURLOPT_USERPWD, $consumerKey . ':' . $consumerSecret);
$result = curl_exec($curl);
$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
echo $result;

//$result = json_decode($result);
//echo $access_token = $result ->access_token;
curl_close($curl);