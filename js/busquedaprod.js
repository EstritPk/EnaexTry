$(function() {
    cargartodos();

    $("#txtbusqueda").keyup(function(){
        like($("#txtbusqueda").val());
    });
 });

 function cargartodos()
 {
    $.ajax({
    type: "POST",
    url: 'consultas.php',
    data: 'op=1',
    success: function(response)
    {
        $("#grilla1").html(response);
   }
  });
 }

function like(txt)
 {
    $.ajax({
    type: "POST",
    url: 'consultas.php',
    data: 'op=2&txt='+txt,
    success: function(response)
    {
        $("#grilla1").html(response);
    }
  });
}