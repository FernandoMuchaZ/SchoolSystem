<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrador</title>
    <link rel="icon" href="./img/LogoAdm.jpg">
    <link rel="stylesheet" href="./css/admi.css" />
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link href="./css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  
  </head>
  <body>
    <nav class="sidebar">
      <a href="admin.php" class="logo">Administrador</a>
      <img class="adm" src="./img/LogoAdm.jpg">
      <style>
        .adm{
          width: 20px;
          height: 20px;
          margin-left: 100px;
        }
      </style>
      <div class="menu-content">
        <ul class="menu-items">
          <!--Registros-->
          <li class="item">
            <div class="submenu-item">
              <span>Mantenimiento de usuarios</span>
              <i class="fa-solid fa-chevron-right"></i>
            </div>
            <ul class="menu-items submenu">
                <div class="menu-title">
                  <i class="fa-solid fa-chevron-left"></i>
                   Tablas
                </div>
                <li class="item">
                   <a href="Tablas.php">Usuarios</a>
                </li>
                <li class="item">
                   <a href="TablaEstudiante.php">Estudiantes</a>
                </li>
            </ul>
          </li>              
          
          <!-- Reportes -->
          <li class="item">
            <div class="submenu-item">
              <span>Reportes</span>
              <i class="fa-solid fa-chevron-right"></i>
            </div>
            <ul class="menu-items submenu">
                <div class="menu-title">
                  <i class="fa-solid fa-chevron-left"></i>
                   Reportes
                </div>
                <li class="item">
                   <a href="#">Cursos</a>
                </li>
                <li class="item">
                   <a href="Usuario.php">Usuarios</a>
                </li>
                <li class="item">
                   <a href="estudiante.php">Estudiantes</a>
                </li>
            </ul>
          </li>                   
      </div>
    </nav>
    <nav class="navbar">
      <i class="fa-solid fa-bars" id="sidebar-close"></i>
      <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0"> <!-- cambio -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="./php/cerrar.php">Salir</a></li><!-- cambio -->
            </ul>
        </li>
      </ul>
    </nav>
    

    <main class="main">
       <!-- Codigo De Graficos -->
      <div id="layoutSidenav_content">  
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Graficos estadisticos del INEI 46</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="admi.html">inicio</a></li>
                    <li class="breadcrumb-item active">Graficos</li>
                </ol>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-bar me-1"></i>
                                Ingresos Mensuales
                            </div>
                            <div class="card-body"><canvas id="myBarChart" width="100%" height="50"></canvas></div>
                            <div class="card-footer small text-muted">Actualizado ayer a las 11:59 pm</div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-pie me-1"></i>
                                Porcentaje de uso
                            </div>
                            <div class="card-body"><canvas id="myPieChart" width="550px" height="265 px"></canvas></div>
                            <div class="card-footer small text-muted">Actualizado ayer a las 11:59 pm</div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
      
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="./js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../assets/demo/chart-area-demo.js"></script>
    <script src="../assets/demo/chart-bar-demo.js"></script>
    <script src="../assets/demo/chart-pie-demo.js"></script>
    <script src="../js/admi.js"></script>
  </body>
</html>