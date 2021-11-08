<?php

include ("functions/setup.php");
//$con=mysqli_connect("localhost","root","root","enaexbom");

$sql="INSERT INTO usuario SET rut='".$_POST['frut']."', nombre='".$_POST['fnombre']."', appaterno='".$_POST['fappaterno']."', apmaterno='".$_POST['fapmaterno']."',
clave='".md5($_POST['fclave'])."', usuario='".$_POST['fusuario']."', estado='".$_POST['festado']."', cargo='".$_POST['fcargo']."' ";
mysqli_query(conectar(),$sql);

header('Location:formulario.php');


if(isset($_GET['proeli']))
{
    $sql="DELETE FROM familia_pro  WHERE cod_pro=".$_GET['proeli'];
        mysqli_query(conectar(),$sql);
        header('Location:mantenedor_tipofamilia.php');
}


$op=$_POST['frmaccion'];

switch($op){
    case "Registrar": ingresar();
        break;
    case "Modificar":modificar();
        break;
    case "Eliminar": eliminar();
        break;
    case "Cancelar":cancelar();
        break;
}
function ingresar()
{                                            
    $sql="INSERT INTO familia_pro SET desc_pro='".$_POST['desc_pro']."', categoria='".$_POST['categoria']."' ";
mysqli_query(conectar(),$sql);

header('Location:mantenedor_tipofamilia.php');


}
function modificar()
{
    $sql="UPDATE   familia_pro SET desc_pro='".$_POST['desc_pro']."', categoria='".$_POST['categoria']."'  WHERE cod_pro=".$_POST['idoc'];
mysqli_query(conectar(),$sql);

header('Location:mantenedor_tipofamilia.php');

}
function eliminar()
{
        $sql="DELETE FROM familia_pro  WHERE cod_pro=".$_POST['idoc'];
        mysqli_query(conectar(),$sql);
        header('Location:mantenedor_tipofamilia.php');


}


?>
