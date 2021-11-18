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
    $sql="INSERT INTO usuario SET rut='".$_POST['frut']."', nombre='".$_POST['fnombre']."', appaterno='".$_POST['fappaterno']."', apmaterno='".$_POST['fapmaterno']."',
clave='".md5($_POST['fclave'])."', usuario='".$_POST['fusuario']."', estado='".$_POST['festado']."', cargo='".$_POST['fcargo']."' ";
mysqli_query(conectar(),$sql);
header('Location:mantenedor_usuario.php');

}
function modificar()
{
    $sql="UPDATE usuario SET rut='".$_POST['frut']."', nombre='".$_POST['fnombre']."', appaterno='".$_POST['fappaterno']."', apmaterno='".$_POST['fapmaterno']."',
    clave='".md5($_POST['fclave'])."', usuario='".$_POST['fusuario']."', estado='".$_POST['festado']."', cargo='".$_POST['fcargo']."' WHERE rut='".$_POST['idoc'];
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