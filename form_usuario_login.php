<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Formularios</title>
    <link rel="stylesheet" href="css/estilo_formulario.css">
    <link rel="stylesheet" href="css/estilo_tabla.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/validaciones.js"></script>

</head>

<body>
    <div class="card container">
        <div class="header">

        </div>
        <div class="card-body">
            <form class="formulario" name="formulariol" action="registrar_usuario_login.php" method="POST">
                <h1>Registro de Usuario</h1>
                <input type="text" id="frutl" name="frutl" placeholder="Rut" value="">
                <input type="text" id="fnombrel" name="fnombrel" placeholder="Nombre" value="">
                <input type="text" id="fappaternol" name="fappaternol" placeholder="Apellido Paterno" value="">
                <input type="text" id="fapmaternol" name="fapmaternol" placeholder="Apellido Materno" value="">
                <input type="text" id="fusuariol" name="fusuariol" placeholder="Usuario" value="">
                <input type="text" id="fcargol" name="fcargol" placeholder="Cargo" value="">
                <input type="password" id="fclavel" name="fclavel" placeholder="Clave" value="">
                <select id="festadol" name="festadol" placeholder="Estado"><br>>
                    <option name="festadol" value="1">Activo</option>
                    <option name="festadol" value="0">Inactivo</option>
                </select><br>               
            </form>
        </div>
        <div class="card-footer">
            <input type="button" id="btn" onclick="validarsinogin()" value="Registrar">
        </div>
    </div>
</body>

</html>