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


function validarformproducto()
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



function validarsinogin(){
    if (document.formulariol.frutl.value == "") {
        alert("Debe Ingresar Rut");
        document.formulariol.frutl.focus();
        return false;
    }
    if (document.formulariol.fnombrel.value == "") {
        alert("Debe Ingresar Nombre");
        document.formulariol.fnombrel.focus();
        return false;
    }
    if (document.formulariol.fappaternol.value == "") {
        alert("Debe Ingresar Apellido Paterno");
        document.formulariol.fappaternol.focus();
        return false;
    }
    if (document.formulariol.fapmaternol.value == "") {
        alert("Debe Ingresar Apellido Materno");
        document.formulariol.fapmaternol.focus();
        return false;
    }
    if (document.formulariol.fusuariol.value == "") {
        alert("Debe Ingresar Usuario");
        document.formulariol.fusuariol.focus();
        return false;
    }
    if (document.formulariol.fcargol.value == "") {
        alert("Debe Ingresar Cargo");
        document.formulariol.fcargol.focus();
        return false;
    }
    if (document.formulariol.fclavel.value == "") {
        alert("Debe Ingresar Clave");
        document.formulariol.fclavel.focus();
        return false;
    }
    if (document.formulariol.festadol.value == "" || document.formulariol.festadol.value == 0)  {
        alert("Debe Ingresar Estado");
        document.formulariol.festadol.focus();
        return false;
    }

    document.formulariol.submit();
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

function validardeletusu()
{
    if(document.deleusu.frut.value==""){
    alert("Debe Ingresar Rut del Usuario que desea Eliminar.");
    document.deleusu.frut.focus();
    return false;
    }
document.deleusu.submit();
}