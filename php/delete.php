<?php
include('cn.php');

$id = $_GET['id'];

$sql = "DELETE FROM registro WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo '<script>
    alert("usuario eliminado correctamente")
    window.location.href=("../tablas.php")
    </script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>