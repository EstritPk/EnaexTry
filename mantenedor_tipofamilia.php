<?php
    $con=mysqli_connect("localhost","root","","enaexbom");
?>
<?php
 
 session_start();
  
 if(isset($_SESSION['user']))
 {
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Formularios</title>
        <link rel="stylesheet" href="css/estilo_formulario.css">
        <link rel="stylesheet" href="css/estilo_tabla.css">
        <script src="js/validaciones.js"></script>
    </head>
    <body>
    <div id="session">
       <h2>Bienvenido   <b><?php echo strtoupper($_SESSION['user']);?></b></h2>
       <a href="home.php">Regresa home</a>
       <a href="cerrar_sesion.php">Cerrar Sesión</a>
    </div>
        <form class="formulario" name="formrep" action="registrar_tipofamilia.php" method="POST">
            <h1>Registro de Tipo de Producto</h1>
            <textarea name="desc_pro" id="desc_pro" placeholder="Descripcion del Tipo de producto"></textarea><br>
            <select id="categoria" name="categoria" placeholder="Categoria"><br>>
                <option name="categoria" value=" ">Seleccione el Tipo</option>
                <option name="categoria" value="Herramienta">Herrmaienta</option>
                <option name="categoria" value="Vestimenta">Vestimenta</option>
                <option name="categoria" value="Aseo">Aseo</option>
                <option name="categoria" value="Lubricante">Lubricante</option>
            </select><br>
            <input type="submit"  value="Registrar Tipo">
        </form>
        <?php

            $sql = "SELECT * FROM familia_pro";
            $result = mysqli_query($con,$sql);


        ?>

        <table id="lista">
            <tr>
                <th>Codigo</th>
                <th>Descripcion</th>
                <th>Categoria</th>
            </tr>
        <?php  while($datos=mysqli_fetch_array($result)) { ?>
        <tr>
            <td><?php echo $datos['cod_pro']; ?></td>
            <td><?php echo $datos['desc_pro']; ?></td>
            <td><?php echo $datos['categoria']; } ?></td>
        </tr>
        </table>
    </body>
</html>
<?php
}else{
    header("Location:error.php");
}
?>