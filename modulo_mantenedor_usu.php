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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body {
                background-color: #004CD6;
            }
            .a {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            .card {
                width: 250px;
                height: 200px;
                color: white;
                margin: 1em;
                border-radius: 15px;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                padding: 0 1.5em;
                text-align: center;
                cursor: pointer;
                position: relative;
            }
            .card::before,
            .card::after {
                content: '';
                position: absolute;
                background: #0D3B91;
                width: 100%;
                height: 40%;
                z-index: -10;
                border-radius: 15px 15px 0 0;
                transition: all .4s;
            }
            .card::before {
                top: 0;
            }
            .card:hover::before {
                transform: translateY(-20px);
            }
            .card::after {
                bottom: 10px;
                height: 60%;
                border-radius: 0 0 15px 15px;
            }
            .icon {
                width: 60px;
                height: 60px;
                background: #DA0037;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 50%;
            }
            .card:hover .icon {
                box-shadow: 0 0 10px red;
            }
            .icon i {
                font-size: 1.5em;
            }
            .card p {
                margin: 0.5em 0;
                font-size: 0.8em;
                display: none;
                opacity: 0;
                transition: all .4s;
            }
            .card:hover p {
                display: block;
                opacity: 1;
            }
            .card h4 {
                margin-top: 0.5em;
            }

            
        </style>
        </meta>
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
        <div class="card container " id="form">
                <div class="card-header">Mantenedor de Usuario</div>
                <div class="card-body">

                        <form class="formulario" name="formfam" action="registrar_tipofamilia.php" class="border border-warning" method="POST" enctype="multipart/form-data" >
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
                    <input type="hidden" class="form-control" id="frmaccion" name="frmaccion">
                    <input type="hidden" class="form-control" id="idc" name="idoc" value="<?php echo $datosfa['cod_pro'];?>">

                    </form>
                </div>
                    <div class="card-footer">
     
                    <?php 

                            if(!isset($_GET['cod_pro']))
                            {
                                ?>
                            <input type="button" class="btn btn-primary" value="Registrar" id="btnregistrar" onclick="validarforfam(this.value);">
                            <?php
                            }else{
                                ?>
                            <input type="button" class="btn btn-success" value="Modificar" id="btnmodificar" onclick="validarforfam(this.value);">
                            <input type="button" class="btn btn-danger" value="Eliminar" id="btneliminar" onclick="validarforfam(this.value);">
                            <?php
                            }
                            ?>
                            <input type="button" class="btn btn-secondary" value="Cancelar" id="btncancelar" onclick="validarforfam(this.value);">
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
        

        </form>

    </body>    
</html> 
<?php
} else {
    //header("Location:login.php");
}
?>