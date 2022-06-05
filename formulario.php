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
        <link rel="stylesheet" href="css/estilo_navbar.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <script src="js/validaciones.js"></script>
        <style>
            form {
                align: left;
                margin-left: 0px;
                max-width: 250px;
                max-height: 1000px;
                margin-top: 0px;
                background: #272D2D;
                min-height: 100vh;
            }

            table {
                margin-right: 15px;
            }

            .btn {
                width: 100px;
                height: 35px;
                background: none;
                border: none;
                cursor: pointer;
                font-weight: 600;
                font-size: 1.05rem;
                border-radius: 15px;
                box-shadow: 2px 2px 2px #ffffff;
                color: #004CD6;
                background: #ffffff;
                position: relative;
            }

            #formus {}
        </style>
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



        <div class="row">
            <div class="col" id="formus">
                <form class="formulario" name="formulario" action="registrar_usuario.php" method="POST">
                    <h5>Registro de Usuario</h5>
                    <br>
                    <div class="row" style="margin-left: 10px;">
                        <label for="frut" class="" style="color: #000;">Rut usuario: </label>
                        <div class="col">
                            <input type="text" id="frut" name="frut" placeholder="Rut" value="">
                        </div>
                    </div>

                    <br>

                    <div class="row" style="margin-left: 10px;">
                        <label for="fnombre" class="" style="color: #000;">Nombre usuario: </label>
                        <div class="col">
                            <input type="text" id="fnombre" name="fnombre" placeholder="Nombre" value="">
                        </div>
                    </div>

                    <br>

                    <div class="row" style="margin-left: 10px;">
                        <label for="fappaterno" class="" style="color: #000;">Apellido Paterno: </label>
                        <div class="col">
                            <input type="text" id="fappaterno" name="fappaterno" placeholder="Apellido Paterno" value="">
                        </div>
                    </div>

                    <br>

                    <div class="row" style="margin-left: 10px;">
                        <label for="fapmaterno" class="" style="color: #000;">Apellido Materno: </label>
                        <div class="col">
                            <input type="text" id="fapmaterno" name="fapmaterno" placeholder="Apellido Materno" value="">
                        </div>
                    </div>

                    <br>

                    <div class="row" style="margin-left: 10px;">
                        <label for="fusuario" class="" style="color: #000;">Nombre de Usuario: </label>
                        <div class="col">
                            <input type="text" id="fusuario" name="fusuario" placeholder="Usuario" value="">
                        </div>
                    </div>

                    <br>

                    <div class="row" style="margin-left: 10px;">
                        <label for="fcargo" class="" style="color: #000;">Cargo : </label>
                        <div class="col">
                            <input type="text" id="fcargo" name="fcargo" placeholder="Cargo" value="">
                        </div>
                    </div>

                    <br>

                    <div class="row" style="margin-left: 10px;">
                        <label for="fclave" class="" style="color: #000;">Password : </label>
                        <div class="col">
                            <input type="password" id="fclave" name="fclave" placeholder="Clave" value="">
                        </div>
                    </div>
                    <br>

                    <div class="row" style="margin-left: 10px;">
                        <label for="festado" class="" style="color: #000;">Estado : </label>
                        <div class="col">
                            <select id="festado" name="festado" placeholder="Estado"><br>
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select><br>
                        </div>
                    </div>
                    <br>

                    <div class="row" style="margin-left: 110px;">
                        <button type="button" class="btn btn-light" onclick="validarformulario()">
                            Registrar
                        </button>
                    </div>
            </div>
            <div class="col" style="margin-right: 75px; margin-top: 150px">
                <?php
                $sql = "SELECT * FROM usuario";
                $result = mysqli_query($con, $sql);
                ?>
                <table id="lista" class="table">
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
                            <td style="min-width: 200px;"><?php echo $datos['rut']; ?></td>
                            <td style="min-width: 200px;"><?php echo $datos['nombre']; ?></td>
                            <td style="min-width: 200px;"><?php echo $datos['appaterno']; ?></td>
                            <td style="min-width: 200px;"><?php echo $datos['apmaterno']; ?></td>
                            <td style="min-width: 50px;"><?php echo $datos['usuario']; ?></td>
                            <td style="min-width: 100px;"><?php echo $datos['cargo']; ?></td>
                            <td style="min-width: 100px;"><?php echo $datos['clave']; ?></td>
                            <td><?php echo $datos['estado'];
                            } ?></td>
                        </tr>
                </table>
            </div>
        </div>



        </form>


    </body>

    </html>
<?php
} else {
    header("Location:error.php");
}
?>