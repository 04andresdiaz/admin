<?php

    require("../modelo/login.php");

    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    if(isset($usuario) and isset($contrasena)){
        $obj = new classLogin;
        $obj->funLogin($usuario,$contrasena);
    }else{
        echo "Escribe Datos Correctos, jajajaja";
    }


?>