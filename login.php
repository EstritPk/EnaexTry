<!DOCTYPE html>
<html>

<head>
    <title>formulario</title>
    <link rel="stylesheet" href="css/estilo_login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="js/validaciones.js"></script>
    <style>
        body {

            background-color: #004CD6;

        }

        form {
            align: left;
            margin-left: 100px;
            width: 100%;
            max-width: 900px;
            margin-top: 150px;
        }

        .btn {
            width: 140px;
            height: 55px;
            border-radius: 0px;
            box-shadow: 2px 2px 5px #000;
            color: #004CD6;
        }
    </style>

</head>

<body>
    <form name="formlogin" action="validaciones.php" method="POST">
        <h1 style="color: #FFF;">Inicia Sesion</h1>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col">

                    <label for="fusuario" class="" style="color: #fff;">Nombre de Usuario : </label>

                    <br>
                    <input type="text" class="form-control" id="fusuario" placeholder="Usuario" name="fusuario">


                    <br><br><br>

                    <label for="fclave" class="" style="color: #fff;">Password : </label>

                    <input type="password" class="form-control" id="fclave" placeholder="Password" name="fclave">


                    <br><br>
                    <button type="button" class="btn btn-light" onclick="validarlogin()">
                        <h5>Ingresar</h5>
                    </button>
                    <br><br><br><br><br>
                    <a href="form_usuario_login.php" style="color: #fff;">No tienes cuenta ? Registrate aqui</a>
                </div>
                <div class="col">
                     
                </div>
            </div>
        </div>
    </form>

</body>

</html>
<?php
?>