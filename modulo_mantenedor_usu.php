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
    <body>
        <div class="topnav">
            <a class="active">
                <h3>Bienvenido <b><?php echo strtoupper($_SESSION['user']); ?></b></h3>
            </a>
            <a href="cerrar_sesion.php" class="cs">Cerrar Sesion</a>
        </div>
        <div class="a">
            <div class="card">
                <div class="icon">
                    <i class="bi bi-person-fill"></i>
                </div>
                <a href="formulario.php" style="color:white; ">
                    <h4>Ingresar Usuario</h4>
                </a>
                <p>Haz click aquí para Ingresar Usuarios.</p>
            </div>
            <div class="card">
                <div class="icon">
                <i class="bi bi-tools"></i>
                </div>
                <a href="mantenedor_producto.php" style="color:white; ">
                <h4>Modificar Usuario</h4>
                </a>
                <p>Haz click aquí para Modifcar Usuario.</p>
            </div>
            <div class="card">
                <div class="icon">
                <i class="bi bi-diagram-3"></i>
                </div>
                <a href="mantenedor_tipofamilia.php" style="color:white; ">
                    <h4>Eliminar Usuario</h4>
                </a>
                <p>Haz click aquí para Eliminar Usuario.</p>
            </div>
        </div>

        <?php
            $sql = "SELECT * FROM usuario";
            $result = mysqli_query($con, $sql);
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
                <?php while ($datos = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $datos['rut']; ?></td>
                        <td><?php echo $datos['nombre']; ?></td>
                        <td><?php echo $datos['appaterno']; ?></td>
                        <td><?php echo $datos['apmaterno']; ?></td>
                        <td><?php echo $datos['usuario']; ?></td>
                        <td><?php echo $datos['cargo']; ?></td>
                        <td><?php echo $datos['clave']; ?></td>
                        <td><?php echo $datos['estado'];
                        } ?></td>
                    </tr>
            </table>

    </body>    
</html> 
<?php
} else {
    //header("Location:login.php");
}
?>