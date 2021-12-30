<?php


function conectar()
{
    $con=mysqli_connect("localhost","root","root","enaexbom");
    return $con;
    
}
function validarCaracteres($atributo)
{
    $atributosql = mysqli_real_escape_string(conectar(), $atributo);
    $atributohtml = filter_var($atributosql, FILTER_SANITIZE_STRING);
    
    return $atributohtml;
}
function fechahoy()
{
    date_default_timezone_set('America/Santiago');
    $fecha=date('d-m-Y');
    return $fecha;
}

function hora()
{
    date_default_timezone_set('America/Santiago');
    $hora=date('H:i:s');
    return $hora;
}


function fechabd($fecha)
{
    $dia=substr($fecha,0,2);
    $mes=substr($fecha,3,2);
    $anho=substr($fecha,6,4);
    $fechabd=$anho."-".$mes."-".$dia;
    return $fechabd;
}

function fechaesp($fecha)
{
    $dia=substr($fecha,8,2);
    $mes=substr($fecha,5,2);
    $anho=substr($fecha,0,4);
    $fechaesp=$dia."-".$mes."-".$anho;
    return $fechaesp;
}




?>