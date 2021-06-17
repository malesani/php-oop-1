<?php

require_once __DIR__ . '/classes/Movie.php';

$up = new Movie();
$up->name = "Up";
$up->genere = "avventura";
$up->durata = "due ore";
$up->voto = "10";

$loky = new Movie();
$loky->name = "Loky";
$loky->genere = "action";
$loky->durata = "un ora";
$loky->voto = "8";


var_dump($up);
var_dump($loky);
?>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Classi 1</h1>

</body>
</html>