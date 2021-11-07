<?php

$con=mysqli_connect("localhost","root","root","enaexbom");
include ("functions/setup.php");

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