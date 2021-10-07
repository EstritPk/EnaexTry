<?php



$con=mysqli_connect("localhost","root","","enaexbom");


//$sql="INSERT INTO repuesto SET cod_rep='".$_POST['cod_rep']"', nombre_rep='eje acople',`marca_rep`='adidas',`modelo_rep`='NDB4985797',`tag_rep`='p-302',`desc_rep`='eje bien buenardo',`cod_alma_r`=1701,`file_rep`='asdf'";
$sql="INSERT INTO repuesto SET cod_rep='".$_POST['cod_rep']."', nombre_rep='".$_POST['nombre_rep']."', marca_rep='".$_POST['marca_rep']."', modelo_rep='".$_POST['modelo_rep']."',
tag_rep='".$_POST['tag_rep']."', desc_rep='".$_POST['desc_rep']."', cod_alma=1701, file_rep'".$_POST['file_rep']."' ";
mysqli_query($con,$sql);
//$cont=mysqli_num_rows($result);

header('Location:formulario_repuesto.php');


?>