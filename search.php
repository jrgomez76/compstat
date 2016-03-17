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
  <title>jQuery UI Autocomplete - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">

<style>
html,
body{
  background-color: #01175F;
  font-family: sans-serif;
  color:white;
}

.p {
  text-align: center;
  padding-top: 130px;
}

.btn {
  height: 40px;
  border-radius: 0;
  width: 300px;
  background: #333;
  border: 1px solid #CCC;
  border-bottom: 3px solid #CCC;
  box-shadow: 0 2px 4px   rgba(0,0,0,0.15);
}

a {
  text-decoration: none;
  color: inherit;
}



/* HEADER */
.header {
  position: fixed;
  left: 0;
  right: 0;
  height: 66px;
  line-height: 66px;
  color: #fff;
  background-color: #333;
}



img .header_logo{
 display: block;
    margin-left: auto;
    margin-right: auto 

}

/* MENU */
.menu {
  float: left;
}
.menu a {
  padding: 0 10px;
}
.menu a:hover {
  color: #777474;
  text-decoration:none;
}

/* RESPONSIVE */
@media only screen and (max-width: 768px) {
  .site-pusher,
  .site-container {
    height: 100%;
  }

  .site-container {
    overflow: hidden;
  }

  .site-pusher {
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transform: translateX(0px);
    transform: translateX(0px);
  }

  .site-content {
    position: absolute;
    top: 66px;
    right: 0;
    left: 0;
    bottom: 0;
    padding-top: 0;
    overflow-y: scroll;
    -webkit-overflow-scrolling: touch;
  }

  .header {
    position: static;
  }

  .header__icon {
    position: relative;
    display: block;
    float: left;
    width: 50px;
    height: 66px;
    cursor: pointer;
  }
  .header__icon:after {
    content: '';
    position: absolute;
    display: block;
    width: 1rem;
    height: 0;
    top: 16px;
    left: 15px;
    box-shadow: 0 10px 0 1px #fff, 0 16px 0 1px #fff, 0 22px 0 1px #fff;
  }

  .menu {
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    background-color: #7A0000;
    width: 250px;
    -webkit-transform: translateX(-250px);
    transform: translateX(-250px);
  }
  .menu a {
    display: block;
    height: 40px;
    text-align: center;
    line-height: 40px;
    border-bottom: 1px solid #000000;
  }

  .with--sidebar .site-pusher {
    -webkit-transform: translateX(250px);
    transform: translateX(250px);
  }
  .with--sidebar .site-cache {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.6);
  }

  .ui-widget{
    padding-top: 20%:;
  }
}


</style>


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