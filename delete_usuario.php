<?php

//include ("functions/setup.php");
$con=mysqli_connect("localhost","root","root","enaexbom");

$sql="DELETE FROM usuarios WHERE nombre='".$_POST['fnombre']."' ";
mysqli_query($con,$sql);
//mysqli_query(conectar(),$sql);

header('Location:eliminar_usuario.php');





?>


