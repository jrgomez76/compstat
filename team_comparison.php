<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

<!-- Normalize -->

<!-- Boostrap CSS -->
<link rel="stylesheet" href="bootstrap-3.3.6/dist/css/bootstrap.min.css">
<!-- Styles -->

<link href="https://fonts.googleapis.com/css?family=Cabin:400,600" rel="stylesheet" type="text/css">
<!-- Bootstrap JavaScript -->
<script src="bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="george.css">
<link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
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




$teams = getData('boxscore/team',"&team_id=1610612748&season=$season");

//echo $teams;

$json = json_decode($teams);

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
$pts_avg = round($pts_sum/$game_count,2);
$ast_avg = round($ast_sum/$game_count,2);
$fgm_avg = round($fgm_sum/$game_count,2);
$fga_avg = round($fga_sum/$game_count,2);
$min_avg = round($min_sum/$game_count,2);
$stl_avg = round($stl_sum/$game_count,2);
$oreb_avg = round($oreb_sum/$game_count,2);
$dreb_avg = round($dreb_sum/$game_count,2);
$plus_minus_avg = round($plus_minus_sum/$game_count,2);






?>


<?php


error_reporting(E_ALL);





//1610612748 -- miami team id

$current_month = date("m");
$current_year = date("Y");

$season = $current_year;

if ($current_month < 11){
	$season = $current_year - 1;
}




$teams = getData('boxscore/team',"&team_id=1610612766&season=$season");

//echo $teams;

$json = json_decode($teams);

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
$pts_avg1 = round($pts_sum/$game_count,2);
$ast_avg1 = round($ast_sum/$game_count,2);
$fgm_avg1 = round($fgm_sum/$game_count,2);
$fga_avg1 = round($fga_sum/$game_count,2);
$min_avg1 = round($min_sum/$game_count,2);
$stl_avg1 = round($stl_sum/$game_count,2);
$oreb_avg1 = round($oreb_sum/$game_count,2);
$dreb_avg1 = round($dreb_sum/$game_count,2);
$plus_minus_avg1 = round($plus_minus_sum/$game_count,2);






?>



<header>
<div class="site-container">
    <div class="site-pusher">
        <header class="header">
            <a href="#" class="header__icon" id="header__icon"></a>
            <a href="#" class="header__logo"><img style="max-width:160px; margin-top: -7px;" src="img/statlogo.png"></a>
            <nav class="menu">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Contact</a>
            </nav>
    </div>
</div>
</header>
  
    <div class="container">
    <div class="row">
  <div class="col-xs-6 teamlogoA">
  <img src="http://logok.org/wp-content/uploads/2015/01/Miami-Heat-logo.png"
  class="img-responsive">
  </div>
  <div class="col-xs-6 teamlogoB"><img src="http://i39.tinypic.com/5nufrl.png"
  class="img-responsive"></div>
</div>
</div>

    <div class="row row-playernames">
  <div class="col-xs-6 playernameA">
 <h1>Miami Heat</h1>
  </div>
  <div class="col-xs-6 playernameB">
  <h1>Golden State</h1>
  </div>
</div>


<div class="row row-winsandloses">
    
    <div class="col-xs-3 home-wins">
    	<div class="title-home-wins"><p>W</p></div>
    </div>
    
    <div class="col-xs-3 home-loses">
   	 	<div class="title-home-loses"><p>L</p></div>
  	  
    </div>
       
    <div class="col-xs-3 away-wins">
    	<div class="title-away-wins"><p>W</p></div>
   		
    </div>
    
    <div class="col-xs-3 away-loses">
    	<div class="title-away-loses"><p>L</p></div>
  	  	
    </div>
    </div>
    
    
    
    <div class="row row-actualwinsandloses">
    
    <div class="col-xs-3 ahome-wins">
    	<div class="home-wins"><p>13</p></div>
    </div>
    
    <div class="col-xs-3 ahome-loses">
   	 	<div class="home-loses"><p>13</p></div>
  	  
    </div>
       
    <div class="col-xs-3 aaway-wins">
    	<div class="away-wins"><p>14</p></div>
   		
    </div>
    
    <div class="col-xs-3 aaway-loses">
    	<div class="away-loses"><p>10</p></div>
  	  	
    </div>
    </div>







<!--AVG POINTS PER GAME-->

    <div class="row row-pointspergame">
  		<div class="col-xs-6 ppgA">
  			<div class="title-home-points-per-game"><p>Average Points Per Game</p></div>
 			 </div>
             
  		<div class="col-xs-6 ppgB">
        	<div class="title-away-points-per-game"><p>Average Points Per Game</p></div>
        </div>
			</div>
            
            
            
       <div class="row row-actualpointspergame">
       <div class="col-xs-6 appgA">
       <div class="home-points-per-game"><p><?php echo $pts_avg;?></p></div>
       </div>
       <div class="col-xs-6 appgB">
       <div class="away-points-per-game"><p><?php echo  $pts_avg1;?></p></div>
       </div>
       </div>
    
<!--FIELD GOAL MADE AVG-->   
    
     <div class="row row-fgmpergame">
  <div class="col-xs-6 rpgA">
  		<div class="title-home-rebounds-per-game"><p>Average Field Goals Made</p></div>
 	
        </div>
  <div class="col-xs-6 rpgB ">
  		<div class="title-away-rebounds-per-game"><p>Average Field Goals Made</p></div>
 		
  </div>
</div>


 <div class="row row-actualfgmpergame">
  <div class="col-xs-6 arpgA">
  		
 		<div class="home-rebounds-per-game"><p><?php echo  $fgm_avg;?></p></div>
        </div>
  <div class="col-xs-6 arpgB ">
  		
 		<div class="away-rebounds-per-game"><p><?php echo  $fgm_avg1;?></p></div>
  </div>
