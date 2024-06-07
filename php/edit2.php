<?php
include('cn.php');


$id = isset($_GET['id']) ? intval($_GET['id']) : 0;


$sql = "SELECT * FROM estudiante WHERE id = $id";
$result = $conn->query($sql);
$user = $result->fetch_assoc();


if (isset($_POST["editar"])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido']; 
    $sql = "UPDATE estudiante SET nombre='$nombre', apellido='$apellido' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo '<script>
            alert("Estudiante actualizado correctamente")
            window.location.href="../TablaEstudiante.php"
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
<head>
    <title>Editar Estudiante</title>
    <link href="../css/edit.css" rel="stylesheet" >
</head>
<body>
    <div class="container">
        <h2>Editar Estudiante</h2>
        <form action="edit2.php?id=<?php echo $user['id']; ?>" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="<?php echo $user['nombre']; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Apellido:</label>
                <input type="text" id="apellido" name="apellido" value="<?php echo $user['apellido']; ?>" required>
            </div>
            <input class="inputEditar" type="submit" value="Guardar cambios" name="editar">
        </form>
    </div>
</body>
</html>