<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<!-- Normalize -->
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css">
<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
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

$player_id = $_GET["id"];

//1610612748 -- miami team id

$current_month = date("m");
$current_year = date("Y");

$season = $current_year;

if ($current_month < 11){
$season = $current_year - 1;
}




$players = getData('boxscore/player',"&player_id=$player_id&season=$season");

//echo $players;

$json = json_decode($players);

//var_dump($json);

$fgm_sum = 0;
$fga_sum = 0;
$min_sum = 0;
$pts_sum = 0;
$ast_sum = 0;
$stl_sum = 0;
$oreb_sum = 0;
$dreb_sum = 0;
$plus_minus_sum = 0;

$game_count = count($json);

for ($i=0; $i<$game_count;$i++){
$pts_sum = $pts_sum + $json[$i]->pts;
$ast_sum = $ast_sum + $json[$i]->ast;
$fgm_sum = $fgm_sum + $json[$i]->fgm;
$fga_sum = $fga_sum + $json[$i]->fga;
$min_sum = $min_sum + $json[$i]->min;
$stl_sum = $stl_sum + $json[$i]->stl;
$oreb_sum = $oreb_sum + $json[$i]->oreb;
$dreb_sum = $dreb_sum + $json[$i]->dreb;
$plus_minus_sum = $plus_minus_sum + $json[$i]->plus_minus;
}
$pts_avg = round($pts_sum/$game_count,1);
$ast_avg = round($ast_sum/$game_count,1);
$fgm_avg = round($fgm_sum/$game_count,1);
$fga_avg = round($fga_sum/$game_count,1);
$min_avg = round($min_sum/$game_count,1);
$stl_avg = round($stl_sum/$game_count,1);
$oreb_avg = round($oreb_sum/$game_count,1);
$dreb_avg = round($dreb_sum/$game_count,1);
$plus_minus_avg = round($plus_minus_sum/$game_count,1);
?>



<div class="container-fluid player-stats-page">
	<div class="row player-stats-page-headerrow">
		<div class="col-sm-12 player-stats-page-headercol">
    		<img src="http://logok.org/wp-content/uploads/2015/01/NBA-logo.png">
        </div>    
    </div>
  
  
  <div class="row player-stats-page-row1">
  	<div class="col-sm-6 player-stats-page-personal-img">
    	<img src="img/wade.png">
    </div>
    
    <div class="col-sm-6 player-stats-page-personal-info">
    	<div class="info-title">    	 
         	<p>POSITION:</p> 
         	<p>HEIGHT:</p> 
         	<p>WEIGHT:</p> 
         	<p>DOB:</p>
        </div>
        <div class="info-title-info"> 
         	<p>SG</p>
         	<p>6'4"</p>
         	<p>210</p>
         	<p>1/17/88</p>
        </div>
       </div>
   </div>
    
	<div class="row player-stats-page-row2">
  		<div class="col-sm-4 player-stats-page-name">
    		<div class="name-banner" id="bannernumber"><p>#6</p></div>
        	<div class="name-banner" id="bannername"><p>DWYANE WADE</p></div>
        	<div class="name-banner" id="bannerlogo"><p><img src="http://content.sportslogos.net/logos/6/214/thumbs/93lzfcfcnq125eh7etyxpuhfp.gif"></p></div>
    	</div>
   </div> 
     	    
   
   <div class="row player-stats-page-row3">
   	<div class="col-sm-6 player-stats-page-stats left">
    	<div class="stats-title-div"><p>POINTS</p></div>
        <div class="stats-div"><p><?php echo $pts_avg; ?></p></div>
    </div>
    
    <div class="col-sm-6 player-stats-page-stats right">
    	<div class="stats-title-div"><p>ASSISTS</p></div>
        <div class="stats-div"><p><?php echo $ast_avg; ?></p></div>
    </div> 	 	
   </div>
   
   <div class="row player-stats-page-row3">
   	<div class="col-sm-6 player-stats-page-stats left">
    	<div class="stats-title-div"><p>FGM</p></div>
        <div class="stats-div"><p><?php echo $fgm_avg; ?></p></div>
    </div>
    <div class="col-sm-6 player-stats-page-stats right">
    	<div class="stats-title-div"><p>FGA</p></div>
        <div class="stats-div"><p><?php echo $fga_avg; ?></p></div>
    </div> 	 	
   </div>
   
   <div class="row player-stats-page-row3">
   	<div class="col-sm-6 player-stats-page-stats left">
    	<div class="stats-title-div"><p>MIN</p></div>
        <div class="stats-div"><p><?php echo $min_avg; ?></p></div>
    </div>
    <div class="col-sm-6 player-stats-page-stats right">
    	<div class="stats-title-div"><p>STL</p></div>
        <div class="stats-div"><p><?php echo $stl_avg; ?></p></div>
    </div> 	 	
   </div>
   
   <div class="row player-stats-page-row3">
   	<div class="col-sm-6 player-stats-page-stats left">
    	<div class="stats-title-div"><p>OREB</p></div>
        <div class="stats-div"><p><?php echo $oreb_avg; ?></p></div>
    </div>
    <div class="col-sm-6 player-stats-page-stats right">
    	<div class="stats-title-div"><p>DREB</p></div>
        <div class="stats-div"><p><?php echo $dreb_avg; ?></p></div>
    </div> 	 	
   </div>
   
   <!--<div class="row player-stats-page-row3">
   	<div class="col-sm-6 player-stats-page-stats left">
    	<div class="stats-title-div"><p>dreb</p></div>
        <div class="stats-div"><p><?php echo $pts_dreb; ?></p></div>
    </div>
    <div class="col-sm-6 player-stats-page-stats right">
    	<div class="stats-title-div"><p>PLUS</p></div>
        <div class="stats-div"><p><?php echo $pts_PLUS; ?></p></div>
    </div> 	 	
   </div>-->
   
   <div class="row player-stats-page-row5">
		<div class="col-sm-12 player-stats-page-compplayer">
    		<p>Comparable Players</p>
        </div>    
    </div>
   
   <div class="row player-stats-page-row4">
   	<div class="col-sm-4 player-stats-page-comp">
    	<img src="https://s1.yimg.com/bt/api/res/1.2/c6cglbLBVCXnmVIukSVGEA--/YXBwaWQ9eW5ld3NfbGVnbztpbD1wbGFuZTtxPTc1O3c9NjAw/http://media.zenfs.com/en/person/Ysports/kobe-bryant-basketball-headshot-photo.jpg">
        <img src="http://l2.yimg.com/bt/api/res/1.2/L5_XRRG75KqoXlmoz5cp9Q--/YXBwaWQ9eW5ld3NfbGVnbztpbD1wbGFuZTtxPTc1O3c9NjAw/http://media.zenfs.com/en/person/Ysports/jimmy-butler-basketball-headshot-photo.jpg">
        <img src="http://l2.yimg.com/bt/api/res/1.2/PUaS1RT2fFVeoogSwns8MA--/YXBwaWQ9eW5ld3NfbGVnbztpbD1wbGFuZTtxPTc1O3c9NjAw/http://media.zenfs.com/en/person/Ysports/james-harden-basketball-headshot-photo.jpg">
        
    </div> 	 	
   </div>
   
</div>
</body>
</html>
