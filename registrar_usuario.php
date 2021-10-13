<?php

include ("functions/setup.php");

$sql="INSERT INTO usuario SET rut='".$_POST['frut']."',nombre='".$_POST['fnombre']."',appaterno='".$_POST['fappaterno']."',apmaterno='".$_POST['fapmaterno']."',usuario='".$_POST['fusuario']."',clave='".md5($_POST['fclave'])."',cargo='".$_POST['fcargo']."',estado='".$_POST['festado']."'";
mysqli_query(conectar(),$sql);

header('Location:formulario.php');


?>