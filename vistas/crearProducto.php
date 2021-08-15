<?php
    session_start();
    if(isset($_SESSION["id"])){

    }else{
        header("Location: ../servidor/logout.php");
    }

?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Crear Productos</title>
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

</head>

<body id="page-top">
    <div id="wrapper">
            <?php include("menu.php") ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <?php include("topBar.php") ?>
                </nav>
            </div>
            <!-- End of Main Content -->
                
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Crear Nuevo Producto</h1>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="contenedorForms">
                         <div class="alert alert-danger d-none mensajes" id="mensajes" role="alert"></div>
                            <form class="user d-flex flex-column align-items-center" id="form">
                                <div class="form-group w-50">
                                    <input type="text" class="form-control form-control-user"
                                        id="nombreProducto" name="nombreProducto" aria-describedby="emailHelp"
                                        placeholder="Nombre Del Producto">
                                </div>
                                <div class="form-group w-50">
                                    <input type="number" class="form-control form-control-user"
                                        id="cantidadProducto" name="cantidadProducto" aria-describedby="emailHelp"
                                        placeholder="Cantidad De Producto">
                                </div>
                                <div class="form-group w-50">
                                    <input type="text" class="form-control form-control-user"
                                        id="detallesProducto" name="detallesProducto" aria-describedby="emailHelp"
                                        placeholder="Detalles Producto">
                                </div>
                                <div class="form-group w-50">
                                    <input type="number" step="any" class="form-control form-control-user"
                                        id="precioCompraProducto" name="precioCompraProducto" aria-describedby="emailHelp"
                                        placeholder="Precio de Compra Producto">
                                </div>
                                <div class="form-group w-50">
                                    <input type="number" class="form-control form-control-user"
                                        id="precioVentaProducto" name="precioVentaProducto" aria-describedby="emailHelp"
                                        placeholder="Precio De Venta Producto">
                                </div>
                                <div class="form-group w-50">
                                    <select name="categoriaProducto" id="categoriaProducto" class="categoryName form-control form-control-user">
                                    </select>
                                </div>
                                <button id="login" name="login" class="btn btn-primary btn-user btn-block w-50">
                                    Ingresar
                                </button>
                                <hr>
                            </form>
                        </div>   
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <?php include("footer.php") ?>
        </div>
    </div>
    <?php include("modalCerrarSesion.php") ?>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../js/sb-admin-2.min.js"></script>
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script>
        $('.categoryName').select2({
        placeholder: 'Selecciona una categoría',
        ajax: {
          url: 'ajax.php',
          dataType: 'json',
          delay: 250,
          processResults: function (data) {
            return {
              results: data
            };
          },
          cache: true
        }
      });
    </script>

</body>

</html>