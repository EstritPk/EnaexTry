<?php
session_start();
if (isset($_SESSION['user'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Formularios</title>
        <link rel="stylesheet" href="css/estilo_navbar.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="topnav">
            <a class="active">
                <h3>Bienvenido <b><?php echo strtoupper($_SESSION['user']); ?></b></h3>
            </a>
            <a href="cerrar_sesion.php" class="cs">Cerrar Sesion</a>
        </div>
        <div class="card container" style="margin-top: 200px; min-height:500px; max-width:450px;">
            <button type="button" class="btn btn-outline-primary" onclick="location.href='mantenedor_usuario.php'" style="margin-top:50px;">Mantenedor Usuario</button><br><br>
            <button type="button" class="btn btn-outline-primary" onclick="location.href='mantenedor_producto.php'" style="">Mantenedor Producto</button><br><br>
            <button type="button" class="btn btn-outline-primary" onclick="location.href='mantenedor_tipofamilia.php'" style="">Mantenedor Tipo Familia de Producto</button><br><br>
            <button type="button" class="btn btn-outline-primary" onclick="location.href='crear_sp.php'" style="">Modulo Solicitud de Producto</button><br><br>
            <button type="button" class="btn btn-outline-primary" onclick="location.href='arsolicitudes.php'" style="">lista de Solicitud de Producto</button>
        </div>


    </body>

    </html>
<?php
} else {
    header("Location:error.php");
}
?>