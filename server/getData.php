<?php

function getData($type, $queryString) {
$api_key = 'ow43IvuEHqcSa7LsOVUpfk5Y6Zg8zBMA';
$url = 'https://probasketballapi.com/' . $type;
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