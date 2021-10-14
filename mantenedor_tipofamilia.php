<?php
$con = mysqli_connect("localhost", "root", "root", "enaexbom");
?>
<?php

session_start();

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

        <div class="topnav">
            <a class="active">
                <h3>Bienvenido <b><?php echo strtoupper($_SESSION['user']); ?></b></h3>
            </a>
            <a href="cerrar_sesion.php" class="cs">Cerrar Sesion</a>
            <a href="home.php" class="el">Home</a>
            <a href="mantenedor_producto.php" class="el">Producto</a>
            <a href="mantenedor_tipofamilia.php" class="el">Tipo Producto</a>
        </div>

        <form class="formulario" name="formfam" action="registrar_tipofamilia.php" method="POST">
            <h1>Registro de Tipo de Producto</h1>
            <textarea name="desc_pro_f" id="desc_pro_f" placeholder="Descripcion del Tipo de producto"></textarea><br>
            <select id="categoria" name="categoria" placeholder="Categoria"><br>>
                <option name="categoria" value=" ">Seleccione el Tipo</option>
                <option name="categoria" value="Herramienta">Herrmaienta</option>
                <option name="categoria" value="Vestimenta">Vestimenta</option>
                <option name="categoria" value="Aseo">Aseo</option>
                <option name="categoria" value="Lubricante">Lubricante</option>
            </select><br>
            <input type="button" id="btn" onclick="validarforfam()" value="Registrar Tipo">
        </form>
        <?php

        $sql = "SELECT * FROM familia_pro";
        $result = mysqli_query($con, $sql);


        ?>

        <table id="lista">
            <tr>
                <th>Codigo</th>
                <th>Descripcion</th>
                <th>Categoria</th>
            </tr>
            <?php while ($datos = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $datos['cod_pro']; ?></td>
                    <td><?php echo $datos['desc_pro_f']; ?></td>
                    <td><?php echo $datos['categoria'];
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