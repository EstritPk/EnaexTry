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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    

        <script src="js/validaciones.js"></script>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <style>
            table {
                margin-left: 0px;
                max-width: auto;
                min-height: auto;
                float: left;
            }
        </style>
    </head>

    <body class="bg-info">

        <?php
            $con = mysqli_connect("localhost", "root", "root", "enaexbom");
            $sql = "SELECT * FROM producto WHERE cod_pro=".$_GET['cod_pro'];
            $result = mysqli_query($con, $sql);
            $datos = mysqli_fetch_array($result)
        ?>    

        <div id="session">
            <h2>Bienvenido <b><?php echo strtoupper($_SESSION['user']); ?></b></h2>
            <a href="home.php">Regresa home</a>
            <a href="cerrar_sesion.php">Cerrar Sesión</a>
        </div>

        <div class="card container " id="form">
            <div class="card-header">Mantenedor Producto</div>
            <div class="card-body" style="min-height: 350px;">

                <form class="formulario" name="formprod" action="registrar_producto.php" class="border border-warning" method="POST" enctype="multipart/form-data">

                    <input type="number" id="cod_pro" name="cod_pro" placeholder="Codigo" value="<?php echo $datos['cod_pro'] ?>">
                    <input type="text" id="nombre_pro" name="nombre_pro" placeholder="Nombre Producto" value="<?php echo $datos['nombre_pro']; ?>">
                    <textarea id="desc_pro" name="desc_pro" placeholder="Descripcion del Producto" value="<?php echo $datos['desc_pro']; ?>"></textarea>
                    <select id="tipo_pro" name="tipo_pro" placeholder="Tipo Producto"><br>>
                        <option name="tipo_pro" value="">Seleccione Tipo de Producto</option>
                        <option name="tipo_pro" value="vestimenta">Vestimenta</option>
                        <option name="tipo_pro" value="aseo">Aseo</option>
                        <option name="tipo_pro" value="herramienta">Herramienta</option>
                        <option name="tipo_pro" value="lubricante">Lubricante</option>
                    </select>
                    <input type="file" id="foto" name="foto" required class="file" placeholder="Ingrese Imagen" value=""><br>
                    <input type="text" id="modelo_pro" name="modelo_pro" placeholder="Modelo Producto" value="<?php echo $datos['modelo_pro'];?>">

                    <br>
                </form>
            </div>
            <div class="card-footer">

           

                <?php

                if (!isset($_GET['cod_pro'])) {
                ?>
                    <input type="button" onclick="validarformproducto()" id="btn" value="Registrar">
                <?php
                } else {
                ?>
                    <input type="button" class="btn btn-success" value="Modificar" id="btnmodificar" onclick="validarformproducto(this.value);">
                    <input type="button" class="btn btn-danger" value="Eliminar" id="btneliminar" onclick="validarformproducto(this.value);">
                <?php
                }
                ?>
                <input type="button" class="btn btn-secondary" value="Cancelar" id="btncancelar" onclick="validarforfam(this.value);">
            </div>
        </div>

        <?php
        $con = mysqli_connect("localhost", "root", "root", "enaexbom");
        $sql = "SELECT * FROM producto";
        $result = mysqli_query($con, $sql);
        ?>
        <br>
        
            <table id="grilla" class="table table-striped table-hover bg-light border border-primary">
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Tipo Producto</th>
                    <th>FOTO</th>
                    <th>Modelo</th>
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
                        <td><?php echo $datos['modelo_pro'];?></td>
                        <td><a href="modificar_producto.php?cod_pro=<?php echo $datos['cod_pro'];?>" value="mod"><img src="images/update.png"></a> | <a href="registrar_producto.php?proeli=<?php echo $datos['cod_pro'];?>" value="del"><img src="images/delete.png"></a>
                        <?php
                             }
                        ?> 
                    </tr>
            </table>
  
    </body>

    </html>
<?php
} else {
    header("Location:login.php");
}
?>