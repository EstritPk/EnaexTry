<!DOCTYPE html>
<html>

<head>
   
    <title>formulario</title>
    <link rel="stylesheet" href="css/estilo_login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="js/validaciones.js"></script>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppin&display=swap');

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            display: flex;
            height: 100vh;
            background-color: #004CD6;

        }

        form {
            align: left;
            margin-left: 75px;
            width: 60%;
            max-width: 600px;
            margin-top: 150px;
        }

        .btn {
            width: 130px;
            height: 45px;
            background: none;
            border: none;
            cursor: pointer;
            font-weight: 700;
            font-size:  1.05rem;
            border-radius: 15px;
            box-shadow: 2px 2px 2px #ffffff;
            color: #004CD6;
            background: #ffffff;
            position: relative;            
        }

        .btn::before{
            content: '';
            position: absolute;
            top: -10%;
            left: -5%;
            width: 110%;
            height: 120%;
            border-radius: 20px;
            z-index: -1;
            background: linear-gradient(45deg, #1457D6 , #1457D6 , #1457D6, #1457D6);
            transform: scale(0,8);
            transition: transform .0s;
        }

        .btn::after{
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg,#1457D6 , #1457D6 , #1457D6 , #1457D6);
            z-index: -2;
            filter: blur(10px);
            transform: scale(0,5);
            transition: transform .0.1s;

        }

        .btn:hover::before, .btn:hover::after{
            transform: scale(1);
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

                    <br><br>

                    <div class="row">
                        <div class="col-sm-1">
                        <i class="bi bi-person-fill" style="font-size: 37px; color: #ffffff;"></i>
                        </div>
                        <div class="col">
                        <input type="text" class="form-control" id="fusuario"  placeholder="Usuario" name="fusuario" style="margin-top : 9px; margin-left:15px;">
                        </div>
                    </div>
                   
                    <br><br><br>

                    <label for="fclave" class="" style="color: #fff;">Password : </label>

                    <br><br>

                    <div class="row">
                        <div class="col-sm-1">
                        <i class="bi bi-lock-fill"  style="font-size: 37px; color: #ffffff;"></i>
                        </div>
                        <div class="col">
                        <input type="password" class="form-control" id="fclave" placeholder="Password" name="fclave" style="margin-top : 10px; margin-left:15px;">
                        </div>
                    </div>

                   

                    <br><br>
                    <button type="button" class="btn btn-light" onclick="validarlogin()">
                        <h5>Ingresar</h5>
                    </button>
                    <br><br><br><br><br>
                    <a href="form_usuario_login.php" style="color: #fff;">¿ No tienes cuenta ? , Registrate aquí</a>
                </div>
            </div>
   
        </div>    
    </form>
    <img src="images/fork.png" style="margin-right: 50px; margin-top:75px;" >
</body>

</html>
<?php
?>