<?php 
include('./php/cn.php');
?>

<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sidebar Menu for Admin Dashboard | CodingNepal</title>
    <link rel="stylesheet" href="./css/admi.css" />
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link href="./css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="./js/eliminar.js"  crossorigin="anonymous"></script>
    <script src="./js/modificar.js"  crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/63f32b4402.js" crossorigin="anonymous"></script>
    <style>
        table, th , td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td{
            padding: 8px;
          
        }
        
    </style>
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
          <li class="item">
            <a href="Tablas.php">Usuarios</a>
          </li>
          <li class="item">
            <a href="TablaEstudiante.php">Estudiantes</a>
          </li>
          
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
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Estudiantes</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="admin.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Estudiantes</li>
                        
                    </ol>
                    
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Registro de estudiantes
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Grado</th>
                                        <th>Dni</th>
                                        
                                    </tr>
                                </thead>
                                <?php
                                     $sql = "SELECT * FROM estudiante";
                                     $result = $conn->query($sql);

                                     if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {?>
                                              <tr>
                                                       <td><?=$row['id']?></td>
                                                       <td><?=$row['nombre']?></td>
                                                       <td><?=$row['apellido']?></td>
                                                       <td><?=$row['grado']?></td>
                                                       <td><?=$row['dni']?></td>
                                                       <td>
                                                       <a href='php/edit2.php?id=<?=$row['id']?>' class="btn btn-small btn-warning">Editar <i class="fa-solid fa-pen-to-square"></i></a>
                                                       <a href='php/delete2.php?id=<?=$row['id']?>' class="btn btn-small btn-danger">Eliminar <i class="fa-solid fa-trash"></i></a>
                                                    
                                                       </td>
                                                    </tr>
                                           <?php }
                                     } else {
                                         echo "<tr><td colspan='5'>No hay usuarios</td></tr>";
                                     }
                                     
                                     ?>
                            
                            </table>
                        </div>
                        
                    </div>
                </div>
            </main>
 
      
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src=".js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="./assets/demo/chart-area-demo.js"></script>
    <script src="./assets/demo/chart-bar-demo.js"></script>
    <script src="./assets/demo/chart-pie-demo.js"></script>
    <script src="./js/admi.js"></script>
  </body>
</html>