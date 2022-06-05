<?php
include ("functions/setup.php");
//$con=mysqli_connect("localhost","root","root","enaexbom");
$sql="UPDATE INTO usuario SET rut='".$_POST['frut']."', nombre='".$_POST['fnombre']."', appaterno='".$_POST['fappaterno']."', apmaterno='".$_POST['fapmaterno']."',
clave='".md5($_POST['fclave'])."', usuario='".$_POST['fusuario']."', estado='".$_POST['festado']."', cargo='".$_POST['fcargo']."' ";
mysqli_query(conectar(),$sql);
header('Location:formulario.php');
?>