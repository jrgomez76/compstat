<?php 
//First get the players name using the api

//Include what I need to get players

//Once I get the players I need to put them on the autocomplete list

include_once('server/getData.php');
$query_string = '';

$my_json_list = getData('team', $query_string);

$my_team_list = json_decode($my_json_list);

//list to ,"value", "value", "value"
$js_list = "";
foreach ($my_team_list as $team) {
    $js_list .= ',"'.$team->team_name.'"';
}
   
 $js_list = substr($js_list, 1);
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Autocomplete - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="george.css">




</head>
<body>

<div class="site-container">
  <div class="site-pusher">
    
    <header class="header">
      
      <a href="#" class="header__icon" id="header__icon"></a>
      <a href="#" class="header__logo"><img style="max-width:160px; margin-top: -7px;"
             src="img/statlogo.png"></a>


      
      <nav class="menu">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
      </nav>
      
    </header>

 <div class="ui-widget">
  <label for="tags">Tags: </label>
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
 
 
</body>
</html>