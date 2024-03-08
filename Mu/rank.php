
    <!-- Importar el archivo style.css -->
    <link rel="stylesheet" href="/Mu/css/style.css">
    <!-- Importar Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/main-c3860.css">

<?php
// Función para generar una tabla a partir de los resultados de una consulta
function generarTabla($result) {
    $flag = 0;
    // Verificar si se encontraron resultados en la consulta
    if(mysqli_num_rows($result) > 0) {
        // Iniciar la tabla con la clase .mi-tabla
        echo '<table class="mi-tabla"> 
                <tr> 
                    <th> Id </th> 
                    <th> Name </th> 
                    <th> Battle Power </th> 
                </tr>';
        
        // Iterar sobre cada fila de resultados
        while($row = mysqli_fetch_assoc($result)){
            // Incrementar el contador
            $flag++;
            // Imprimir una fila de la tabla con los datos de la fila actual
            echo '<tr> 
                    <td>' . $flag. '</td>
                    <td>' . $row["rname"] . '</td>
                    <td>' . $row["combatforce"] . '</td>
                </tr>';
        }
        // Cerrar la tabla
        echo '</table>';
    } else {
        // Mostrar un mensaje si no se encontraron resultados
        echo "No se encontraron resultados";
    }
}

// Incluir el archivo connectMuGame1.php que contiene la conexión a la base de datos
include('connectMuGame1.php');
// Consultar los datos de la tabla t_roles ordenados por fuerza de combate, limitados a 15 registros
$sql = "SELECT * FROM t_roles ORDER BY combatforce DESC LIMIT 15";
$result = mysqli_query($con, $sql);

// Incluir el archivo connectMuGame2.php que contiene la conexión a la segunda base de datos
include('connectMuGame2.php');
// Consultar los datos de la tabla t_roles ordenados por fuerza de combate, limitados a 15 registros
$sql = "SELECT * FROM t_roles ORDER BY combatforce DESC LIMIT 15";
$result2 = mysqli_query($con, $sql);
?>


<div class="container">
    <div class="row">
        <div class="col-md-6 text-center">
            <br><br>
            <h1>NEW SERVER</h1>
            <?php generarTabla($result); ?>
        </div>
        <div class="col-md-6 text-center">
            <br><br>
            <h1>LEGACY SERVER</h1>
            <?php generarTabla($result2); ?>
            <br><br>
        </div>
    </div>
</div>

