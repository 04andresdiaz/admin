const formulario = $("#form");
const inputs = formulario.find("input, textarea, select, .select2-container--default, .select2-selection--single");

/**Reglas de Validacion para los campos */
const reglas = {
    campoVacio: ""
}
/**
 * Funcioon Para Limpiar Formulario
 */
const limpiarFormulario = () => {
    $("#form")[0].reset();
}
/**
 * Validacion de los campos, por el tipo de evento que se haga sobre ellos
 */
inputs.on("keyup blur change", (e) => {
    switch(e.target.name){
        case e.target.name:
            if(e.target.value == reglas.campoVacio){
                $(".select2-selection--single").addClass("border-danger");
                $(e.target).addClass("border-danger");
                $(".mensajes").removeClass("d-none").addClass("alert-danger d-block").html("Campos Requeridos*")
            }else{
                $(e.target).removeClass("border-danger");
                $(".mensajes").addClass("d-none").removeClass("alert-danger d-block")
            }
        break;
    
    default:
        break;
    }

})