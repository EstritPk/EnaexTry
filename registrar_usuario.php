<?php

include ("functions/setup.php");
//$con=mysqli_connect("localhost","root","root","enaexbom");
    if(isset($_GET['eliusu']))
    {
        $sql="DELETE FROM usuario  WHERE rut=".$_GET['eliusu'];
            mysqli_query(conectar(),$sql);
            header('Location:mantenedor_usuario.php');
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
    $sql="INSERT INTO usuario SET rut='".validarCaracteres($_POST['frut'])."', nombre='".validarCaracteres($_POST['fnombre'])."', appaterno='".validarCaracteres($_POST['fappaterno'])."', apmaterno='".validarCaracteres($_POST['fapmaterno'])."',
clave='".validarCaracteres(md5($_POST['fclave']))."', usuario='".validarCaracteres($_POST['fusuario'])."', estado='".$_POST['festado']."', cargo='".$_POST['fcargo']."' ";
mysqli_query(conectar(),$sql);
header('Location:mantenedor_usuario.php');

}
function modificar()
{
    $sql="UPDATE usuario SET rut='".validarCaracteres($_POST['frut'])."', nombre='".validarCaracteres($_POST['fnombre'])."', appaterno='".validarCaracteres($_POST['fappaterno'])."', apmaterno='".validarCaracteres($_POST['fapmaterno'])."',
    clave='".validarCaracteres(md5($_POST['fclave']))."', usuario='".validarCaracteres($_POST['fusuario'])."', estado='".validarCaracteres($_POST['festado'])."', cargo='".validarCaracteres($_POST['fcargo'])."' WHERE rut='".$_POST['idoc'];
mysqli_query(conectar(),$sql);

header('Location:mantenedor_usuario.php');


}
function eliminar()
{
        $sql="DELETE FROM usuario  WHERE rut=".$_POST['iusu'];
        mysqli_query(conectar(),$sql);
        header('Location:mantenedor_usuario.php');
}

function cancelar()
{
    header('Location:mantenedor_usuario.php');
}

?>