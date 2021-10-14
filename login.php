<!DOCTYPE html>
<html>
<head>
<title>formulario</title>
<link rel="stylesheet" href="css/estilo_login.css">
<script src="js/validaciones.js"></script>
</head>
<body>
    <div class="box">
        <h2>Login</h2>
        <form name="formlogin"  action="validaciones.php" method="POST">
            <div class="inputBox">
                <label for="fusuario">Usuario</label><br>
                <input type="text" id="fusuario" name="fusuario"><br>
            </div>
            <div class="inputBox">
                <label for="fclave">Password</label><br>
                <input type="password" id="fclave" name="fclave"><br>
            </div>
            <a href="form_usuario_login.php" >Registrar Usuario</a>
            <button type="button" onclick="validarlogin()" >Ingresar</button>
        </form>
    </div>
</body>
</html>
<?php
?>