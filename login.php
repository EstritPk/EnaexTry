<!DOCTYPE html>
<html>
<head>
<title>formulario</title>
<link rel="stylesheet" href="css/estilo_login.css">
</head>
<body>


    <div class="box">

        <h2>Login</h2>

        <form  action="consulta.php" method="POST">

            <div class="inputBox">

                <label for="frmusuario">Usuario</label><br>
                <input type="text" id="frmusuario" name="frmusuario"><br>
            </div>
            
            <div class="inputBox">
            
                <label for="frmclave">Password</label><br>
            
                <input type="password" id="frmclave" name="frmclave"><br>
            </div>
            
            <button type="submit">Ingresar</button>
    
        </form>
    </div>
    
       

</body>
</html>
<?php
?>