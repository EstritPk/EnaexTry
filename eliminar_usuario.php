<?php
session_start();
$con = mysqli_connect("localhost", "root", "root", "enaexbom");
if (isset($_SESSION['user'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Eliminar Usuario</title>
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

            <form class="formulario" name="formulario" action="delete_usuario.php" method="POST">
                <h1>Eliminar Usuario</h1>
                <h3>Ingrese Nombre de Usuario a Eliminar</h3>
                <input type="text" id="fnombre" name="fnombre" placeholder="Nombre" value="">
                <input type="button" value="Eliminar">
            </form>
            <?php
            $sql = "SELECT * FROM usuario";
            $result = mysqli_query($con, $sql);
            ?>
            <table id="lista">
                <tr>
                    <th>RUT</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO PATERNO</th>
                    <th>APELLIDO MATERNO</th>
                    <th>USUARIO</th>
                    <th>CARGO</th>
                    <th>CLAVE</th>
                    <th>ESTADO</th>
                </tr>
                <?php while ($datos = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $datos['rut']; ?></td>
                        <td><?php echo $datos['nombre']; ?></td>
                        <td><?php echo $datos['appaterno']; ?></td>
                        <td><?php echo $datos['apmaterno']; ?></td>
                        <td><?php echo $datos['usuario']; ?></td>
                        <td><?php echo $datos['cargo']; ?></td>
                        <td><?php echo $datos['clave']; ?></td>
                        <td><?php echo $datos['estado'];
                        } ?></td>
                    </tr>
            </table>
    </body>

    </html>
<?php
} else {
    header("Location:error.php");
}
?>