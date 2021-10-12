<?php

$con=mysqli_connect("localhost","root","root","enaexbom");

$sql="INSERT INTO familia_pro SET desc_pro='".$_POST['desc_pro']."', categoria='".$_POST['categoria']."' ";
mysqli_query($con,$sql);

header('Location:mantenedor_tipofamilia.php');

?>