
<?php
session_start();

include ("functions/setup.php");

$sql="select * from usuario where usuario='".$_POST['fusuario']."' and clave='".md5($_POST['fclave'])."' and estado=1";
$result=mysqli_query(conectar(),$sql);
$cont=mysqli_num_rows($result);
$datos=mysqli_fetch_array($result);

if($cont !=0)
{
    $_SESSION['user']=$datos['nombre']." ".$datos['appaterno']." ".$datos['apmaterno'];
    header("Location:home.php");  

}else{
    header("location:login.php?error");
}




?>