<?php
function crearQuery($tipoConsulta)
{
    include("include/conexion.php");
    $query = "";
    switch ($tipoConsulta) {
        case 1:
            $destino = $_GET['destinoVuelo1'];
            $fecha = $_GET['fechaVuelo1'];
            $query = "SELECT id_vuelo, origen, destino, status FROM vuelos where destino = '{$destino}' AND fecha = STR_TO_DATE('{$fecha}', '%m/%d/%Y')";
            break;
        case 2:
            $destino = $_GET['destinoVuelo1'];
            $origen = $_GET['salidaVuelo1'];
            $fecha = $_GET['fechaVuelo1'];
            $query = "SELECT id_vuelo, origen, destino, status FROM vuelos where origen = '{$origen}' AND destino = '{$destino}' AND fecha = STR_TO_DATE('{$fecha}', '%m/%d/%Y')";
            break;
    }
    return $query;
}

function consultarVuelos($cnn, $query, $error)
{    
    $salida = "";
    $resultados = mysqli_query($cnn, $query);
    
    if (mysqli_num_rows($resultados) > 0) {
        $salida .= '<table class="table table-success table-striped">';
        $salida .= '<head>';
        $salida .= ' <tr>';
        $salida .= '    <th scope="col">Num. Vuelo</th>';
        $salida .= '    <th scope="col">Origen</th>';
        $salida .= '    <th scope="col">Destino</th>';
        $salida .= '    <th scope="col">Status</th>';
        $salida .= ' </tr>';
        $salida .= '</head>';
        $salida .= '<tbody>';
        while ($valores = mysqli_fetch_array($resultados)) {
            $salida .= '<tr>';
            $salida .= '<th scope="row">' . $valores["id_vuelo"] . '</th>';
            $salida .= '<td>' . $valores["origen"] . '</td>';
            $salida .= '<td>' . $valores["destino"] . '</td>';
            $salida .= '<td>' . $valores["status"] . '</td>';
            $salida .= '</tr>';
        }
        $salida .= '</tbody>';
        $salida .= '</table>';
    } else {
        $salida .= '<div class="alert alert-danger" role="alert">';
        $salida .= $error;
        $salida .= '</div>';
    }    
    return $salida;
}
