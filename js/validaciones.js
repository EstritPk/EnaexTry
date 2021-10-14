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

function validarformlogin()
{
    if (document.formulariol.frut.value == "") {
        alert("Debe Ingresar Rut");
        document.formulariol.frut.focus();
        return false;
    }
    if (document.formulariol.fnombre.value == "") {
        alert("Debe Ingresar Nombre");
        document.formulariol.fnombre.focus();
        return false;
    }
    if (document.formulariol.fappaterno.value == "") {
        alert("Debe Ingresar Apellido Paterno");
        document.formulariol.fappaterno.focus();
        return false;
    }
    if (document.formulariol.fapmaterno.value == "") {
        alert("Debe Ingresar Apellido Materno");
        document.formulariol.fapmaterno.focus();
        return false;
    }
    if (document.formulariol.fapmaterno.value == "") {
        alert("Debe Ingresar Apellido Materno");
        document.formulariol.fapmaterno.focus();
        return false;
    }
    if (document.formulariol.fusuario.value == "") {
        alert("Debe Ingresar Usuario");
        document.formulariol.fusuario.focus();
        return false;
    }
    if (document.formulariol.fcargo.value == "") {
        alert("Debe Ingresar Cargo");
        document.formulariol.fcargo.focus();
        return false;
    }
    if (document.formulariol.fclave.value == "") {
        alert("Debe Ingresar Clave");
        document.formulariol.fclave.focus();
        return false;
    }
    if (document.formulariol.festado.value == "") {
        alert("Debe Ingresar Estado");
        document.formulariol.festado.focus();
        return false;
    }

    document.formulariol.submit();
}

function validarformproducto()
{
    if (document.formrep.cod_rep.value == "") {
        alert("Debe Ingresar Codigo del Repuesto");
        document.formrep.cod_rep.focus();
        return false;
    }
    if (document.formrep.nombre_rep.value == "") {
        alert("Debe Ingresar Nombre del repuesto");
        document.formrep.nombre_rep.focus();
        return false;
    }
    if (document.formrep.marca_rep.value == "") {
        alert("Debe Ingresar marca del repuesto");
        document.formrep.marca_rep.focus();
        return false;
    }
    if (document.formrep.modelo_rep.value == "") {
        alert("Debe Ingresar Modelo del repuesto");
        document.formrep.modelo_rep.focus();
        return false;
    }
    if (document.formrep.tag_rep.value == "" || document.formrep.tag_rep.value == 0) {
        alert("Debe Ingresar TAG");
        document.formrep.tag_rep.focus();
        return false;
    }
    if (document.formrep.desc_rep.value == "") {
        alert("Debe Ingresar descripcion del repuesto");
        document.formrep.desc_rep.focus();
        return false;
    }

    


    document.formrep.submit();
}

function validarformins()
{
    if(document.formins.cod_ins.value=="")
    {
        alert("Debe Ingresar Codigo del Insumo");
        document.formins.cod_ins.focus();
        return false;
    }
    if(document.formins.nombre_ins.value=="")
    {
       alert("Debe Ingresar Nombre del Insumo");
       document.formins.nombre_ins.focus();
      return false;
    }
    if(document.formins.desc_ins.value=="")
    {
        alert("Debe Ingresar una Descripcion");
        document.formins.desc_ins.focus();
        return false;
    }
    if(document.formins.tipo_ins.value=="" || document.formins.tipo_ins.value== 0)
    {
        alert("Debe seleccionar el tipo");
        document.formins.tipo_ins.focus();
        return false;
    }
    document.formins.submit();
}

