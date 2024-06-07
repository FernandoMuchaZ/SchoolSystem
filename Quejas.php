<?php 


$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'colegio';


$conn= new mysqli($host, $user, $pass, $dbname);
if (!$conn) {
    echo 'Error al conectar con la base de datos';
} 
    if(isset($_POST['Enviar'])){

    $nombre= $_POST['nombre'];
    $correo= $_POST['correo'];
    $telefono= $_POST['telefono'];
    $asunto= $_POST['asunto'];
    $comentario= $_POST['comentario'];
   

    $insertarDatos = "INSERT INTO contacto (nombre, correo, telefono, asunto, comentario) VALUES ('$nombre','$correo,'$telefono','$asunto','$comentario')";
    $ejecutarInsertar= mysqli_query($conn,$insertarDatos);
    if(!$ejecutarInsertar){
        echo "error en la linea SQL";
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
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilos2.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="./js/menu.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script> 
 
</head>

<body class="back">
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
                    <a class="navbar-brand" href="index.html">INEI 46</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html" class="nav_link">Inicio</a></li>
                        <li><a href="Quejas.html" class="nav_link">contacto</a></li>
                        <li><a href="RegistrarEstudiante.php" class="nav_link">Registrar Estudiante</a></li>
                        <li><a href="../AV1/php/cerrar.php" class="boton2 efecto2">Cerrar sesion</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="item active">
            <!-- Indicators -->
            <div class="carousel-caption2">
                    <h2><br><br>Contacto</h2>
                    <h4>
                    <font color="white"> <a href="index.html"> <font color="white">&nbsp;Inicio</a></font> >> Reclamos</font>
                    </h4></div>
        </div>
        
    </header>

    <h2>
        <font face="georgia" color="white">&nbsp;Ponerse en contacto</font>
    </h2>
    <p>
        <font color="white">&nbsp;Ingrese sus datos para poder contactarnos. Estamos prestos a responder cualquier
            consulta.</font>
    </p>
    <!-- Formulario -->
    <div class="fcontent">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="formu">
            <fieldset id="field">
                <legend>
                    <font face="arial black" color="white">Contactenos</font>
                </legend>
                <input type="text" name="nombre" id="" size="23" placeholder="Ingrese su nombre y apellidos">
                <br><br>
                <input type="email" name="correo" id="" placeholder="Ingrese su correo">
                <br><br>
                <input type="text" name="telefono" id="" placeholder="Ingrese su telefono">
                <br><br>
                <input type="text" name="asunto" id="" placeholder="Asunto">
                <br><br>
                <label for="">
                    <font color="white">Comentarios</font>
                </label><br>
                <textarea name="comentario" id="text" cols="30" rows="10"></textarea><br>
                <input type="submit" value="Enviar" name="Enviar">
            </fieldset>
        </form>
        <div class="textf">
            <div class="textforum">
                <h3>
                    <font face="comic sans ms">Datos de contacto</font>
                </h3>
                <p>Email: ColegioINEI46.com</p>
                <p>Telefono: 943 495 886</p>
                <p>WhatsApp: +51 976 899 837</p>
                <p>Direccion: Jr.Wiracocha #170</p>
            </div>

        </div>
    </div>
    <br>
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
                    <h2>SIGUENOS</h2>
                    <div class="red-social">
                        <a href="https://www.facebook.com/elhotelinca/" target="_blank" class="fa fa-facebook"></a>
                        <a href="https://www.instagram.com/incahotel/?hl=es-la" target="_blank" class="fa fa-instagram"></a>
                        <a href="https://mobile.twitter.com/incahotel" target="_blank" class="fa fa-twitter"></a>
                        <a href="https://www.youtube.com/watch?v=48CH6aDHX7w" target="_blank" class="fa fa-youtube"></a>
                    </div>
                </div>
            </div>
            <div class="grupo-2">
                <small>&copy; 2024 - Todos los Derechos Reservados.</small>
            </div>
        </footer>
        <!-- Icons -->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</body>

</html>