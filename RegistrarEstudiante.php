<?php
       
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'colegio';


        $conn= new mysqli($host, $user, $pass, $dbname);
        if (!$conn) {
            echo 'Error al conectar con la base de datos';
        } 


    //Declarando variables de formulario
    if(isset($_POST['Registrar'])){

        $dni=$_POST['dni'];
        $nombre= $_POST['nombre'];
        $apellido= $_POST['apellido'];
        $grado= $_POST['grado'];
        
    
    
        $insertarDatos = "INSERT INTO estudiante (dni, nombre, apellido, grado) VALUES ('$dni','$nombre','$apellido','$grado')";
        

         if ($conn->query($insertarDatos) === TRUE) {
            echo '<script>
            alert("Estudiante registrado correctamente")
             window.location.href="RegistrarEstudiante.php";
            </script>';
        }else{
            echo '<script>
            alert("Usuario no registrado")
            window.location.href="RegistrarEstudiante.php";
            </script>';
        }

       
        }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio INEI-46</title>
    <link rel="icon" href="./img/hotel-inca2.jpg">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilos2.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/Estudiante.css">

     <!-- Ventanas -->
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body style="background-color: #51555a82;">

    <header id="head">
        <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">INEI 46</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html" class="nav_link">Inicio</a></li>
                        <li><a href="Quejas.php" class="nav_link">contacto</a></li>
                        <li><a href="RegistrarEstudiante.php" class="nav_link">Registrar estudiante</a></li>
                        <li><a href="./php/cerrar.php" class="boton2 efecto2">Cerrar sesion</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

    </header>
    
    <div class="body1">
    <div class="container1">
        <h2>Registro de Estudiante</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>"> 
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido">
            </div>
            <div class="form-group">
                <label for="dni">Dni:</label>
                <input type="text" id="dni" name="dni">
            </div>
            <div class="form-group">
                <label for="curso">Grado</label>
                <select id="curso" name="grado" >
                    <option value="1">1° grado</option>
                    <option value="2">2° grado</option>
                    <option value="3">3° grado</option>
                </select>
            </div>
           
             <div class="form-group">
                <input onclick="registro(e)" type="submit" name="Registrar" value="Registrar" >
            </div>

            </div>
        
        </form>
    </div>
    </div>

    
     <!--::::Pie de Pagina::::::-->
     <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="./img/Inei46.jpg" alt="Logo de SLee Dw">
                    </a>
                </figure>
            </div>
            <div class="box-t">
                <h2>SOBRE NOSOTROS</h2>
                <p>Somos un acogedor colegio ubicado en Ate.</p>
                <p>En el colegio Inei 46 V.R.H.T, no solo impartimos conocimientos, 
                sino que también promovemos valores fundamentales como el respeto, la responsabilidad y la colaboración.</p>
            </div>
            <div class="box-r">
                <h2>Redes sociales</h2>
                <div class="red-social">
                    <a href="https://www.facebook.com/INEI46VITARTE" target="_blank" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/incahotel/?hl=es-la" target="_blank" class="fa fa-instagram"></a>
                    <a href="https://mobile.twitter.com/incahotel" target="_blank" class="fa fa-twitter"></a>
                    <a href="https://www.youtube.com/watch?v=48CH6aDHX7w" target="_blank" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2024 <b></b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
    


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Icons -->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</body>

</html>