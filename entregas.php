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
        <style>
            .mx-auto {
                display: flex;
                /*display: flex; el cual vuelve al contenedor un elemento flex*/

                align-items: center;
                /*justify-content: center; le decimos a los elementos del contenedor flex que se ubiquen al centro del eje principal eje horizontal*/

                justify-content: center;
                /*align-items: center; estamos diciendo que queremos que los elementos dentro del contenedor flex se ubiquen en el centro del eje secundario eje vertical*/

                min-height: 50vh;
                /*min-height: 100vh; que significa tome como altura mínima del contenedor el total del alto de la ventana del navegador web utilizado.*/
            }
        </style>


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

        <?php
        $con = mysqli_connect("localhost", "root", "root", "enaexbom");
        $sql = "SELECT * FROM producto";
        $result = mysqli_query($con, $sql);
        $datos =  mysqli_fetch_array($result);
        ?>

        <div class="card container " id="form" style="margin-top: 50px; max-width: 800px;">
            <div class="card-header">
                <h2 class="text-center"><?php echo $datos['cod_pro'] ?></h2>
            </div>
            <div class="card-body">

                <form class="formulario" name="formprod" action="registrar_producto.php" class="border border-warning" method="POST" enctype="multipart/form-data">
                    <div class="container">
                        <div class="row">
                            <div class="mx-auto">
                                <img src="images/fotos/<?php echo $datos['foto']; ?>" width="400px" height="400px">
                            </div>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col">
                            <select id="tipo_pro" class="form-control" name="tipo_pro" class="form-select" aria-label="Default select example" placeholder="Tipo Producto"><br>>
                                <?php
                                $sqlpro = "SELECT * FROM familia_pro";
                                $resultpro = mysqli_query(conectar(), $sqlpro);
                                while ($datospro = mysqli_fetch_array($resultpro)) {
                                ?>
                                    <option name="sop" value="<?php echo $datospro['cod_pro']; ?>" <?php if (isset($_GET['Id'])) {
                                                                                                        if ($datos['cod_pro'] == $datospro['cod_pro']) { ?> selected <?php }
                                                                                                                                                                    } ?>><?php echo $datospro['categoria']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col">
                            <input type="file" class="form-control" id="foto" name="foto" required class="file" placeholder="Ingrese Imagen" value="">
                        </div>
                    </div>
                    <br>
                    <div class="row p-2">
                        <div class="col">
                            <input type="text" class="form-control" id="stock_pro" name="stock_pro" placeholder="Stock del Producto" value="<?php if (isset($GET['cod_pro'])) echo $datos['stock_pro'] ?>">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="modelo_pro" name="modelo_pro" placeholder="Modelo Producto" value="<?php if (isset($GET['Id'])) echo $datos['modelo_pro'] ?>">
                        </div>
                    </div>
                    <input type="hidden" class="form-control" id="frmaccion" name="frmaccion">
                    <input type="hidden" class="form-control" id="idc" name="idoc" value=" <?php echo $datos['cod_pro']; ?>">
                    <br>
                </form>
            </div>
            <div class="card-footer">

                <?php

                if (!isset($_GET['cod_pro'])) {
                ?>
                    <input type="button" class="btn btn-primary " onclick="validarformproducto(this.value)" id="btn" value="Registrar">
                <?php
                } else {
                ?>
                    <input type="button" class="btn btn-success" value="Modificar" id="btnmodificar" onclick="validarformproducto(this.value);">
                    <input type="button" class="btn btn-danger" value="Eliminar" id="btneliminar" onclick="validarformproducto(this.value);">
                <?php
                }
                ?>
                <input type="button" class="btn btn-secondary" value="Cancelar" id="btncancelar" onclick="validarformproducto(this.value);">
            </div>
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