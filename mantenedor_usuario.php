<?php
session_start();
include("functions/setup.php");
if (isset($_SESSION['user'])) {
    if (isset($_GET['usuario'])) {
        $sqlusu = "select * from usuario where usuario=" . $_GET['usuario'];
        $resusu = mysqli_query(conectar(), $sqlusu);
        $datosusu = mysqli_fetch_array($resusu);
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
        <div class="card container " id="form" style="margin-top: 50px;">
            <div class="card-header"><h2 class="text-center">Mantenedor Usuario</h2></div>
            <div class="card-body">
                <form class="formantu" name="formantu" action="registrar_usuario.php" class="border border-warning" method="POST">
                    <div class="row p-2">
                        <div class="col">
                            <input type="text" class="form-control" id="frut" name="frut" placeholder="Rut" value="">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="fnombre" name="fnombre" placeholder="Nombre" value="">
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col">
                            <input type="text" class="form-control" id="fappaterno" name="fappaterno" placeholder="Apellido Paterno" value="">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="fapmaterno" name="fapmaterno" placeholder="Apellido Materno" value="">
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col">
                            <input type="text" class="form-control" id="fusuario" name="fusuario" placeholder="Usuario" value="">
                        </div>
                        <div class="col">
                            
                            <select id="fcargo"  class="form-control" aria-label="Default select example" style="margin-left=35px" class="form-select p-2" name="fcargo" placeholder="cargo"><br>>
                                <option name="fcargo" value="Administrador">Administrador</option>
                                <option name="fcargo" value="Usuario">Usuario</option>
                                <option name="fcargo" value="Bodeguero">Bodeguero</option>
                            </select>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col">
                            <input type="password"  class="form-control" id="fclave" name="fclave" placeholder="Clave" value="">
                        </div>
                        <div class="col">
                            <select id="festado"  class="form-control" aria-label="Default select example" style="margin-left=35px" class="form-select p-2" name="festado" placeholder="Estado"><br>>
                                <option name="festado" value="1">Activo</option>
                                <option name="festado" value="0">Inactivo</option>
                            </select>
                        </div>
                    </div>

                    <br>
                    <input type="hidden" class="form-control" id="frmaccion" name="frmaccion">
                    <input type="hidden" class="form-control" id="idc" name="iusu" value="<?php echo $datos['usuario']; ?>">
                </form>
            </div>
            <div class="card-footer">
                <?php
                if (!isset($_GET['usuario'])) {
                ?>
                    <input type="button" class="btn btn-primary" value="Registrar" id="btnregistrar" onclick="validarformulariousuario(this.value);">
                <?php
                } else {
                ?>
                    <input type="button" class="btn btn-success" value="Modificar" id="btnmodificar" onclick="validarformulariousuario(this.value);">
                    <input type="button" class="btn btn-danger" value="Eliminar" id="btneliminar" onclick="validarformulariousuario(this.value);">
                <?php
                }
                ?>
                <input type="button" class="btn btn-secondary" value="Cancelar" id="btncancelar" onclick="validarformulariousuario(this.value);">
            </div>
        </div>
        <?php
        $con = mysqli_connect("localhost", "root", "root", "enaexbom");
        $sql = "SELECT * FROM usuario";
        $result = mysqli_query($con, $sql);
        ?>
        <br>
        <div class="container" style="margin-left: 207px;">
            <table id="grilla" class="table table-striped table-hover bg-light border border-primary">
                <tr>
                    <th>RUT</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO PATERNO</th>
                    <th>APELLIDO MATERNO</th>
                    <th>USUARIO</th>
                    <th>CARGO</th>
                    <th>ESTADO</th>
                    <th>EDITAR</th>
                </tr>
                <?php while ($datos = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td style="min-width: 200px;"><?php echo $datos['rut']; ?></td>
                        <td style="min-width: 200px;"><?php echo $datos['nombre']; ?></td>
                        <td style="min-width: 200px;"><?php echo $datos['appaterno']; ?></td>
                        <td style="min-width: 200px;"><?php echo $datos['apmaterno']; ?></td>
                        <td style="min-width: 50px;"><?php echo $datos['usuario']; ?></td>
                        <td style="min-width: 100px;"><?php echo $datos['cargo']; ?></td>
                        <td><?php echo $datos['estado']; ?></td>
                        <td><a href="modificar_usuario.php?usuario=<?php echo $datos['rut']; ?>"><img src="images/update.png"></a> <a href="registrar_usuario.php?eliusu=<?php echo $datos['rut']; ?>"><img src="images/delete.png"></a></td>
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