<?php

$con=mysqli_connect("localhost","root","","enaexbom");

$sql="INSERT INTO producto SET cod_pro='".$_POST['cod_pro']."',nombre_pro='".$_POST['nombre_pro']."',desc_pro='".$_POST['desc_pro']."',tipo_pro='".$_POST['tipo_pro']."', foto='".$_FILES['foto']['name']."', modelo_pro='".$_POST['modelo_pro']."'  ";
mysqli_query($con,$sql);

move_uploaded_file($_FILES['foto']['tmp_name'],"images/fotos/".$_FILES['foto']['name']);

header('Location:mantenedor_producto.php');

?>