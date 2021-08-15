const validar = (url,item) =>{

    if(inputs[0].value == ""){
        $(".mensajes").removeClass("d-none").addClass("alert-danger d-block").html("Campos Requerido *")
        inputs[0].focus()
    }else if(inputs[1].value == ""){
        $(".mensajes").removeClass("d-none").addClass("alert-danger d-block").html("Campos Requerido *")
        inputs[1].focus()
    }else{
        $(".mensajes").removeClass("d-none").addClass("alert-success d-block").html("Verificando...")
        $.ajax({
            type: "POST",
            url: "servidor/controlador/login.php",
            data: formulario.serialize(),
            success: (res) => {
                if (res == 1) {
                    $(".mensajes").removeClass("d-none").addClass("alert-success d-block").html("Sesion Iniciada")
                    window.location="vistas/index.php"; 
                }else{
                    $(".mensajes").removeClass("d-none").addClass("alert-danger d-block").html("res")
                }
            }
        })
    }

} 


$("#login").on("click", (e) => {
    e.preventDefault();
    validar();
})