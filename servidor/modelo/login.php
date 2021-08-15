<?php 
    include("../connect.php");
    class classLogin extends DB {
        public function funLogin($usuario, $contrasena){
            try {
                $sentensia = "SELECT usuarios.* , empleados.nombreEmpleado FROM usuarios INNER JOIN empleados ON usuarios.idEmpleado = empleados.idEmpleado WHERE nombreUsuario = :usuario";
                $res = $this->connect()->prepare($sentensia);
                $res->execute(['usuario' => $usuario]);
                $datos = $res->fetch();
                if($res->rowCount() AND password_verify($contrasena, $datos['contrasenaUsuario'])){
                    echo 1;
                    session_start();
                    $_SESSION['id'] = $datos[0];
                    $_SESSION['nombreEmpleado'] = $datos[5];                    
                }else{
                    echo "Inicio De Sesión Fallido";
                }
            } catch (PDOException $e){
                print_r('Error connection: ' . $e->getMessage());
            }
        }
    }


?>