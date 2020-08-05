$(document).ready(function() {
    tablaPersonas = $("#tablaPersonas").DataTable({
        "columDefs":[{
            "targets": -1,
            "data": null,
            "defaultContent": "<div class='text-center'><div class='btn-group'><button clas='btn btn-primary btnEditar'>Editar</button><button class='btn btn-danger btnBorrar'>Borrar</button></div></div>"
        }],

        //Lenguaje a Españolcon CDN
        'language':{
        "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
    });


$("#btnNuevo").click(function(){
    $("#formPersonas").trigger("reset");
    $(".modal-header").css("background-color", "#28a745");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nueva Persona");
    $("#modalCRUD").modal("show");
});

});