<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
  <style>
  .container{
    max-width:800px;
    margin:auto;
      background-color: #ccc;
      display: flex;
      flex-wrap: wrap;
      justify-content:center;
      width:100%;
     
  }

  h1{
      width:100%;
      background-color: #76D7C4;
      color:#138D75;
      padding: 10px;
      align-self:center;
      text-align:center;
  }
  h3{
    width:100%;
    color: #8E44AD;
    text-align:center;

  }
 
  
  </style>
</head>
<body>
<div class="container">
<?php

$nombre="Iara";
$apellido="Olivera";
$edad= 38;
$hobbie="pintar";
$editor_codigo_preferido="visual studio code";
$sistema_operativo="windows";


echo "<h1> Sistema para mostrar variables </h1>";

echo "<h3> Nombre: ".$nombre."</h3>";
echo "<h3> Apellido: ".$apellido."</h3>";
echo "<h3> Edad: ".$edad."</h3>";
echo "<h3> Hobbie: ".$hobbie."</h3>";
echo "<h3> Editor de código preferido: ".$editor_codigo_preferido."</h3>";
echo "<h3> Sistema Operativo: ".$sistema_operativo."</h3>";


?>
    </div>
</body>
</html>