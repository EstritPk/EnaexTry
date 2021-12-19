<?php

session_start();
include("functions/setup.php");
if (isset($_SESSION['user'])) {
    if (isset($_GET['cod_pro'])) {
        $sqlcod = "select * from producto where cod_pro=" . $_GET['cod_pro'];
        $rescod = mysqli_query(conectar(), $sqlcod);
        $datos = mysqli_fetch_array($rescod);
    }
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Formularios</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <link rel="stylesheet" href="css/estilo_navbar.css">
        <script src="js/validaciones.js"></script>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


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
        </div>

        <div class="row p-2">
                <input type="text" class="form-control" id="cod_pro" name="cod_pro" placeholder="Codigo/Nombre/Modelo" value="">
        </div>

        <?php
        $con = mysqli_connect("localhost", "root", "root", "enaexbom");
        $sql = "SELECT * FROM producto";
        $result = mysqli_query($con, $sql);
        ?>
        <br>
        <div class="container">
            <table id="grilla" class="table table-striped table-hover bg-light border border-primary">
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Tipo Producto</th>
                    <th>FOTO</th>
                    <th>Modelo</th>
                    <th>Stock</th>
                    <th>Entrega</th>
                    <th></th>
                </tr>
                <?php while ($datos = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $datos['cod_pro']; ?></td>
                        <td><?php echo $datos['nombre_pro']; ?></td>
                        <td><?php echo $datos['desc_pro']; ?></td>
                        <td><?php echo $datos['tipo_pro']; ?></td>
                        <td>
                            <?php
                            if ($datos['foto'] == "") {
                            ?>
                                <img src="images/fotos/user.png" width="80px" height="80px">
                            <?php
                            } else {
                            ?>
                                <img src="images/fotos/<?php echo $datos['foto']; ?>" width="80px" height="80px">
                            <?php
                            }
                            ?>
                        </td>
                        <td><?php echo $datos['modelo_pro']; ?></td>
                        <td><?php echo $datos['stock_pro']; ?></td>
                        <td><a href="entregas.php?cod_pro = <?php echo $datos['cod_pro']; ?>" value="entrega"><img src="images/entrega.svg"  width="32" height="32"></a> </td>
                        <td><a href="mantenedor_producto.php?cod_pro=<?php echo $datos['cod_pro']; ?>" value="mod"><img src="images/update.png"></a> | <a href="registrar_producto.php?proeli=<?php echo $datos['cod_pro']; ?>" value="del"><img src="images/delete.png"></a>
                        <?php
                    }
                        ?>
                    </tr>
            </table>
        </div>

    </body>

    </html>

<?php
} else {
    header("Location:login.php");
}
?>