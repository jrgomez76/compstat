<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>

<!-- Normalize -->
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css">
<!-- Boostrap CSS -->
<link rel="stylesheet" href="bootstrap-3.3.6/dist/css/bootstrap.min.css">
<!-- Styles -->
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Cabin:400,600" rel="stylesheet" type="text/css">
<!-- Bootstrap JavaScript -->
<script src="bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>
</head>


<body>

<?php

error_reporting(E_ALL);



include('server/getData.php');

//1610612748 -- miami team id

$current_month = date("m");
$current_year = date("Y");

$season = $current_year;

if ($current_month < 11){
	$season = $current_year - 1;
}

//echo "Season" . $season;


$teams = getData('boxscore/team',"&team_id=1610612748&season=$season");

echo $teams;

$json = json_decode($teams);

//var_dump($json);

$points_sum = 0;

$game_count = count($json);

for ($i=0; $i<$game_count;$i++){
	$points_sum = $points_sum + $json[$i]->points;
}
$points_avg = round($points_sum/$game_count,1);



echo "<p><strong>points_sum</strong></p>" . $points_sum;
echo "<p><strong>points_avg</strong></p>" . $points_avg;


/*
echo '<table class="table table-striped">';
for ($i=0; $i<count($json);$i++){
	echo "<tr>";
	echo "<td>" . " " . $json[$i]->team_id . $json[$i]->team_name.'</td>';
	echo "<tr>";

}
*/

echo "</table>";
?>



</body>
</html>








