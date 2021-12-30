<?php

include("functions/setup.php");

switch ($_POST['op']) {
    case 1:
        todos();
        break;
    case 2:
        like($_POST['txt']);
        break;
}

function todos()
{
    $sql = "SELECT * FROM producto ";




    $result = mysqli_query(conectar(), $sql);
?>
    <br>



    <table class="table table-striped table-hover bg-light border border-primary">
        <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Tipo Producto</th>
            <th>FOTO</th>
            <th>Modelo</th>
            <th>Stock</th>
            <th>Entrega</th>
            <th></th>
        </tr>
        <?php while ($datos = mysqli_fetch_array($result)) { ?>
            <tr>
                <td><?php echo $datos['cod_pro']; ?></td>
                <td><?php echo $datos['nombre_pro']; ?></td>
                <td><?php echo $datos['desc_pro']; ?></td>
                <td><?php echo $datos['tipo_pro']; ?></td>
                <td>
                    <?php
                    if ($datos['foto'] == "") {
                    ?>
                        <img src="images/fotos/user.png" width="80px" height="80px">
                    <?php
                    } else {
                    ?>
                        <img src="images/fotos/<?php echo $datos['foto']; ?>" width="80px" height="80px">
                    <?php
                    }
                    ?>
                </td>
                <td><?php echo $datos['modelo_pro']; ?></td>
                <td><?php echo $datos['stock_pro']; ?></td>
                <td><a href="entregas.php?cod_pro=<?php echo $datos['cod_pro']; ?>"><img src="images/entrega.svg"  width="32" height="32"></a> </td>
                <td><a href="mantenedor_producto.php?cod_pro=<?php echo $datos['cod_pro']; ?>" value="mod"><img src="images/update.png"></a> | <a href="registrar_producto.php?proeli=<?php echo $datos['cod_pro']; ?>" value="del"><img src="images/delete.png"></a>
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
    $sql = "select * from producto where cod_pro like '%$txt%' or nombre_pro like '%$txt%' or desc_pro like '%$txt%'";
    $result = mysqli_query(conectar(), $sql);

?>
     <table class="table table-striped table-hover bg-light border border-primary">
        <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Tipo Producto</th>
            <th>FOTO</th>
            <th>Modelo</th>
            <th>Stock</th>
            <th>Entrega</th>
            <th></th>
        </tr>
        <?php while ($datos = mysqli_fetch_array($result)) { ?>
            <tr>
                <td><?php echo $datos['cod_pro']; ?></td>
                <td><?php echo $datos['nombre_pro']; ?></td>
                <td><?php echo $datos['desc_pro']; ?></td>
                <td><?php echo $datos['tipo_pro']; ?></td>
                <td>
                    <?php
                    if ($datos['foto'] == "") {
                    ?>
                        <img src="images/fotos/user.png" width="80px" height="80px">
                    <?php
                    } else {
                    ?>
                        <img src="images/fotos/<?php echo $datos['foto']; ?>" width="80px" height="80px">
                    <?php
                    }
                    ?>
                </td>
                <td><?php echo $datos['modelo_pro']; ?></td>
                <td><?php echo $datos['stock_pro']; ?></td>
                <td><a href="entregas.php?cod_pro=<?php echo $datos['cod_pro']; ?>"><img src="images/entrega.svg"  width="32" height="32"></a> </td>
                <td><a href="mantenedor_producto.php?cod_pro=<?php echo $datos['cod_pro']; ?>" value="mod"><img src="images/update.png"></a> | <a href="registrar_producto.php?proeli=<?php echo $datos['cod_pro']; ?>" value="del"><img src="images/delete.png"></a>
                <?php
            }
                ?>
                </td>
            </tr>


    </table>
    </table>
<?php

}
