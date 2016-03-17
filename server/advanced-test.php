<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>

<?php

$url = 'http://api.probasketballapi.com/boxscore/team';

$api_key = '58ipm4TLHYoGhyeZ0NA2ngbW1PrafjcI';

$query_string = 'api_key='.$api_key.'&team_id=1610612748';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POSTFIELDS, $query_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$result = curl_exec($ch);

curl_close($ch);

echo $result;

?>
	
    
</body>
</html>