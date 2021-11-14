<?php
include ("functions/setup.php");


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
    $sql="INSERT INTO solicitud_pro SET rut_usu='".$_POST['frut']."',nombre_usu='".$_POST['fnombre']."',codigo_prod='".$_POST['sop']."',cantidad='".$_POST['fcantidad']."',estado=0,fecha_sp='".fechabd(fechahoy())."',descripcion='".$_post['des_sp']."'";
    mysqli_query(conectar(),$sql);
    
    
    
    header('Location:crear_sp.php');

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











?>
