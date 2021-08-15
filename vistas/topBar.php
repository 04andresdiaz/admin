<?php
        if(isset($_SESSION["id"])){
            $nombreEmpleado = $_SESSION['nombreEmpleado'];
        }else{
            header("Location: ../servidor/logout.php");
        }
?>
<ul class="navbar-nav ml-auto">
<div class="topbar-divider d-none d-sm-block"></div>
<!-- Nav Item - User Information -->
<li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $nombreEmpleado;?></span>
        <img class="img-profile rounded-circle"
            src="../img/undraw_profile.svg">
    </a>
    <!-- Dropdown - User Information -->
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
        aria-labelledby="userDropdown">
        <a class="dropdown-item" href="../servidor/logout.php">
            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
            Configuracion
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Cerrar Sesión
        </a>
    </div>
</li>

</ul>