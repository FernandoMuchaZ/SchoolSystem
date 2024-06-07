
<?php 
session_start();
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
    $correo = $_POST["correo"];
    $pass = $_POST["clave1"]; // Hash de la contraseña

    // Verificar si ya se han excedido los intentos
    if (isset($_SESSION["intentos"]) && $_SESSION["intentos"] >= 3) {
        echo "Tu cuenta ha sido bloqueada después de 3 intentos fallidos.";
        exit(); // Detener la ejecución del script
    }

    //Preparar consulta-Seguridad de datos
    $stmt = $conn->prepare("SELECT * FROM registro WHERE correo = ? AND clave1= ?"); 
    //bind_param-->enlaza las variables al parameto en la sentencia SQL preparada
    $stmt->bind_param("ss", $correo, $pass);  
    //ejecutamos la consulta
    $stmt->execute();
    //Obtenemos el resultado
    $result=$stmt->get_result();
    //Obtener el numero de filas
    $num_rows=$result->num_rows;

    if($num_rows>0){
        // Obtener los datos del usuario
        $row = $result->fetch_assoc();
        $_SESSION["correo"] = $row["correo"]; //Asignamos el valor del campo correo a una sesion llamada correo
        unset($_SESSION["intentos"]);         // Reiniciar contador de intentos
           
        if($_SESSION["correo"] == "Fernando@hotmail.com") {
            echo '<script>
            alert("Sesion admin iniciada correctamente")
            window.location.href="../admin.php";
            </script>';
        }else{
            echo '<script>
            alert("Sesion usuario iniciada correctamente")
            window.location.href="../indexE.php";
            </script>';
        }           
    }else{
        echo '<script>
        alert("Datos incorrectos") 
        </script>';
        //incrementar contador de intentos
        if(!isset($_SESSION["intentos"])) {
            $_SESSION["intentos"]=1;
        }else{
            $_SESSION["intentos"]++;
        }
    }
    //Cerramos la declaracion
  $stmt->close();
}
    
// //Cerrando la conexion
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link rel="icon" href="../img/img-login.jpg">
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script src="./js/menu.js"></script>
        <link rel="stylesheet" href="../css/registrarse.css">
    </head>
    <div class="imgen-formu">
    
        </div>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>"> <!-- cambiar -->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" name="correo" placeholder="name@example.com" />
                                                <label for="inputEmail">Usuario</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <!--<input class="form-control" id="inputPassword" name="clave" type="password" placeholder="Password" />-->
                                                <input class="form-control" id="inputPassword" name="clave1" type="password" placeholder="Password" />
                                                <label for="inputPassword">Contraseña</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Recordar contraseña</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="../Rcuenta.html">Olvidaste la contraseña?</a>
                                                <button type="submit" class="btn btn-primary" onclick="login()">Iniciar sesion</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="../CrearCuenta.php">¿Una cuenta? Registrarse!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        
    </body>
</html>
