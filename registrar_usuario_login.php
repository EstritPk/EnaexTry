<?php

include ("functions/setup.php");
//$con=mysqli_connect("localhost","root","root","enaexbom");

$sql="INSERT INTO usuario SET rut='".$_POST['frutl']."', nombre='".$_POST['fnombrel']."', appaterno='".$_POST['fappaternol']."', apmaterno='".$_POST['fapmaternol']."',
clave='".md5($_POST['fclavel'])."', usuario='".$_POST['fusuariol']."', estado='".$_POST['festadol']."', cargo='".$_POST['fcargol']."' ";
mysqli_query(conectar(),$sql);

header('Location:login.php');





?>