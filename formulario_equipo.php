<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Formularios</title>
        <link rel="stylesheet" href="css/estilo_formulario.css">
    </head>
    <body>
        <form class="formulario" action="">
            <h1>Registro de Insumo</h1>
            <input type="number" id="cod_ins" name="cod_ins" placeholder="Codigo" value="">
            <input type="text" id="nombre_ins" name="nombre_ins" placeholder="Nombre Insumo" value="">
            <textarea name="desc_ins" id="desc_ins" placeholder="Descripcion de Insumo"></textarea><br>
            <select id="tipo_ins" name="tipo_ins" placeholder="Tipo Insumo"><br>>
                <option value=" ">Seleccione Tipo de Insumo</option>
                <option value="vestimenta">Vestimenta</option>
                <option value="aseo">Aseo</option>
                <option value="herramienta">Herramienta</option>
                <option value="lubricante">Lubricante</option>
            </select><br>
            <input type="number" id="cod_alma" name="cod_alma" placeholder="1701" readonly value=""><br>

            
            <input type="submit" value="Registrar Insumo">
        </form>
    </body>
</html>