<?php

require("wconfig.php");
$db=mysqli_connect($dbhost, $dbuser, $dbpassword, $dbdatabase);
?>

<!DOCTYPE html>
<html>

<head>


    <title>Kriti</title>
    
    <link rel="stylesheet" href="blog.css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="jquery.fittext.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
  <script src="thumbnail-slider.js" type="text/javascript"></script>



<!--accordion script-->
<script>
  console.log("header");
  $( function() {

    $( "#accordion" ).accordion();
  } );
  </script>


</head>



<div id="main">
