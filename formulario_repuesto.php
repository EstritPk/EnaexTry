<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Formularios</title>
        <link rel="stylesheet" href="css/estilo_formulario.css">
    </head>
    <body>
        <form class="formulario" action="registrar_repuesto.php" method="POST">
            <h1>Registro de Repuesto</h1>
            <input type="text" id="cod_rep" name="cod_rep" placeholder="Codigo" value="">
            <input type="text" id="nombre_rep" name="nombre_rep" placeholder="Nombre Repuesto" value="">
            <input type="text" id="marca_rep" name="marca_rep" placeholder="Marca del Repuesto" value="">
            <input type="text" id="modelo_rep" name="modelo_rep" placeholder="Modelo del Repuesto" value="">

            <textarea name="desc_rep" id="desc_rep" placeholder="Descripcion del Repuesto"></textarea><br>
            
            <select id="tag_equipo" name="tag_equipo" placeholder="Tag del equipo"><br>>
                <option value=" ">Seleccione el Equipo</option>
                <option value="P-300A/B">P-300A/B</option>
                <option value="TGC-300">TGC-300</option>
                <option value="P-302">P-302</option>
                <option value="A-302A">A-302A</option>
            </select><br>
            <input type="number" id="cod_alma" name="cod_alma" placeholder="1701" readonly value=""><br>
            <input type="text" id="fimagen" name="fimagen" placeholder="Imagen" value="" class="custom-file-input"><br>
            
            <input type="submit" value="Registrar Repuesto">
        </form>
    </body>
</html>