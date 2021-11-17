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
    <style>
           body {
            background-color: #004CD6;

        }
    </style>
</head>

<body>
    <div class="card container" style="margin-top: 200px; max-width:500px;">
        <div class="header">
        <h2 class="text-center">Registro de Usuario</h2>
        </div>
        <div class="card-body">
            <form class="formulario" name="formulariol" action="registrar_usuario_login.php" class="border border-warning" method="POST">
                    <div class="row p-2">
                        <div class="col">
                            <input type="text" class="form-control" id="frutl" name="frutl" placeholder="Rut" value="">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="fnombrel" name="fnombrel" placeholder="Nombre" value="">
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col">
                            <input type="text" class="form-control" id="fappaternol" name="fappaternol" placeholder="Apellido Paterno" value="">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="fapmaternol" name="fapmaternol" placeholder="Apellido Materno" value="">
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col">
                            <input type="text" class="form-control" id="fusuariol" name="fusuariol" placeholder="Usuario" value="">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="fcargol" name="fcargol" placeholder="Cargo" value="">
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col">
                            <input type="password"  class="form-control" id="fclavel" name="fclavel" placeholder="Clave" value="">
                        </div>
                        <div class="col">
                            <select id="festadol"  class="form-control" name="festadol" placeholder="Estado"><br>>
                                <option name="festadol" value="1">Activo</option>
                                <option name="festadol" value="0">Inactivo</option>
                            </select>
                        </div>
                    </div>
                </form>
        </div>
        <div class="card-footer text-center">
         <input type="button"  class="btn btn-primary" style="min-width: 150px;" id="btn" onclick="validarsinogin()" value="Registrar">
        </div>
    </div>
</body>

</html>