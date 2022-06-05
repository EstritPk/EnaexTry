<?php

include ("functions/setup.php");
//$con=mysqli_connect("localhost","root","root","enaexbom");
//descripcion='" . validarCaracteres($_POST['descripcion']) . "'

$sql="INSERT INTO usuario SET rut='".validarCaracteres($_POST['frutl'])."', nombre='".validarCaracteres($_POST['fnombrel'])."', appaterno='".validarCaracteres($_POST['fappaternol'])."', apmaterno='".validarCaracteres($_POST['fapmaternol'])."',
clave='".validarCaracteres(md5($_POST['fclavel']))."', usuario='".validarCaracteres($_POST['fusuariol'])."', estado='".$_POST['festadol']."', cargo='".$_POST['fcargol']."' ";
mysqli_query(conectar(),$sql);

header('Location:login.php');





?>