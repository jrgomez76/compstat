<?php 
//First get the players name using the api

//Include what I need to get players

//Once I get the players I need to put them on the autocomplete list

include_once('server/getData.php');
$query_string = '';

$my_json_list = getData('player', $query_string);

$my_player_list = json_decode($my_json_list);

//list to ,"value", "value", "value"
$js_list = "";
foreach ($my_player_list as $player) {
    $js_list .= ',"'.$player->player_name.'"';
}
   
 $js_list = substr($js_list, 1);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Search Player</title>

    <script src="javascript/prefixfree.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    
     <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
   <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    
    
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

<header>
<div class="site-container">
    <div class="site-pusher">
        <header class="header">
            <a href="#" class="header__icon" id="header__icon"></a>
            <a href="#" class="header__logo"><img style="max-width:160px; margin-top: -7px;" src="img/statlogo.png"></a>
            <nav class="menu">
                <a href="index.html">Home</a>
                <a href="search_player.php">Player Stat</a>
                <a href="search_teams.php">Team Stat</a>
                <a href="player_comparison.php">Comparision</a>
            </nav>
    </div>
</div>
</header>

 <div class="ui-widget">
  <label for="tags">Player Search: </label>
  <input id="tags">
</div>

<script>
  $(function() {
    var availableTags = [
     <?php echo $js_list; ?>
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  });
  </script>

  <script>
    $(document).ready(function() {

        (function($) {

            $('#header__icon').click(function(e) {
                e.preventDefault();
                $('body').toggleClass('with--sidebar');
            });

            $('#site-cache').click(function(e) {
                $('body').removeClass('with--sidebar');
            });

        })(jQuery);

    });
    </script>
 
 
</body>
</html>