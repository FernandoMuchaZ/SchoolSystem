<?php
include('cn.php');


$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$sql = "SELECT * FROM registro WHERE id = $id";
$result = $conn->query($sql);
$user = $result->fetch_assoc();

if (isset($_POST["editar"])) {
    $name = $_POST['nombre'];
    $email = $_POST['correo'];
    $password = $_POST['clave1'];
    $sql = "UPDATE registro SET nombre='$name', correo='$email' , clave1='$password' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo '<script>
            alert("Usuario actualizaco correctamente")
            window.location.href="../tablas.php";
            </script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    exit();
}
?>
<!DOCTYPE html>
<html>
    <style>
        .formuEdit{
            border: solid 2px cadetblue;
            width: 400px;
            height: 200px;   
        }
        .lbl{
            margin-top: 100px;
            
            
        }
    </style>
<head>
    <title>Editar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../css/edit.css" rel="stylesheet" >
</head>
<body>
    <div class="container">
        <h2>Editar Usuario</h2>
        <form action="edit.php?id=<?php echo $user['id']; ?>" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="<?php echo $user['nombre']; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="correo" value="<?php echo $user['correo']; ?>" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="text" name="clave1" value="<?php echo $user['clave1']; ?>" required>
            </div>
            <input class="inputEditar" type="submit" value="Guardar cambios" name="editar">
        </form>
    </div>
</body>
</html>