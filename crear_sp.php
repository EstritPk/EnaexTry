<?php
session_start();
include ("functions/setup.php");
if (isset($_SESSION['user']) ) {
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
            <br>
            <br>

        <div class="card container">
        <div class="card-header"><h2 class="text-center">Solicitar Producto</h2></div>
                <div class="card-body">
            <form class="formulario" name="formulario" action="registrar_sp.php" method="POST">
               
            
            
                <div class="row p-2">
                    <div class="col">
                       <input type="text" class="form-control" value="<?php echo "rut del usuario"; ?>" name="frut" readonly>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" value="<?php echo ($_SESSION['user']); ?>" name="fnombre" readonly>
                    </div>
                </div>  
                
                
                
                <div class="row p-2">
                    <div class="col">
                    <select id="sop" name="sop" style="margin-left=35px" class="form-select p-2">
                    <option value="0">Seleccionar Producto</option>
                    <?php
                        $sqlpro="select * from producto";
                        $resultpro=mysqli_query(conectar(),$sqlpro);
                        while($datospro=mysqli_fetch_array($resultpro))
                        {
                    ?>
                    <option value="<?php echo $datospro['cod_pro'];?>"><?php echo $datospro['nombre_pro'];?></option>
                    <?php
                        }
                        ?>
                       </select> </div>
                    <div class="col">
                    <input type="number" class="form-control p-2"  placeholder="Cantidad de Producto" value="" name="fcantidad">
                   </div>
                </div> 
               
                    
                    
                       
                
                        
                      <br>
                   
                <div class="mb-3">
                    <textarea class="form-control" id="desc_solitud" placeholder="Descripcion del Solitud" rows="3"></textarea>
                </div>
                
                
            </form>
            
        </div>
        <div class="card-footer justify-content-center ">
            <div class="  span7 center">
               
                            <input type="button" class="btn btn-primary " value="Registrar" id="btnregistrar" onclick="validarforfam(this.value);">
                         
                           
                            <input type="button" class="btn btn-success " value="Modificar" id="btnmodificar" onclick="validarforfam(this.value);">
                            <input type="button" class="btn btn-danger " value="Eliminar" id="btneliminar" onclick="validarforfam(this.value);">
                            
                            
                            <input type="button" class="btn btn-secondary" value="Cancelar" id="btncancelar" onclick="validarforfam(this.value);">
                </div>
                    </div>
        </div>
            
    </body>

</html>
<?php
} else {
    header("Location:error.php");
}
?>