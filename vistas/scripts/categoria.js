var tabla;

//Funcion que se ejecuta al inicio
function init(){
    mostrarform(false);
    listar();
}

//Funcion limpiar
function limpiar()
{
    $("#nombre").val("");
    $("#descripcion").val("");
    $("#idcategoria").val("");

}

//Funcion mostrar formulario
function mostrarfrom(flag)
{
    limpiar();
    if (flag)
    {
        $("#listadoregistros").hide();
        $("#formularioregistros").show();  
    }
    else
    {
        $("#listadoregistros").hide();
        $("#formularioregistros").show();  
    }
}

//Fuction cacelarfrom
function cancelarform()
{
    limpiar();
    mostrarform();
}

//Funcion Listar
function listar()
{
    tabla=$('#tbllistado').dataTable(
    {
        "aProcessing": true,
        "aServerside": true,
        dom: 'Bfrtip',
        buttons: [

                 ]
    }    
    )
}