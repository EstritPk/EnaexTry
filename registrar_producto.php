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
  
$sql="INSERT INTO producto SET cod_pro='".validarCaracteres($_POST['cod_pro'])."',nombre_pro='".validarCaracteres($_POST['nombre_pro'])."',desc_pro='".validarCaracteres($_POST['desc_pro'])."',tipo_pro='".$_POST['tipo_pro']."', foto='".$_FILES['foto']['name']."', modelo_pro='".validarCaracteres($_POST['modelo_pro'])."' , stock_pro='".validarCaracteres($_POST['stock_pro'])."' ";
mysqli_query(conectar(),$sql);

move_uploaded_file($_FILES['foto']['tmp_name'],"images/fotos/".$_FILES['foto']['name']);

header('Location:mantenedor_producto.php');

}
function modificar()
{
  $sql="UPDATE producto SET cod_pro='".validarCaracteres($_POST['cod_pro'])."',nombre_pro='".validarCaracteres($_POST['nombre_pro'])."',desc_pro='".validarCaracteres($_POST['desc_pro'])."',tipo_pro='".$_POST['tipo_pro']."', foto='".$_FILES['foto']['name']."', modelo_pro='".validarCaracteres($_POST['modelo_pro'])."' , stock_pro='".validarCaracteres($_POST['stock_pro'])."' WHERE cod_pro=".$_POST['idoc'];
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