<?php
ob_start();
$Colegio = "./img/Inei46.jpg";
$imagenBase64 = "data:image/jpg;base64," . base64_encode(file_get_contents($Colegio));
?>

<?php
 $host = 'localhost';
 $user = 'root';
 $pass = '';
 $dbname = 'colegio';


 $conn= new mysqli($host, $user, $pass, $dbname);
 if (!$conn) {
     echo 'Error al conectar con la base de datos';
 } 


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <style>
       
       table {
         border: black 2px solid;
         border-collapse: collapse;
         position: relative;
         margin-left: auto;
         margin-right: auto;
         text-align: center;
         width: 70%;
        
       }

       th{
        border: black 2px solid;
       }
       td{
        background-color: #CBC6C6;
        border-top: 1px solid black; 
        border-bottom: 1px solid black; 
        border-left: none;
        border-right: none;
        margin: 10px;
        padding: 10px;
       

       }
       h1{
        position: relative;
        text-align: center;
        bottom: 50px;
       }
       img{
        margin-left: 10px;
        margin-right: 10px;
        margin-bottom: 20px;
        width: 80px;
       
       }
       .fecha{
        position: absolute;
        right: 100px;
        top: 30px;
        font-weight: 100;
       }
    </style>    
</head>
<body>
    <img src="<?php echo $imagenBase64 ?>" alt="Colegio">
    <div class="fecha">Fecha de creacion: 05/06/2024</div>
    <h1>Reporte de estudiantes</h1>
    <table class="table table-bordered border-primary">
        <tr>
            <th scope="col" style="text-align: center;" >Nombre</th>
            <th scope="col" style="text-align: center;">Apellido</th>
            <th scope="col" style="text-align: center;">Grado</th>
            <th scope="col" style="text-align: center;">Dni</th>
        </tr>

        <?php
            $consulta= "SELECT*FROM estudiante";
            $ejecutarConsulta = mysqli_query($conn, $consulta);
            $verfilas = mysqli_num_rows($ejecutarConsulta);
            $fila = mysqli_fetch_array($ejecutarConsulta);

            if(!$ejecutarConsulta){
                echo "error en la consulta";
            }else{
                if($verfilas<1){
                    echo "<tr><td>Sin registros</td></tr>";
                }else{
                    for($i=0; $i<=$fila; $i++){
                        echo '
                            <tr>
                                <td>'.$fila[0].'</td>
                                <td>'.$fila[1].'</td>
                                <td>'.$fila[2].'</td>
                                <td>'.$fila[3].'</td>
                            </tr>
                        ';
                        $fila = mysqli_fetch_array($ejecutarConsulta);
                    }

                }

            }    

        ?>
    </table>
</body>
</html>
<?php
ob_start();
$html=ob_get_clean();
echo $html;

require_once './PDF/dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();



$dompdf->loadHtml(ob_get_clean());
$dompdf->setPaper('A4','landscape');

$dompdf->render();

$dompdf->stream("reporte_.pdf", array("attachment"=> false));

?>