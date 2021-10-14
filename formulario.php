<?php
session_start();
$con=mysqli_connect("localhost","root","root","enaexbom");
if(isset($_SESSION['user']))
{
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Formularios</title>
        <link rel="stylesheet" href="css/estilo_formulario.css">
        <link rel="stylesheet" href="css/estilo_tabla.css">
        <script src="js/validaciones.js"></script>
    </head>
    <body>
    <div id="session">
       <h2>Bienvenido   <b><?php echo strtoupper($_SESSION['user']);?></b></h2>
       <a href="home.php">Regresa home</a>
       <a href="cerrar_sesion.php">Cerrar Sesión </a>
    </div>
        <form class="formulario" name="formulario" action="registrar_usuario.php" method="POST">
            <h1>Registro de Usuario</h1>
            <input type="text" id="frut" name="frut" placeholder="Rut" value="">
            <input type="text" id="fnombre" name="fnombre" placeholder="Nombre" value="">
            <input type="text" id="fappaterno" name="fappaterno" placeholder="Apellido Paterno" value="">
            <input type="text" id="fapmaterno" name="fapmaterno" placeholder="Apellido Materno" value="">
            <input type="text" id="fusuario" name="fusuario" placeholder="Usuario" value="">
            <input type="text" id="fcargo" name="fcargo" placeholder="Cargo" value="">
            <input type="password" id="fclave" name="fclave" placeholder="Clave" value="">
            <select id="festado" name="festado" placeholder="Estado"><br>
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select><br>
            <input type="button" id="btn" onclick="validarformulario()" value="Registrar">
        </form>
        <?php
            $sql = "SELECT * FROM usuario";
            $result = mysqli_query($con,$sql);
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
        <?php  while($datos=mysqli_fetch_array($result)) { ?>
        <tr>
            <td><?php echo $datos['rut']; ?></td>
            <td><?php echo $datos['nombre'];?></td>
            <td><?php echo $datos['appaterno'];?></td>
            <td><?php echo $datos['apmaterno'];?></td>
            <td><?php echo $datos['usuario'];?></td>
            <td><?php echo $datos['cargo'];?></td>
            <td><?php echo $datos['clave'];?></td>
            <td><?php echo $datos['estado']; }?></td>
        </tr>
        </table>
    </body>
</html>
<?php
}else{
    header("Location:error.php");
}
?>
