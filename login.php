<?php // login.php

function Connect()
{
$hn = '127.0.0.1';
$un = 'root';
$pw = 'bishu1610';
$db = 'movieclub';


$mysqli = new mysqli( $hn , $un ,$pw, $db) or die($mysqli->connect_error);
   
 return $mysqli;
}

?>