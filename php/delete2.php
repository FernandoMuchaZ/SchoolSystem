<?php
include('cn.php');

$id = $_GET['id'];

$sql = "DELETE FROM estudiante WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo '<script>
    alert("usuario eliminado correctamente")
    window.location.href=("../TablaEstudiante.php")
    </script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>