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

$current_month = date("m");     //THIS DEFINES SEASON (SINCE 1 SEASON = 2 DIFF YEARS)
$current_year = date("Y");

$season = $current_year;

if ($current_month < 11){
	$season = $current_year - 1;
}

//echo "Season" . $season;


$teams = getData('boxscore/team',"&team_id=1610612748&season=$season");   //SPECIFIES THE DATA TO GRAB FROM API

//echo $teams; //THIS HELPS TO CHECK STAT ABBREVIATIONS

$json = json_decode($teams);

//var_dump($json);

$fgm_sum = 0;     //THE BEGINING VALUE FOR ALL LOOP VARIABLES
$fga_sum = 0;
$pts_sum=0;
$oreb_sum=0;
$dreb_sum=0;
$fta_sum=0;
$ftm_sum=0;
$ast_sum=0;
$blk_sum=0;
$stl_sum=0;
$fg3a_sum=0;
$fg3m_sum=0;

$game_count = count($json);

for ($i=0; $i<$game_count;$i++){
	$fgm_sum = $fgm_sum + $json[$i]->fgm;     //PART OF THE LOOP
	$fga_sum = $fga_sum + $json[$i]->fga;
	$pts_sum = $pts_sum + $json[$i]->pts;
	$oreb_sum = $oreb_sum + $json[$i]->oreb;
	$dreb_sum = $dreb_sum + $json[$i]->dreb;
	$fta_sum = $fta_sum + $json[$i]->fta;
	$ftm_sum = $ftm_sum + $json[$i]->ftm;
	$ast_sum = $ast_sum + $json[$i]->ast;
	$blk_sum = $blk_sum + $json[$i]->blk;
	$stl_sum = $stl_sum + $json[$i]->stl;
	$fg3a_sum = $fg3a_sum + $json[$i]->fg3a;
	$fg3m_sum = $fg3m_sum + $json[$i]->fg3m;
}

$fgm_avg = round($fgm_sum/$game_count,1);   //THIS ROUNDS EACH NUMBER TO 1 DECIMAL
$fga_avg = round($fga_sum/$game_count,1);
$pts_avg = round($pts_sum/$game_count,1);
$oreb_avg = round($oreb_sum/$game_count,1);
$dreb_avg = round($dreb_sum/$game_count,1);
$fta_avg = round($fta_sum/$game_count,1);
$ftm_avg = round($ftm_sum/$game_count,1);
$ast_avg = round($ast_sum/$game_count,1);
$blk_avg = round($blk_sum/$game_count,1);
$stl_avg = round($stl_sum/$game_count,1);
$fg3a_avg = round($fg3a_sum/$game_count,1);
$fg3m_avg = round($fg3m_sum/$game_count,1);
?>

<div class="container-fluid player-stats-page">
	<div class="row player-stats-page-headerrow">
		<div class="col-sm-12 player-stats-page-headercol">
    		<img src="http://logok.org/wp-content/uploads/2015/01/NBA-logo.png">
        </div>    
    </div>
  
  
  <div class="row player-stats-page-row1">
  	<div class="col-sm-6 player-stats-page-personal-img" id="team-stats-page-personal-img">
    	<img src="img/heat-logo.png">
    </div>
    
    <div class="col-sm-6 player-stats-page-personal-info" id="team-stats-page-personal-info">
    	<div class="info-title">    	 
         	<p>LOCATION:</p> 
         	<p>ARENA:</p> 
         	<p>OWNER:</p> 
         	<p>COACH:</p>
        </div>
        <div class="info-title-info" id="team-info-title-info"> 
         	<p>Miami, FL</p>
         	<p>AA Arena</p>
         	<p>Mickey Arison</p>
         	<p>Erik Spolstra</p>
        </div>
    </div>
  </div>
    
  <div class="container-fluid">
    <div class="row player-stats-page-row2">
  		<div class="col-sm-12 player-stats-page-name" id="team-stats-page-name">
    		<p>MIAMI HEAT</p>
        </div>
   </div> 
   </div>
     	    
   
  <div class="row player-stats-page-row3">
   	<div class="col-sm-6 player-stats-page-stats">
    	<div class="stats-title-div"><p>POINTS</p></div>
        <div class="stats-div"><p><?php echo $pts_avg; ?></p></div>
    </div>
    
    <div class="col-sm-6 player-stats-page-stats">
    	<div class="stats-title-div"><p>ASSISTS</p></div>
        <div class="stats-div"><p><?php echo $ast_avg; ?></p></div>
    </div> 	 	
  </div>
   
  <div class="row player-stats-page-row3">
   	<div class="col-sm-6 player-stats-page-stats">
    	<div class="stats-title-div"><p>FGM</p></div>
        <div class="stats-div"><p><?php echo $fgm_avg; ?></p></div>
    </div>
    
    <div class="col-sm-6 player-stats-page-stats">
    	<div class="stats-title-div"><p>FGA</p></div>
        <div class="stats-div"><p><?php echo $fta_avg; ?></p></div>
    </div> 	 	
  </div>
   
   <div class="row player-stats-page-row3">
   	<div class="col-sm-6 player-stats-page-stats">
    	<div class="stats-title-div"><p>3PTM</p></div>
        <div class="stats-div"><p><?php echo $fg3m_avg; ?></p></div>
    </div>
    
    <div class="col-sm-6 player-stats-page-stats">
    	<div class="stats-title-div"><p>3PTA</p></div>
        <div class="stats-div"><p><?php echo $fg3a_avg; ?></p></div>
    </div> 	 	
   </div>
   
   <div class="row player-stats-page-row3">
   	<div class="col-sm-6 player-stats-page-stats">
    	<div class="stats-title-div"><p>OREB</p></div>
        <div class="stats-div"><p><?php echo $oreb_avg; ?></p></div>
    </div>
    
    <div class="col-sm-6 player-stats-page-stats">
    	<div class="stats-title-div"><p>DREB</p></div>
        <div class="stats-div"><p><?php echo $dreb_avg; ?></p></div>
    </div> 	 	
   </div>
   
   <div class="row player-stats-page-row3">
   	<div class="col-sm-6 player-stats-page-stats">
    	<div class="stats-title-div"><p>STEALS</p></div>
        <div class="stats-div"><p><?php echo $stl_avg; ?></p></div>
    </div>
    
    <div class="col-sm-6 player-stats-page-stats">
    	<div class="stats-title-div"><p>BLOCKS</p></div>
        <div class="stats-div"><p><?php echo $blk_avg; ?></p></div>
    </div> 	 	
   </div>
   


</body>
</html>








