<?php

$con=mysqli_connect("localhost","root","root","enaexbom");
include ("functions/setup.php");

if(isset($_GET['proeli']))
{
    $sql="DELETE FROM producto  WHERE cod_pro=".$_GET['proeli'];
        mysqli_query(conectar(),$sql);
        header('Location:mantenedor_producto.php');
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
  
$sql="INSERT INTO entrega SET cod_entrega='".$_POST['cod_entrega']."',nombre_pro='".$_POST['nombre_pro']."',c_entrega='".$_POST['c_entrega']."',fecha_entrega='".fechabd(fechahoy())."',nombre_receptor='".$_POST['nombre_receptor']."'";
mysqli_query(conectar(),$sql);


header('Location:entregas.php');

}
function modificar()
{
  $sql="UPDATE producto SET cod_pro='".$_POST['cod_pro']."',nombre_pro='".$_POST['nombre_pro']."',desc_pro='".$_POST['desc_pro']."',tipo_pro='".$_POST['tipo_pro']."', foto='".$_FILES['foto']['name']."', modelo_pro='".$_POST['modelo_pro']."' , stock_pro='".$_POST['stock_pro']."' WHERE cod_pro=".$_POST['idoc'];
  mysqli_query(conectar(),$sql);
  header('Location:mantenedor_producto.php');
}

function eliminar()
{
    $sql="DELETE FROM producto  WHERE cod_pro=".$_GET['idoc'];
    mysqli_query(conectar(),$sql);
    header('Location:mantenedor_producto.php');


}

function cancelar()
{
    header('Location:mantenedor_producto.php');
}
?> 