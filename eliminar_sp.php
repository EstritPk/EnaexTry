<?php
session_start();
$con = mysqli_connect("localhost", "root", "root", "enaexbom");
if (isset($_SESSION['user'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Formularios</title>
        <link rel="stylesheet" href="css/estilo_formulario.css">
        <link rel="stylesheet" href="css/estilo_tabla.css">
        <link rel="stylesheet" href="css/estilo_navbar.css">
        <script src="js/validaciones.js"></script>
    </head>

    <body>
        <div id="session">

            <div class="topnav">
                <a class="active">
                    <h3>Bienvenido <b><?php echo strtoupper($_SESSION['user']); ?></b></h3>
                </a>
                <a href="cerrar_sesion.php" class="cs">Cerrar Sesion</a>
                <a href="home.php" class="el">Home</a>
                <a href="mantenedor_producto.php" class="el">Producto</a>
                <a href="mantenedor_tipofamilia.php" class="el">Tipo Producto</a>
            </div>

            <form class="formulario" name="formulario" action="registrar_usuario.php" method="POST">
                <h1>Crear Solicitud de Producto</h1>
                <input type="text" id="fusuario" name="fusuario" placeholder="Usuario" value="">
                <input type="password" id="fclave" name="fclave" placeholder="Clave" value="">  
                
                <input type="button" id="btn" onclick="validarformulario()" value="Registrar">
            </form>
    </body>

    </html>
<?php
} else {
    header("Location:error.php");
}
?>