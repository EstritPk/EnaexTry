<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Formularios</title>
        <link rel="stylesheet" href="css/estilo_formulario.css">
    </head>
    <body>
        <form class="formulario" action="">
            <h1>Registro de Usuario</h1>
            <input type="text" id="frut" name="frut" placeholder="Rut" value="">
            <input type="text" id="fnombre" name="fnombre" placeholder="Nombre" value="">
            <input type="text" id="fappaterno" name="fappaterno" placeholder="Apellido Paterno" value="">
            <input type="text" id="fapmaterno" name="fapmaterno" placeholder="Apellido Materno" value="">
            <input type="text" id="fusuario" name="fusuario" placeholder="Usuario" value="">
            <input type="text" id="fcargo" name="fcargo" placeholder="Cargo" value="">
            <select id="festado" name="festado" placeholder="Estado"><br>>
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select><br>
            <input type="file" id="fimagen" name="fimagen" placeholder="Imagen" value="" class="custom-file-input"><br>
            
            <input type="submit" value="Registrar">
        </form>
    </body>
</html>

