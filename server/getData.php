<?php

function getData($type, $queryString) {
//$api_key = '3OlR5AKFDPhrgSToQWqsa6JupmU1fZbc';
$api_key = '58ipm4TLHYoGhyeZ0NA2ngbW1PrafjcI';
$url = 'http://api.probasketballapi.com/' . $type;
$query_string = 'api_key=' . $api_key . $queryString;


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POSTFIELDS, $query_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$result = curl_exec($ch);

curl_close($ch);

return $result;

}

?>