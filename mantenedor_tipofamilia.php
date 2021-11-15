
<?php
 
 session_start();

 include ("functions/setup.php");

  
 if(isset($_SESSION['user'])){

    if(isset($_GET['cod_pro']))
    {
        $sqlcod="select * from familia_pro where cod_pro=".$_GET['cod_pro'];
        $rescod=mysqli_query(conectar(),$sqlcod);
        $datosfa=mysqli_fetch_array($rescod);
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
                <div class="card-header">Registro de Tipo de Producto</div>
                <div class="card-body">

                        <form class="formulario" name="formfam" action="registrar_tipofamilia.php" class="border border-warning" method="POST" enctype="multipart/form-data" >
                 

                       
                     
                    <textarea name="desc_pro" class="form-control" id="desc_pro"  placeholder="Descripcion del Tipo de producto"></textarea><br>
                    <select id="categoria" class="form-control" name="categoria" placeholder="Categoria"><br>
                        <option name="categoria" value=" ">Seleccione el Tipo</option>
                        <option name="categoria" value="Herramienta"<?php if($datosfa['categoria']=="Herramienta"){?> selected <?php } ?>>Herrmaienta</option>
                        <option name="categoria" value="Vestimenta"<?php if($datosfa['categoria']=="Vestimenta"){?> selected <?php } ?> >Vestimenta</option>
                        <option name="categoria" value="Aseo"<?php if($datosfa['categoria']=="Aseo"){?> selected <?php } ?>>Aseo</option>
                        <option name="categoria" value="Lubricante"<?php if($datosfa['categoria']=="Lubricante"){?> selected <?php } ?>>Lubricante</option>
                    </select><br>
                    <input type="hidden" class="form-control" id="frmaccion" name="frmaccion">
                    <input type="hidden" class="form-control" id="idc" name="idoc" value=" <?php echo $datosfa['cod_pro'];?>" >

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
               





   
        <?php
            $con=mysqli_connect("localhost","root","root","enaexbom");
            $sql = "SELECT * FROM familia_pro";
            $result = mysqli_query($con,$sql);
        ?>
   <br> <div class="container">                    
        <table id="grilla" class="table table-striped table-hover bg-light border border-primary">
            <tr>
                <th>Codigo</th>
                <th>Descripcion</th>
                <th>Categoria</th>
                <th>Action</th>
            </tr>
        <?php  while($datos=mysqli_fetch_array($result)) { ?>
        <tr>
            <td><?php echo $datos['cod_pro'];?></td>
            <td><?php echo $datos['desc_pro'];?></td>
            <td><?php echo $datos['categoria'];?></td>
            <td><a href="mantenedor_tipofamilia.php?cod_pro=<?php echo $datos['cod_pro'];?>"><img src="images/update.png"></a> | <a href="registrar_tipofamilia.php?proeli=<?php echo $datos['cod_pro'];?>"><img src="images/delete.png"></a>
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
       
 } else{
    header("Location:error.php");
}
?>