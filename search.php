<?php 

//First get the players name using the api

//Include what I need to get players

//Once I get the players I need to put them on the autocomplete list

include_once('server/getData.php');
$query_string = '';

$my_json_list = getData('players', $query_string);

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
  <title>jQuery UI Autocomplete - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
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
</head>
<body>
 
<div class="ui-widget">
  <label for="tags">Tags: </label>
  <input id="tags">
</div>
 
 
</body>
</html>