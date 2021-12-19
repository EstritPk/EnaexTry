<?php

include("functions/setup.php");

switch($_POST['op'])
{
    case 1: todos();
        break;
    case 2: like($_POST['txt']);
        break;
}

function todos()
{
    $sql = "SELECT * FROM solicitud_pro ";




        $result = mysqli_query(conectar(), $sql);
        ?>
        <br>
        
       
       
            <table  class="table table-striped table-hover bg-light border border-primary">
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
    <?php

}

function like($txt)
{
    $sql="select * from solicitud_pro where rut_usu like '%$txt%' or nombre_usu like '%$txt%' or descripcion like '%$txt%'";
    $result=mysqli_query(conectar(),$sql);

    ?>
   <table  class="table table-striped table-hover bg-light border border-primary">
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
    </table>
    <?php

}
