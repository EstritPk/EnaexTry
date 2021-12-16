<?php
session_start();
include("functions/setup.php");
if (isset($_SESSION['user'])) {
    if (isset($_GET['Id'])) {
        $sqlsp = "select * from solicitud_pro where Id=" . $_GET['Id'];
        $ressp = mysqli_query(conectar(), $sqlsp);
        $datossp = mysqli_fetch_array($ressp);
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Formularios</title>
        <link rel="stylesheet" href="css/estilo_formulario.css">
        <link rel="stylesheet" href="css/estilo_tabla.css">
        <link rel="stylesheet" href="css/estilo_navbar.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="js/validaciones.js"></script>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="session">
            <?php
            // include ("functions/setup.php");
            //$sql="select * from usuario where rut=".$_SESSION['user'];
            // $result=mysqli_query(conectar(),$sql);
            // $cont=mysqli_num_rows($result);
            // $datos=mysqli_fetch_array($result);
            ?>

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
        <br>
        <br>

        <div class="card container">
            <div class="card-header">
                <h2 class="text-center">Solicitar Producto</h2>
            </div>
            <div class="card-body">
                <form class="formulario" name="formsp" action="registrar_sp.php" method="POST" enctype="multipart/form-data">



                    <div class="row p-2">
                        <div class="col">
                            <input type="text" class="form-control" value="<?php echo $datos = ($_SESSION['rut']); ?>" name="frut" readonly>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" value="<?php echo ($_SESSION['user']); ?>" name="fnombre" readonly>
                        </div>
                    </div>



                    <div class="row p-2">
                        <div class="col">
                            <select id="sop" name="sop" style="margin-left=35px" class="form-select p-2">
                                <option value="0">Seleccionar Producto</option>
                                <?php
                                $sqlpro = "select * from producto";
                                $resultpro = mysqli_query(conectar(), $sqlpro);
                                while ($datospro = mysqli_fetch_array($resultpro)) {
                                ?>
                                    <option name="sop" value="<?php echo $datospro['cod_pro']; ?>" <?php if (isset($_GET['Id'])) {
                                                                                                                                if ($datossp['codigo_prod'] == $datospro['cod_pro']) { ?> selected <?php }
                                                                                                                                                                                            } ?>><?php echo $datospro['nombre_pro']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control p-2" placeholder="Cantidad de Producto" value="<?php if (isset($_GET['Id'])) {
                                                                                                                        echo $datossp['cantidad'];
                                                                                                                    } ?>" id="fcantidad" name="fcantidad">
                        </div>
                    </div>



                    <input type="hidden" class="form-control" id="frmaccion" name="frmaccion">
                    <input type="hidden" class="form-control" id="idc" name="idoc" value=" <?php if (isset($_GET['Id'])) {
                                                                                                echo $datossp['Id'];} ?>">


                    <br>


                    <textarea name="des_sp" class="form-control" id="des_sp" placeholder="Descripcion del Solitud"></textarea><br>



                    

                </form>

            </div>
            <div class="card-footer justify-content-center ">
                <div class="  span7 center">
                    <?php

                    if (!isset($_GET['Id'])) {
                    ?>
                        <input type="button" class="btn btn-primary " value="Registrar" id="btnregistrar" onclick="validarsolicitud(this.value);">

                    <?php
                    } else {
                    ?>
                        <input type="button" class="btn btn-success " value="Modificar" id="btnmodificar" onclick="validarsolicitud(this.value);">
                        <input type="button" class="btn btn-danger " value="Eliminar" id="btneliminar" onclick="validarsolicitud(this.value);">
                    <?php
                    }
                    ?>

                    <input type="button" class="btn btn-secondary" value="Cancelar" id="btncancelar" onclick="validarsolicitud(this.value);">
                </div>
            </div>
        </div>


        <?php
        $con = mysqli_connect("localhost", "root", "root", "enaexbom");
       $sql = "SELECT * FROM solicitud_pro where rut_usu='".$_SESSION['rut']."'";








        $result = mysqli_query($con, $sql);
        ?>
        <br>
        <div class="container">
            <table id="grilla" class="table table-striped table-hover bg-light border border-primary">
                <tr>
                    <th>id</th>
                    <th>Rut solicitante</th>
                    <th>Nombre solicitante</th>
                    <th>Fecha</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Descripcion</th>
                    <th>estado</th>
                    <th>Editar</th>
                </tr>
                <?php while ($datos = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $datos['Id']; ?></td>
                        <td><?php echo $datos['rut_usu']; ?></td>
                        <td><?php echo $datos['nombre_usu']; ?></td>
                        <td><?php echo $datos['fecha_sp']; ?></td>
                        <td><?php echo $datos['codigo_prod']; ?></td>
                        <td><?php echo $datos['cantidad']; ?></td>
                        <td><?php echo $datos['descripcion']; ?></td>
                        <td><?php echo $datos['estado']; ?></td>
                        <td><a href="crear_sp.php?Id=<?php echo $datos['Id']; ?>"><img src="images/update.png"></a> | <a href="registrar_sp.php?sppro=<?php echo $datos['Id']; ?>"><img src="images/delete.png"></a>
                        <?php
                    }
                        ?>
                        </td>
                    </tr>


            </table>
        </div>




    </body>

    </html>
<?php
} else {
    header("Location:error.php");
}
?>