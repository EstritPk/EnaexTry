function validarlogin() {
    if (document.formlogin.fusuario.value == "") {
        alert("Debe Ingresar Nomde de Usuario");
        document.formlogin.fusuario.focus();
        return false;
    }
    if (document.formlogin.fclave.value == "") {
        alert("Debe Ingresar Clave del Usuario");
        document.formlogin.fclave.focus();
        return false;
    }
    
    
    document.formlogin.submit();
}



function validarformulario() {
    if (document.formulario.frut.value == "") {
        alert("Debe Ingresar Rut");
        document.formulario.frut.focus();
        return false;
    }
    if (document.formulario.fnombre.value == "") {
        alert("Debe Ingresar Nombre");
        document.formulario.fnombre.focus();
        return false;
    }
    if (document.formulario.fappaterno.value == "") {
        alert("Debe Ingresar Apellido Paterno");
        document.formulario.fappaterno.focus();
        return false;
    }
    if (document.formulario.fapmaterno.value == "") {
        alert("Debe Ingresar Apellido Materno");
        document.formulario.fapmaterno.focus();
        return false;
    }
    if (document.formulario.fusuario.value == "") {
        alert("Debe Ingresar Usuario");
        document.formulario.fusuario.focus();
        return false;
    }
    if (document.formulario.fcargo.value == "") {
        alert("Debe Ingresar Cargo");
        document.formulario.fcargo.focus();
        return false;
    }
    if (document.formulario.fclave.value == "") {
        alert("Debe Ingresar Clave");
        document.formulario.fclave.focus();
        return false;
    }
    if (document.formulario.festado.value == "") {
        alert("Debe Ingresar Estado");
        document.formulario.festado.focus();
        return false;
    }

    document.formulario.submit();

}
function validarformulariosl() {
    if (document.formulariosl.frut.value == "") {
        alert("Debe Ingresar Rut");
        document.formulariosl.frut.focus();
        return false;
    }
    if (document.formulariosl.fnombre.value == "") {
        alert("Debe Ingresar Nombre");
        document.formulariosl.fnombre.focus();
        return false;
    }
    if (document.formulariosl.fappaterno.value == "") {
        alert("Debe Ingresar Apellido Paterno");
        document.formulariosl.fappaterno.focus();
        return false;
    }
    if (document.formulariosl.fapmaterno.value == "") {
        alert("Debe Ingresar Apellido Materno");
        document.formulariosl.fapmaterno.focus();
        return false;
    }
    if (document.formulariosl.fusuario.value == "") {
        alert("Debe Ingresar Usuario");
        document.formulariosl.fusuario.focus();
        return false;
    }
    if (document.formulariosl.fcargo.value == "") {
        alert("Debe Ingresar Cargo");
        document.formulariosl.fcargo.focus();
        return false;
    }
    if (document.formulariosl.fclave.value == "") {
        alert("Debe Ingresar Clave");
        document.formulariosl.fclave.focus();
        return false;
    }
    if (document.formulariosl.festado.value == "") {
        alert("Debe Ingresar Estado");
        document.formulariosl.festado.focus();
        return false;
    }

    document.formulario.submit();

}


function validarformproductos()
{
    if (document.formprod.cod_pro.value == "") {
        alert("Debe Ingresar Codigo del Producto");
        document.formprod.cod_pro.focus();
        return false;
    }
    if (document.formprod.nombre_pro.value == "") {
        alert("Debe Ingresar Nombre del Producto");
        document.formprod.nombre_pro.focus();
        return false;
    }
    if (document.formprod.desc_pro.value == "") {
        alert("Debe Ingresar una Descripcion de Producto");
        document.formprod.desc_pro.focus();
        return false;
    }
    if (document.formprod.tipo_pro.value == "" || document.formprod.tipo_pro.value == 0) {
        alert("Debe Ingresar Tipo de Producto");
        document.formprod.tipo_pro.focus();
        return false;
    }
    if (document.formprod.foto.value == "") {
        alert("Debe Ingresar Imagen del Producto");
        document.formprod.foto.focus();
        return false;
    }
    if (document.formprod.modelo_pro.value == "") {
        alert("Debe Ingresar Modelo del Producto");
        document.formprod.modelo_pro.focus();
        return false;
    }

    


    document.formprod.submit();
}

function validarforfam()
{
    if(document.formfam.desc_pro_f.value==""){
        alert("Debe Ingresar Descripcion del tipo del Producto");
        document.formfam.desc_pro_f.focus();
        return false;
    }
    if (document.formfam.categoria.value == "" || document.formfam.categoria.value == 0) {
        alert("Debe Ingresar Categoria del Producto");
        document.formfam.categoria.focus();
        return false;
    }
    
    document.formfam.submit();
}

