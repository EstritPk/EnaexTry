<?php
 session_start();
 include ("functions/setup.php");
 if(isset($_SESSION['user'])){
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
    </head>
    <body class="bg-info">
        <div id="session">
        <h2>Bienvenido   <b><?php echo strtoupper($_SESSION['user']);?></b></h2>
        <a href="home.php">Regresa home</a>
        <a href="cerrar_sesion.php">Cerrar Sesión</a>
        </div>
        <div class="card container " id="form">
            <div class="card-header">Mantenedor Usuario</div>
            <div class="card-body">
            <form class="formantu" name="formantu" action="registrar_usuario.php" class="border border-warning" method="POST" >
                <input type="text" id="frut" name="frut" placeholder="Rut" value="">
                <input type="text" id="fnombre" name="fnombre" placeholder="Nombre" value="">
                <input type="text" id="fappaterno" name="fappaterno" placeholder="Apellido Paterno" value="">
                <input type="text" id="fapmaterno" name="fapmaterno" placeholder="Apellido Materno" value="">
                <input type="text" id="fusuario" name="fusuario" placeholder="Usuario" value="">
                <input type="text" id="fcargo" name="fcargo" placeholder="Cargo" value="">
                <input type="password" id="fclave" name="fclave" placeholder="Clave" value="">
                <select id="festado" name="festado" placeholder="Estado"><br>>
                    <option  name="festado" value="1">Activo</option>
                    <option  name="festado" value="0">Inactivo</option>
                </select><br><br>
                <input type="hidden" class="form-control" id="frmaccion" name="frmaccion">
                <input type="hidden" class="form-control" id="idc" name="idoc" value="<?php echo $datos['usuario'];?>">
            </form>
        </div>
        <div class="card-footer">
            <?php 
                if(!isset($_GET['usuario']))
                {
                    ?>
                <input type="button" class="btn btn-primary" value="Registrar" id="btnregistrar" onclick="validarformulariousuario(this.value);">
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
            <?php
                $con=mysqli_connect("localhost","root","root","enaexbom");
                $sql = "SELECT * FROM usuario";
                $result = mysqli_query($con,$sql);
            ?>
        <br> <div class="container">                    
            <table id="grilla" class="table table-striped table-hover bg-light border border-primary">
                <tr>
                <th>RUT</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO PATERNO</th>
                    <th>APELLIDO MATERNO</th>
                    <th>USUARIO</th>
                    <th>CARGO</th>
                    <th>CLAVE</th>
                    <th>ESTADO</th>
                    <th>EDITAR</th>
                </tr>
            <?php  while($datos=mysqli_fetch_array($result)) { ?>
            <tr>
            <td style="min-width: 200px;"><?php echo $datos['rut']; ?></td>
                <td style="min-width: 200px;"><?php echo $datos['nombre']; ?></td>
                <td style="min-width: 200px;"><?php echo $datos['appaterno']; ?></td>
                <td style="min-width: 200px;"><?php echo $datos['apmaterno']; ?></td>
                <td style="min-width: 50px;"><?php echo $datos['usuario']; ?></td>
                <td style="min-width: 100px;"><?php echo $datos['cargo']; ?></td>
                <td style="min-width: 100px;"><?php echo $datos['clave']; ?></td>
                <td><?php echo $datos['estado']; } ?></td>
                <td><a href="mantenedor_usuario.php?usuario=<?php echo $datos['usuario'];?>"><img src="images/update.png"></a> <a href="mantenedor_usuario.php?usuario=<?php echo $datos['usuario'];?>"><img src="images/delete.png"></a>
                
            </table>
        </div>
    </body>
</html>
<?php     
 } else{
    header("Location:error.php");
}
?>