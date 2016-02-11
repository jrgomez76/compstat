<?php
include_once('getData.php');
$query_string = '&first_name=Kevin&last_name=Durant';

echo getData('players', $query_string);