<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Formularios</title>
        <link rel="stylesheet" href="css/estilo_formulario.css">
        <link rel="stylesheet" href="css/estilo_tabla.css">
        <script src="js/validaciones.js"></script>
    </head>
    <body>
        <form class="formulario" name="formulariol" action="registrar_usuario_login.php" method="POST">
            <h1>Registro de Usuario Sl</h1>
            <input type="text" id="frutl" name="frutl" placeholder="Rut" value="">
            <input type="text" id="fnombrel" name="fnombrel" placeholder="Nombre" value="">
            <input type="text" id="fappaternol" name="fappaternol" placeholder="Apellido Paterno" value="">
            <input type="text" id="fapmaternol" name="fapmaternol" placeholder="Apellido Materno" value="">
            <input type="text" id="fusuariol" name="fusuariol" placeholder="Usuario" value="">
            <input type="text" id="fcargol" name="fcargol" placeholder="Cargo" value="">
            <input type="password" id="fclavel" name="fclavel" placeholder="Clave" value="">
            <select id="festadol" name="festadol" placeholder="Estado"><br>>
                <option  name="festadol" value="1">Activo</option>
                <option  name="festadol" value="0">Inactivo</option>
            </select><br>
            
            <input type="button" id="btn" onclick="validarsinogin()" value="Registrar">
        </form>    
    </body>    
</html>    