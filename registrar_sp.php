<?php
include ("functions/setup.php");

if(isset($_GET['sppro'])){

    $sql="DELETE FROM solicitud_pro  WHERE Id=".$_GET['sppro'];
        mysqli_query(conectar(),$sql);
        header('Location:crear_sp.php');
}
//$sql="INSERT INTO solicitud_pro SET rut_usu='".$_POST['frut']."',nombre_usu='".$_POST['fnombre']."',codigo_prod='".$_POST['sop']."',cantidad='".$_POST['fcantidad']."',estado=0,fecha_sp='".fechabd(fechahoy())."',descripcion='".$_post['des_sp']."'";
//mysqli_query(conectar(),$sql);



//header('Location:registrar_sp.php');

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
  //$sql="INSERT INTO solicitud_pro SET rut_usu='".$_POST['frut']."',nombre_usu='".$_POST['fnombre']."',codigo_prod='".$_POST['sop']."',cantidad='".$_POST['fcantidad']."',estado=0,fecha_sp='".fechabd(fechahoy())."',descripcion='".$_post['des_sp']."'";         
    $sql="INSERT INTO solicitud_pro SET rut_usu='".$_POST['frut']."',nombre_usu='".$_POST['fnombre']."',codigo_prod='".$_POST['sop']."',cantidad='".$_POST['fcantidad']."',estado=1,fecha_sp='".fechabd(fechahoy())."',descripcion='".$_post['des_sp']."' ";
    mysqli_query(conectar(),$sql);
    

    
    header('Location:crear_sp.php');

    if(isset($_GET['eliusu']))
    {
    $sql="DELETE FROM solicitud_pro  WHERE Id=".$_POST['idoc'];
        mysqli_query(conectar(),$sql);
        header('Location:crear_sp.php');
    }

}
function modificar()
{
    $sql="UPDATE   solicitud_pro SET codigo_prod='".$_POST['cod_pro']."',cantidad='".$_POST['fcantidad']."',estado=0,fecha_sp='".fechabd(fechahoy())."',descripcion='".$_post['des_sp']."'  WHERE Id=".$_POST['idoc'];
mysqli_query(conectar(),$sql);

header('Location:crear_sp.php');

}
function eliminar()
{
        $sql="DELETE FROM solicitud_pro  WHERE Id=".$_POST['idoc'];
        mysqli_query(conectar(),$sql);
        header('Location:crear_sp.php');


}
function cancelar()
{
    header('Location:crear_sp.php');
}
?>












