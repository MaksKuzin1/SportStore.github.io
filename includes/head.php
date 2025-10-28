<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../src/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <title>Sport Store</title>
  </head>
  
<?php
$date = new DateTime(datetime: 'NOW');
$hour = $date->format('G');
if ($hour < 8 || $hour >= 23) {
    echo"<body class='night_theme'>";
}else{
    echo"<body>";
}
ob_start();
?>