</div>
      
      
<!--FIELD GOAL ATTEMPT AVG-->    
       <div class="row row-fieldgoalpercentage">
  <div class="col-xs-6 fgpgA">
  		<div class="title-home-fg-per-game"><p> Average Field Goals attempted</p></div>
 		
  </div>
  <div class="col-xs-6 fpgB ">
  		<div class="title-away-fg-per-game"><p> Average Field Goal attempted</p></div>
 		
   </div>
</div>    
    
    
   <div class="row row-actualfieldgoalpercentage">
  <div class="col-xs-6 afgpgA">
  		<div class="home-fg-per-game"><p><?php echo  $fga_avg;?></p></div>
  </div>
  <div class="col-xs-6 afpgB ">
 		<div class="away-fg-per-game"><p><?php echo  $fga_avg1;?></p></div>
   </div>
</div> 
    
<!--MINUTES PER GAME-->     
   		<div class="row row-mnspergame">
  	<div class="col-xs-6 apgA">
    	<div class="title-home-assists-per-game"><p> Average Minutes Per Game</p></div>
 		
        </div>
    <div class="col-xs-6 apgB ">
       <div class="title-away-assists-per-game"><p> Average Minutes Per Game</p></div>
 		
       </div>
</div>


	
    	<div class="row row-actualmnspergame">
  	<div class="col-xs-6 aapgA">
    	
 		<div class="home-assists-per-game"><p><?php echo $min_avg;?></p></div>
        </div>
    <div class="col-xs-6 aapgB ">
       
 		<div class="away-assists-per-game"><p><?php echo $min_avg1;?></p></div>
       </div>
</div>

<!--STEALS PER GAME-->

   
    <div class="row row-stlpergame">
  <div class="col-xs-6 bgA">
  		<div class="title-home-blocks-per-game"><p>Average Steals Per Game</p></div>
 		
  </div>
  
  <div class="col-xs-6 bgB ">
  		<div class="title-away-blocks-per-game"><p>Average Steals Per Game</p></div>
 	
  
  </div>
</div>



 <div class="row row-actualstlpergame">
  <div class="col-xs-6 abgA">
  		
 		<div class="home-blocks-per-game"><p><?php echo $stl_avg;?></p></div>
  </div>
  
  <div class="col-xs-6 abgB ">
  		
 		<div class="away-blocks-per-game"><p><?php echo $stl_avg1;?></p></div>
  
  </div>
</div>





<!--AVG OFFENSIVE REBOUNDS PER GAME-->

   
    <div class="row row-ofreb">
  <div class="col-xs-6 bgA">
  		<div class="title-home-blocks-per-game"><p>Average off-rebounds Per Game</p></div>
 		
  </div>
  
  <div class="col-xs-6 bgB ">
  		<div class="title-away-blocks-per-game"><p>Average off-rebounds Per Game</p></div>
 	
  
  </div>
</div>



 <div class="row row-actualofreb">
  <div class="col-xs-6 abgA">
  		
 		<div class="home-blocks-per-game"><p><?php echo $oreb_avg;?></p></div>
  </div>
  
  <div class="col-xs-6 abgB ">
  		
 		<div class="away-blocks-per-game"><p><?php echo $oreb_avg1;?></p></div>
  
  </div>
</div>
    
<!--AVG DEFFENSIVE REBOUNDS PER GAME-->

   
    <div class="row row-dfreb">
  <div class="col-xs-6 bgA">
  		<div class="title-home-blocks-per-game"><p>Average def-rebounds Per Game</p></div>
 		
  </div>
  
  <div class="col-xs-6 bgB ">
  		<div class="title-away-blocks-per-game"><p>Average def-rebounds Per Game</p></div>
 	
  
  </div>
</div>



 <div class="row row-actualdfreb">
  <div class="col-xs-6 abgA">
  		
 		<div class="home-blocks-per-game"><p><?php echo $dreb_avg;?></p></div>
  </div>
  
  <div class="col-xs-6 abgB ">
  		
 		<div class="away-blocks-per-game"><p><?php echo $dreb_avg1;?></p></div>
  
  </div>
</div>
    
    
    
    
<!--AVG ASSISTS PER GAME-->

   
    <div class="row row-ast">
  <div class="col-xs-6 bgA">
  		<div class="title-home-blocks-per-game"><p>Average Assists Per Game</p></div>
 		
  </div>
  
  <div class="col-xs-6 bgB ">
  		<div class="title-away-blocks-per-game"><p>Average Assists Per Game</p></div>
 	
  
  </div>
</div>



 <div class="row row-actualast">
  <div class="col-xs-6 abgA">
  		
 		<div class="home-blocks-per-game"><p><?php echo $ast_avg;?></p></div>
  </div>
  
  <div class="col-xs-6 abgB ">
  		
 		<div class="away-blocks-per-game"><p><?php echo $ast_avg1;?></p></div>
  
  </div>
</div> 


<!--AVG PLUS MINUS PER GAME-->

   
    <div class="row row-pm">
  <div class="col-xs-6 bgA">
  		<div class="title-home-blocks-per-game"><p>Average + - Per Game</p></div>
 		
  </div>
  
  <div class="col-xs-6 bgB ">
  		<div class="title-away-blocks-per-game"><p>Average + - Per Game</p></div>
 	
  
  </div>
</div>



 <div class="row row-actualpm">
  <div class="col-xs-6 abgA">
  		
 		<div class="home-blocks-per-game"><p><?php echo  $plus_minus_avg;?></p></div>
  </div>
  
  <div class="col-xs-6 abgB ">
  		
 		<div class="away-blocks-per-game"><p><?php echo  $plus_minus_avg1;?></p></div>
  
  </div>
</div>   
    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  </body>
</html>