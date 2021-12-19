<?php

session_start();
include("functions/setup.php");


if (isset($_SESSION['user'])) {
    if (isset($_GET['cod_pro'])) {
        $sql = "SELECT * FROM producto WHERE cod_pro=" . $_GET['cod_pro'];
        $result = mysqli_query(conectar(), $sql);
        $datos = mysqli_fetch_array($result);
    }
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Formularios</title>
        <link rel="stylesheet" href="css/estilo_formulario.css">
        <link rel="stylesheet" href="css/estilo_tabla.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilo_navbar.css">
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/validaciones.js"></script>
        <script src="js/busquedasp.js"></script>
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

        <div id="frmtxt">
<div class="card">
        <div class="card-header">Busqueda de Usuarios</div>
        <div class="card-body">
            <div class="container">
            <div class="row p-2">
                    <div class="col ">
                    <select id="sop" name="sop" class="form-select" aria-label="Default select example" style="margin-left=35px" class="form-select p-2">
                                <option value="0">Seleccionar Opcion de Busqueda</option>
                                
                                    <option name="sop" value="" >Rut</option>
                                    <option name="sop" value="" >Usuario</option>
                                    <option name="sop" value="" >Producto/Heramientas</option>
                                
                            </select>
                      </div>
                            <div class="col">
                        
                        <input type="text" class="form-control" id="txtbusqueda" placeholder="ingresar texto a buscar" >
                    </div>
                    </div>
            </div>
            </div>
        </div>
    </div>
</div>

<hr>
        <div class="card container " id="form" style="margin-top: 75px;">
            <div class="card-header"><h2 class="text-center">Lista solicitude</h2></div>
            <div class="card-body" style="min-height: 350px;">

            <?php
        $con = mysqli_connect("localhost", "root", "root", "enaexbom");
       $sql = "SELECT * FROM solicitud_pro ";




        $result = mysqli_query($con, $sql);
        ?>
        <br>
        
       <div id="grilla1">
       </div>
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
                    <th>Action</th>
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
                        <td><a href="registrar_sp.php?acsp=<?php echo $datos['Id']; ?>"><button type="button" class="btn btn-success">Aceptar</button></a> | <a href="registrar_sp.php?rcsp=<?php echo $datos['Id']; ?>"><button type="button" class="btn btn-danger">Rechazar</button></a>
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
    header("Location:login.php");
}
?>