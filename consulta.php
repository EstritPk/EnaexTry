<?php

session_start();

include("functions/setup.php");


$sql="select * from usuario WHERE estado=1 ";
$result=mysqli_query(conectar(),$sql);
$cont=mysqli_num_rows($result);

while($datos=mysqli_fetch_array($result))
{
  echo $datos['nombre']." ".$datos['appaterno']." ".$datos['apmaterno']." <br>";
  
}





?>