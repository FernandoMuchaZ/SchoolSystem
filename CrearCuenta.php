<?php 
    
    //NO BORRAR

    // $nombre=$_POST['nombre'];
    // $correo=$_POST["correo"];
  

    // //conexion a base de datos
    // $consulta="INSERT INTO registro (nombre, correo) VALUES ('$nombre','$correo')"; 
    // $verificar_usu= mysqli_query($conexion, "SELECT * FROM registro WHERE correo='$correo'");

    // if (mysqli_num_rows($verificar_usu)>0) {
    // echo '<script>
    // alert("El usuario ya esta registrado")
    // window.history.go(-1);
    // </script>';
    // exit;
    // }
    // $resultado=mysqli_query($conexion, $consulta);
    // if (!$resultado) {
    //  echo 'Error al registrase';
    // } else {
    //     echo '<script>
    //     alert("Usuario registrado correctamente")
    //      window.location.href="index.php";
    //     </script>';

    // }
    // //Cerrando conexion
    // mysqli_close($conexion);


    // if(!empty($POST['correo'] && !empty($POST['clave1']))){
    //     $sql= "INSERT INTO registro (correo, clave1) VALUES(:correo,:clave1)";
    //     $stmt= $conn-->prepare($sql);
    //     $stmt->bindParm(':correo',$POST['correo']);
    //     $stmt->bindParm(':clave1',$POST['clave1']);

    //     if($stmt->execute()){
    //         $message = "Se ha creado un usuario";

    //     }else {
    //         $message = "Ocurrio un error al crear su contraseña";
    //     }
    // }


    $localhost = "localhost";
    $root = "root";
    $pass = "";
    $dbname = "colegio";

    $conn = new mysqli($localhost, $root, $pass, $dbname);

    if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
    }

// Procesar el formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $pass = $_POST["clave1"]; // Hash de la contraseña
    $pass2 = $_POST["clave2"];

    // Consulta SQL para insertar el nuevo usuario
    $sql = "INSERT INTO registro (nombre, correo, clave1,clave2) VALUES ('$nombre', '$correo', '$pass', '$pass2')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>
        alert("Usuario registrado correctamente")
         window.location.href="index.html";
        </script>';
    } else {
        echo '<script>
        alert("Usuario registrado correctamente")
         window.location.href="index.html";
        </script>';
    }
}
// //Cerrando conexion
     mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INEI 46</title>
    <link rel="icon" href="./img/hotel-inca2.jpg">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilos2.css">
    <link rel="stylesheet" href="css/registrarse.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="./js/validar.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="./js/menu.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
   
<body >
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
                        
                       

                        <!-- botones de login y registro -->

                        
                   
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>
    <br><br><br>
    <div class="contenedor-form contenido">
        <div class="imgen-formu">

        </div>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post' class="formu" id="formu">
            <div class="text-formu">
                <h2>
                    Crear cuenta
                </h2>
                <p>Crea una cuenta para tener una mejor experiencia</p>
            </div>
            <div class="input_field">
                <input type="text" id="name" name="nombre" required/>
                <span></span>
                <label>Nombre</label>
            </div>
            <div class="input_field">
                <input type="email" id="email" name="correo" required/>
                <span></span>
                <label>Ingrese su correo electrónico</label>
            </div>
            <div class="input_field">
                <input type="text" id="name" name="Dni" required/>
                <span></span>
                <label>Documento de identidad</label>
            </div>
            <div class="input_field">
                <input type="password" id="password" name="clave1" required/>
                <span></span>
                <label>Ingrese su contraseña</label>
            </div>
            <div class="input_field">
                <input type="password" id="password2" name="clave2" required/>
                <span></span>
                <label>Confirme su contraseña</label>
            </div>
            <input type="submit" value="Registrarse"/>
            <div class="conectar">
                <div class="signup_conectar">¿Ya tienes una cuenta?&nbsp;&nbsp;&nbsp;<a href="./php/index.php">Iniciar sesión</a> </div>
            </div>
            <p class="warnings" id="warnings"></p>
        </form>
    </div>
    <br>
</body>
</html>