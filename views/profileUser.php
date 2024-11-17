<?php
define("BASE_URL", "/pagina/"); 
require_once("../config/conexion.php"); 

if (isset($_SESSION["usu_id"])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../../dashboard/stylesheets/all.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>

  <?php require_once("modulos/css.php"); ?>

</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  
  <!-- Navbar -->
  <?php require_once("modulos/header.php"); ?>
  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   <a href="../index.php" class="brand-link">
    <img src="../images/logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Proyecto página</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../images/Profile-PNG-File.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <p class="text-white"><?php echo  $_SESSION['usu_nom'] ." ". $_SESSION['usu_apep'] ; ?></p>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <?php require_once("modulos/menu.php"); ?>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Perfil Usuario</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Administracion</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="row" style="max-width: 100%;">
            <div class="col-12" id="accordion">
                <div class="card card-primary card-outline">
                    <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                        <div class="card-header">
                            <h4 class="text-black"><?php echo  $_SESSION['usu_nom'] ." ". $_SESSION['usu_apep'] ; ?></h4>
                        </div>
                    </a>
                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                        <div class="card-body">
                          <p>Correo: <?php echo  $_SESSION['usu_correo'] ; ?> </p>
                          <p>Telefono: <?php echo  $_SESSION['usu_telefono'] ; ?> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
  </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->

  <?php require_once("modulos/footer.php"); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php require_once("modulos/js.php"); ?>


</body>
</html>
<?php
}else{
  header("location: " . Conectar::ruta() . "views/404.php");
  exit();

}
?>
