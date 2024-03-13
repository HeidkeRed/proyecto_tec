var tabla;

//Función que se ejecuta al inicio
function init() {
    mostrarform(false);
    listar();

    $("#formulario").on("submit", function(e)
    {
        guardaryeditar(e);
    });
}

//Función para limpiar los campos del formulario
function limpiar() {
    $("#nombre").val("");
    $("#descripcion").val("");
    $("#idcategoria").val("");
}
//Función para mostrar u ocultar el formulario
function mostrarform(flag) {
    limpiar();
    if (flag) {
        $("#listadoregistros").hide();
        $("#formularioregistros").show();  
    } else {
        $("#listadoregistros").show();  // Mostrar la lista de registros
        $("#formularioregistros").hide();  // Ocultar el formulario
    }
}
//Función para cancelar el formulario
function cancelarform() {
    limpiar();
    mostrarform(false);  // Mostrar la lista de registros
}
//Función para listar los registros
function listar() {
    tabla = $('#tbllistado').DataTable({
        "processing": true,
        "serverSide": true,
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
        "ajax": {
            url: '../ajax/categoria.php?op=listar',
            type: "get",
            dataType: "json",
            error: function(e) {
                console.log(e.responseText);
            }
        },
        "destroy": true,
        "pageLength": 5,
        "order": [[0, "desc"]]
    }); }
    function guardaryeditar(e) {
        e.preventDefault();
        $("#btnGuardar").prop("disabled", true);
        var formData = new FormData($("#formulario")[0]);
    
        $.ajax({
            url: "../ajax/categoria.php?op=guardaryeditar",
            type: "POST", // Cambiado a POST
            data: formData,
            contentType: false,
            processData: false,
    
            success: function(datos) {
                bootbox.alert(datos);
                mostrarform(false);
                tabla.ajax.reload();
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
        limpiar();
    }
       

init();