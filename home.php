<?php
 
session_start();

if(isset($_SESSION['user']))
{
?>
 
<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Formularios</title>
            <link rel="stylesheet" href="css/estilo_formulario.css">
            <link rel="stylesheet" href="css/estilo_home.css">
        </head>
        <body>
            <div id="session">
            <h2>Bienvenido   <b><?php echo strtoupper($_SESSION['user']);?></b></h2>
            <a href="cerrar_sesion.php">Cerrar Sesión</a>
            </div>
            
        
            <div id="cont">
            <a href="formulario.php"><img src="images/user.png"><br>
                Registro Usuarios</a>
            </div>
        
            <div id="cont">
                <a href="mantenedor_producto.php"><img src="images/managere.png"><br>
                    Registro Producto</a>
            </div>
            <div id="cont">
                <a href="mantenedor_tipofamilia.php"><img src="images/tools.png"><br>
                    Registro Familia Producto</a>
        </div>
    
        </body>
</html>
<?php
}else{
    //header("Location:login.php");
}
?>