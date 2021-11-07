<?php
 
 session_start();
 $con=mysqli_connect("localhost","root","root","enaexbom");
  
 if(isset($_SESSION['user']))
 {
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


    <div id="session">
       <h2>Bienvenido   <b><?php echo strtoupper($_SESSION['user']);?></b></h2>
       <a href="home.php">Regresa home</a>
       <a href="cerrar_sesion.php">Cerrar Sesión</a>
    </div>
    <form class="formulario" name="formprod" enctype="multipart/form-data" action="registrar_producto.php" method="POST">
            <h1>Registro de Producto</h1>
            <input type="number" id="cod_pro" name="cod_pro" placeholder="Codigo" value="">
            <input type="text" id="nombre_pro" name="nombre_pro" placeholder="Nombre Producto" value="">
            <textarea name="desc_pro" id="desc_pro" placeholder="Descripcion de Producto"></textarea><br>
            <select id="tipo_pro" name="tipo_pro" placeholder="Tipo Producto"><br>>
                <option name="tipo_pro" value=" ">Seleccione Tipo de Producto</option>
                <option name="tipo_pro" value="vestimenta">Vestimenta</option>
                <option name="tipo_pro" value="aseo">Aseo</option>
                <option name="tipo_pro" value="herramienta">Herramienta</option>
                <option name="tipo_pro" value="lubricante">Lubricante</option>
            </select><br>
            <input type="file" id="foto" name="foto" required class="file" placeholder="Ingrese Imagen" value=""><br>
            <input type="text" id="modelo_pro" name="modelo_pro" placeholder="Modelo Producto" value="">

            <input type="button" onclick="validarformproducto()" id="btn" value="Registrar Producto">
        </form>
        <?php

            $sql = "SELECT * FROM producto";
            $result = mysqli_query($con,$sql);
        ?>
        <table id="lista">
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Tipo Producto</th>
                <th>FOTO</th>
                <th>Modelo</th>
            </tr>
        <?php  while($datos=mysqli_fetch_array($result)) { ?>
        <tr>
            <td><?php echo $datos['cod_pro']; ?></td>
            <td><?php echo $datos['nombre_pro'];?></td>
            <td><?php echo $datos['desc_pro'];?></td>
            <td><?php echo $datos['tipo_pro'];?></td>
            <td> 
            <?php 
                if($datos['foto']=="")
                {
            ?>
                    <img src="images/fotos/user.png" width="100px" height="100px">
            <?php 
                }else{
                    ?>
                        <img src="images/fotos/<?php echo $datos['foto'];?>" width="100px" height="100px">
                    <?php
                } 
                ?>
            </td>
            <td><?php echo $datos['modelo_pro']; }?></td>
        </tr>
        </table>
    </body>
</html>
<?php
}else{
    header("Location:login.php");
}
?>
